<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location: daftar.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Perpustakaan Digital SMAN 2 Kota Tangerang Selatan">
    <meta name="author" content="IT Support SMAN 2 Kota Tangerang Selatan">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, Perpustakaan Digital SMAN 2 Kota Tangerang Selatan">
    <link rel="icon" href="img/kb.jpg">

    <title>Halaman Utama</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="halamanAD.php">Perpus Digital</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="halamanAD.php">Home</a></li>
                    <li><a href="tampilAD.php">DATA ADMIN</a></li>
                    <li><a href="daftar.php">PENDAFTARAN</a></li>
                    <li><a href="cetak_kartu.php">CETAK KARTU</a></li>
                    <li><a href="laporan.php">LAPORAN</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <!-- Your content goes here -->

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>