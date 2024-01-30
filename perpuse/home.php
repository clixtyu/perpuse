<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Halaman Utama</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Perpustakaan Digital SMAN 2 Kota Tangerang Selatan">
    <meta name="author" content="IT Support SMAN 2 Kota Tangerang Selatan">
  <meta name="keywords" content="HTML, CSS, JavaScript, PHP, Perpustakaan Digital SMAN 2 Kota Tangerang Selatan">
  <meta property="og:image" itemprop="image" content="img/kb.jpg">
  
  <!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:url" content="https:perpuse.000webhostapp.com/home.php/">
<meta property="og:title" content="Halaman Utama">
<meta property="og:description" content="Perpustakaan Digital SMAN 2 Kota Tangerang Selatan">
<meta property="og:image" itemprop="image" content="img/kb.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https:perpuse.000webhostapp.com/home.php">
<meta property="twitter:title" content="Halaman Utama">
<meta property="twitter:description" content="Perpustakaan Digital SMAN 2 Kota Tangerang Selatan">
<meta property="twitter:image" content="img/kb.jpg">
  
        <link rel='stylesheet' href='css/bootstrap.min.css'>
        
    <link rel="icon" href="img/kb.jpg">
<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
    </head>
<body style="margin-top: 25px; margin-left: 50px">
    
    
<div class="container">
		<div class="page-header">
			<h2 align="center">Halaman Utama</h2>
		</div>
	<hr/> 
	<h3 align="center">Selamat Datang di Perpustakaan Digital SMAN 2 Kota Tangerang Selatan</h3>
	<table align="center">
		<tr>
			<td>
				<a class="btn btn-primary"  href="loginAD.php">LOGIN ADMIN</a>
				<a class="btn btn-primary" href="tampilawal.php">BUKU TAMU</a>
			</td>
		</tr>
</table>
    
<?php
// Deteksi IP Pribadi
$ip_pribadi=$_SERVER['REMOTE_ADDR'];
// Deteksi IP Utama
$ip_utama = gethostbyaddr($_SERVER['REMOTE_ADDR']);
// Deteksi Perangkat
$deteksi_perangkat = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
if($deteksi_perangkat) {
    $perangkat = "Handphone, Tablet atau Sejenisnya";
}
else {
    $perangkat = "Komputer atau Notebook";
}
// Deteksi Browser
if(strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape')) {
    $browser = 'Netscape';
}
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
    $browser = 'Mozilla Firefox';
}
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
    $browser = 'Google Chrome';
}
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera')) {
    $browser = 'Opera';
}
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')) {
    $browser = 'Internet Explorer';
}
else {
    $browser = 'Lainnya';
}  
?>


<br>
<br>

<!–– Menampilkan Informasi Yang Didapatkan  ––>
<center>
    <strong><?php echo "<br>IP Address Utama Anda:</strong> ".$ip_utama;?>
    <strong><?php echo "<br>IP Address Anda:</strong> ".$ip_pribadi;?>
    <strong><?php echo "<br>Perangkat:</strong> ".$perangkat;?>
    <strong><?php echo "<br>Browser:</strong> ".$browser;?>
</center>    

</body>
</html>