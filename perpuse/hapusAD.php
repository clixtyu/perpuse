<?php 
session_start();
if (isset($_SESSION['login']) ){
	include 'koneksi.php';
	$hapus = mysqli_query($konek , "DELETE FROM admin WHERE idadmin = '$_GET[id]'");
	if (!$hapus) {
		echo "
		<script>
		alert('Data Gagal Dihapus');
		document.location.href = 'tampilAD.php';
		</script>
		";
	}else {
		echo "
		<script>
		alert('Data Berhasil Dihapus');
		document.location.href = 'tampilAD.php';
		</script>
		";
	}
}else {
	echo "
	<script>
	alert('Anda Tidak Memiliki Akses di Halaman Ini');
	document.location.href = 'loginAD.php';
	</script>
	";
}

 ?>