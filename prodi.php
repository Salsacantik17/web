<?php
include 'tamplate/header.php';
include 'tamplate/sidebar.php';

$servername = "localhost";
$database = "poliban";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$query = "SELECT * FROM prodi";
$hasil = mysqli_query($conn, $query);

$data = [];
while ($baris = mysqli_fetch_assoc($hasil)) {
  $data[] = $baris;
}


?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Program Studi</h3>

              <div class="card-tools">
               <a href="tambahprodi.php" class="btn btn-primary">Tambah</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Prodi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($data as $d) {
                  ?>
                    <tr>
                      <td><?php echo $i++ ?></td>
                      <td><?php echo $d['Nama_Prodi'] ?></td>
                      <td><a href="editprodi.php?id_prodi=<?= $d['ID_Prodi']?>" class="btn btn-warning">Edit</a>
                        <a href="hapusprodi.php?id_prodi=<?= $d['ID_Prodi']?>" class="btn btn-danger">Hapus</a>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->



      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include 'tamplate/footer.php';
?>