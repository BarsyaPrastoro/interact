<html>
<?php
require '../session.php';
require '../connection.php';

$email = $_SESSION['email'];

$sql = "SELECT acara.id, acara.nama as 'namaacara', acara.deskripsi, acara.tanggal, acara.tempat, acara.harga, acara.kreator, acara.tanggalpengajuan,acara.status, acara.foto, tempat.id as 'idtempat', tempat.nama as 'namatempat', tempat.alamat, tempat.telpon FROM acara JOIN tempat ON acara.tempat = tempat.id ";
$acara= mysqli_query($con,$sql) or die(mysqli_error($con));

?>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INTERACT</title>


    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/stylePages.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/animated.css">



    <link rel="stylesheet" href="../font/fontawesome/css/all.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/customPages.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>





</head>

<body>
    <?php include '../navbar.php'; ?>
    <main class="content-wrapper">
        <section id="content-wrapper" class="event">
            <div class="row">
                <?php while($acaras = mysqli_fetch_array($acara)): ?>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../img/service/join.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $acaras['namaacara'] ?></h5>
                            <p class="card-text">Tempat: <?= $acaras['namatempat'] ?></p>
                            <p class="card-text">Alamat: <?= $acaras['alamat'] ?></p>
                            <p class="card-text">Tanggal/Jam: <?= $acaras['tanggal'] ?></p>
                            <p class="card-text">registration fee: Rp.<?= $acaras['harga'] ?></p>
                            <p class="card-text"><?= $acaras['deskripsi'] ?></p>
                            <?php 
                            $idevent = $acaras['id'];
                            $harga = $acaras['harga'];
                            $nama = $acaras['namaacara']; ?>
                            <a href="../indexmidtrans.php/?idevent=<?php echo $idevent.'&harga='.$harga .'&nama='.$nama?>" class="btn btn-primary">Join Event</a>
                        </div>
                    </div>
                <?php endwhile; ?> 
            </div>
            <div class="create">
                <a href="morepages/createevent.php"><span class="fa fa-plus"></span></a>
            </div>
        </section>
    </main>
</body>

</html>