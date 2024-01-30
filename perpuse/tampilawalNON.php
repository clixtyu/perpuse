<!DOCTYPE html>
<html>
<head>

	
	  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="Perpustakaan Digital SMAN 2 Kota Tangerang Selatan">
    <meta name="author" content="IT Support SMAN 2 Kota Tangerang Selatan">
  <meta name="keywords" content="HTML, CSS, JavaScript, PHP, Perpustakaan Digital SMAN 2 Kota Tangerang Selatan">
    <link rel="icon" href="img/kb.jpg">

    <title>Halaman Tamu</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>
  <div class="container">
  	<div class="page-header">
  		<tr>
  			<td>
			<a class="btn btn-primary btn-lg" href="home.php">HOME</a>
		</td>
  		</tr>
  		<tr> 
		<td>
			<a class="btn btn-primary btn-lg" href="tampilawal.php">Form Anggota</a>
		</td>
		<td>
			
			<a  class="btn btn-primary btn-lg" href="tampilawalNON.php">Form Non Anggota</a>
		</td>
	</tr>
<div class="container">
	<div class="page-header">
<h3 align="center">FORM NON ANGGOTA</h3>
	</div>
<form action="" method="post">
	<table class="table" >

		<tr>
			<td>Nama Pengunjung</td>
			<td></td>
			<td>
				<input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Pengunjung" size="30">
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td></td>
			<td>
				<input  class="form-control" type="text" name="Alamat" placeholder="Alamat Pengunjung" size="30">
			</td>
		</tr>
		<tr>
			<td>Instansi</td>
			<td></td>
			<td>
				<input  class="form-control" type="text" name="Instansi" placeholder="Asal Instansi" size="30">
			</td>
		</tr>
		<tr>
			<td>Tujuan</td>
			<td></td>
			<td>
				<select  class="form-control" name="Tujuan"> 
					<option value="" selected>-Tujuan Kunjungan-</option>
					<option>Membaca</option>
					<option>Refreshing</option>
					<option>Tugas Kuliah</option>
					<option>Pencarian Literatur</option>
					<option>Pengembalian Buku</option>
					<option>Pendaftaran Anggota</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button class="btn btn-success btn-lg" type="submit" name="tambah">Simpan</button>
				</td>
		</tr>
	</table>
</form>
<hr/>
<i>Created by IT Support SMAN 2 Kota Tangerang Selatan</i>
<?php 
 if (isset($_POST['tambah'])){
 	include 'koneksi.php';
 	$nama    = htmlspecialchars(strtolower($_POST['nama']));
 	$Alamat  = htmlspecialchars(strtolower($_POST['Alamat']));
 	$Instansi = htmlspecialchars(strtolower($_POST['Instansi']));
 	$Tujuan  = htmlspecialchars(strtolower($_POST['Tujuan']));

 	if ($nama == '' || $Alamat =='' || $Tujuan ==''){
 		echo "
 		<script>
 		alert('Data Belum Lengkap');
 		document.location.href = 'tampilawalNON.php';
 		</script>
 		";
 	}else {
 		$today = '20' . sprintf(date('y-m-d'));
 		$tglkunjung = $today;

 		$simpan = mysqli_query($konek , "INSERT INTO tamu VALUES (null,'$nama','$Alamat', '$Instansi' ,'$tglkunjung', '$Tujuan')
 			");
 		if ($simpan){
 			echo "
 		<script>
 		alert('Data Berhasil Disimpan');
 		alert('Selamat Datang di Perpustakaan Digital SMAN 2 Kota Tangerang Selatan');
 		document.location.href = 'tampilawalNON.php';
 		</script>
 		";
 		}else {
 			echo "
 		<script>
 		alert('Data Gagal Disimpan');
 		document.location.href = 'tampilawalNON.php';
 		</script>
 		";
 		}
 	}
 }


 ?>