<?php
require 'koneksi.php';
include 'tamplate/header.php';
include 'tamplate/sidebar.php';

$id = $_GET['ID_Prodi'];

$query = "SELECT * FROM prodi WHERE ID_Prodi=$id";
$hasil = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($hasil);

?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
    <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Progaram Studi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="editaksiprodi.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" name="id_prodi" value="<?= $data['ID_Prodi'] ?>">
                    <label for="namaprodi">Nama Prodi</label>
                    <input type="text" name="namaprodi" class="form-control" id="namaprodi" value="<?= $data['Nama_Prodi'] ?>">
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
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