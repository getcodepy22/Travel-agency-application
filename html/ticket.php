<?php

include "../php/config.php";

session_start();

$nom = $_SESSION['nom'] ?? '';
$prenom = $_SESSION['prenom'] ?? '';

$hasReservation = false;

if (!empty($nom) && !empty($prenom)) {

    $req = "SELECT * FROM reservations 
            WHERE nom='$nom' AND prenom='$prenom'";

    $result = $conn->query($req);

    if ($result && mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        $reference = $row['reference'];
        $depart = $row['depart'];
        $arrive = $row['arrive'];
        $date = $row['date_depart'];
        $heure = $row['heure_depart'];
        $class = $row['class'];

        $hasReservation = true;
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>E-Ticket</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<style>
body{
    background: linear-gradient(120deg,#1e3c72,#2a5298);
}

.ticket{
    max-width: 750px;
    margin: auto;
    background: white;
    border-radius: 15px;
    overflow: hidden;
    display: flex;
    box-shadow: 0 15px 35px rgba(0,0,0,0.3);
}

.left{
    flex: 2;
    padding: 25px;
}

.right{
    flex: 1;
    background: #f8f9fa;
    text-align: center;
    padding: 20px;
    border-left: 2px dashed #ccc;
}

.route{
    font-size: 28px;
    font-weight: bold;
}

.label{
    color: gray;
    font-size: 12px;
}

.value{
    font-weight: bold;
}

.ticket-number{
    font-size: 14px;
    color: #555;
}

.actions{
    text-align: center;
    margin-top: 20px;
}
</style>

</head>

<body>

<div class="container py-5">

<div class="ticket">

<!-- GAUCHE -->
<div class="left">

<h5 class="text-primary">✈️ VOYAGE FACILE</h5>

<?php if($hasReservation){ ?>

    <p class="ticket-number">
        Billet N° <span><?php echo $reference; ?></span>
    </p>

    <div class="route mt-3">
        <?php echo $depart ." → ".$arrive; ?>
    </div>

    <div class="row mt-4">

        <div class="col-6">
            <div class="label">DATE</div>
            <div class="value"><?php echo $date; ?></div>
        </div>

        <div class="col-6">
            <div class="label">HEURE</div>
            <div class="value"><?php echo $heure; ?></div>
        </div>

        <div class="col-6 mt-3">
            <div class="label">PASSAGER</div>
            <div class="value">
                <?php echo strtoupper($nom)." ".strtoupper($prenom); ?>
            </div>
        </div>

        <div class="col-6 mt-3">
            <div class="label">CLASSE</div>
            <div class="value">
                <?php echo strtoupper($class); ?>
            </div>
        </div>

    </div>

<?php } else { ?>

    <p class="ticket-number">
        Billet N° <span id="ticketId"></span>
    </p>

    <div class="route mt-3" id="route"></div>

    <div class="row mt-4">

        <div class="col-6">
            <div class="label">DATE</div>
            <div class="value" id="date"></div>
        </div>

        <div class="col-6">
            <div class="label">HEURE</div>
            <div class="value" id="heure"></div>
        </div>

        <div class="col-6 mt-3">
            <div class="label">PASSAGER</div>
            <div class="value" id="passager"></div>
        </div>

        <div class="col-6 mt-3">
            <div class="label">CLASSE</div>
            <div class="value">ÉCONOMIQUE</div>
        </div>

    </div>

<?php } ?>

</div>

<!-- DROITE -->
<div class="right">

    <p class="label">SCAN</p>
    <div id="qrcode"></div>

    <hr>

    <p class="small">
        Présentez ce QR à l’embarquement
    </p>

</div>

</div>

<div class="actions">

    <button onclick="downloadPDF()" class="btn btn-light">
        📄 Télécharger PDF
    </button>

    <a href="../index.php" class="btn btn-outline-light ms-2">
        Accueil
    </a>

</div>

</div>

<script>

<?php if(!$hasReservation){ ?>

const params = new URLSearchParams(window.location.search);

const depart = params.get("aadepart") || "N/A";
const arrive = params.get("aarrive") || "N/A";
const date = params.get("dated") || "N/A";
const heure = params.get("heurp") || "N/A";
const ref = params.get("ref") || "VF-XXXX";

document.getElementById("ticketId").textContent = ref;
document.getElementById("route").textContent = `${depart} → ${arrive}`;
document.getElementById("date").textContent = date;
document.getElementById("heure").textContent = heure;

const nom = params.get("nom") || "Client";
const prenom = params.get("prenom") || "";

document.getElementById("passager").textContent =
    prenom + " " + nom;

const secureData = JSON.stringify({
    ref,
    depart,
    arrive,
    date,
    heure
});

<?php } else { ?>

const secureData = JSON.stringify({
    ref: "<?php echo $reference; ?>",
    depart: "<?php echo $depart; ?>",
    arrive: "<?php echo $arrive; ?>",
    date: "<?php echo $date; ?>",
    heure: "<?php echo $heure; ?>"
});

<?php } ?>

// QR CODE
new QRCode(document.getElementById("qrcode"), {
    text: secureData,
    width: 120,
    height: 120
});

// PDF
async function downloadPDF() {

    const { jsPDF } = window.jspdf;

    const canvas = await html2canvas(
        document.querySelector(".ticket")
    );

    const img = canvas.toDataURL("image/png");

    const pdf = new jsPDF();

    pdf.addImage(img, 'PNG', 10, 10, 180, 0);

    pdf.save("ticket.pdf");
}

</script>

</body>
</html>