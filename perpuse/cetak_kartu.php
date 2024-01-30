<?php
include 'koneksi.php';

// Jumlah data per halaman
$jumlah_data_per_halaman = isset($_GET['entries']) ? (int)$_GET['entries'] : 30;

// Tentukan halaman saat ini
$halaman_saat_ini = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;

// Hitung offset data
$offset = ($halaman_saat_ini - 1) * $jumlah_data_per_halaman;

// Query data dengan batasan limit dan offset
$search_query = isset($_GET['q']) ? mysqli_real_escape_string($konek, $_GET['q']) : '';
$where_clause = $search_query ? "WHERE nama LIKE '%$search_query%'" : '';
$query = "SELECT * FROM anggota $where_clause LIMIT $offset, $jumlah_data_per_halaman";
$data = mysqli_query($konek, $query);

include 'headerAD.php';
?>

<style>
  table {
    margin-top: 50px;
    border-collapse: collapse;
  }

  footer {
    margin-top: 200px;
  }
</style>

<div class="container">
  <div class="page-header">
    <h2>Halaman Cetak Kartu</h2>
  </div>

  <!-- Form Pencarian -->
  <form action="" method="GET">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Cari Nama" name="q" value="<?= htmlentities($search_query) ?>">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit">Cari</button>
      </div>
    </div>
  </form>

  <!-- Show Entries Dropdown -->
  <form action="" method="GET" class="input-group mb-3">
    <label for="entries">Show Entries:</label>
    <select name="entries" id="entries" class="form-control" onchange="this.form.submit()">
      <option value="10" <?= ($jumlah_data_per_halaman == 10) ? 'selected' : '' ?>>10</option>
      <option value="30" <?= ($jumlah_data_per_halaman == 30) ? 'selected' : '' ?>>30</option>
      <option value="50" <?= ($jumlah_data_per_halaman == 50) ? 'selected' : '' ?>>50</option>
      <!-- Add more options as needed -->
    </select>
  </form>
  
  <?php
// Query untuk mengambil jumlah total anggota
$query_total_anggota = "SELECT COUNT(*) AS total_anggota FROM anggota";
$result_total_anggota = mysqli_query($konek, $query_total_anggota);
$row_total_anggota = mysqli_fetch_assoc($result_total_anggota);

// Jumlah anggota saat ini
$total_anggota = $row_total_anggota['total_anggota'];

// Tampilkan jumlah anggota
echo '<center><p>Jumlah Anggota Saat Ini: ' . $total_anggota . '</p></center>';
?>


  <table class="table table-bordered table-striped">
    <tr>
      <th>NO</th>
      <th>FOTO</th>
      <th>NO ANGGOTA</th>
      <th>NAMA</th>
      <th>ALAMAT</th>
      <th>AKSI</th>
    </tr>
    <?php
    $i = 1;
    while ($dta = mysqli_fetch_assoc($data)) :
    ?>
      <tr>
        <td style="text-align: center;"><?= $i ?></td>
        <td>
          <img src="img/<?= $dta['foto'] ?>" width="50" height="50">
        </td>
        <td><?= $dta['noanggota'] ?></td>
        <td><?= $dta['nama'] ?></td>
        <td><?= $dta['alamat'] ?></td>
        <td>
          <a class="btn btn-success btn-sm" href="cetak_kartu_proses.php?id=<?= $dta['idanggota'] ?>" target="_blank">CETAK KARTU</a>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endwhile; ?>
  </table>
  
   <!-- Tampilkan link halaman -->
  <?php
  $query_jumlah_data = "SELECT COUNT(*) AS jumlah FROM anggota $where_clause";
  $result_jumlah_data = mysqli_query($konek, $query_jumlah_data);
  $row_jumlah_data = mysqli_fetch_assoc($result_jumlah_data);

  $jumlah_data = $row_jumlah_data['jumlah'];
  $jumlah_halaman = ceil($jumlah_data / $jumlah_data_per_halaman);

  echo '<ul class="pagination">';
  for ($halaman = 1; $halaman <= $jumlah_halaman; $halaman++) {
    echo '<li class="page-item ' . ($halaman == $halaman_saat_ini ? 'active' : '') . '">';
    echo '<a class="page-link" href="?halaman=' . $halaman . '&q=' . htmlentities($search_query) . '&entries=' . $jumlah_data_per_halaman . '">' . $halaman . '</a>';
    echo '</li>';
  }
  echo '</ul>';
  ?>
  
</div>

<?php include 'footer.php'; ?>