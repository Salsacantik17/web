<?php
include 'tamplate/header.php';
include 'tamplate/sidebar.php';
$servername = "localhost";
$database = "poliban";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$query = "SELECT * FROM mahasiswa JOIN prodi ON mahasiswa.id_prodi = prodi.id_prodi";   
$hasil = mysqli_query($conn, $query);

$data = [];
while ($baris = mysqli_fetch_assoc($hasil)) {
  $data[] = $baris;
}

?>

  <!-- /.navbar -->

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Nama Prodi</th>
                      <th>No Hp</th>
                      <th>Alamat</th>
                      <th>Foto</th>
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
                      <td><?php echo $d['NIM'] ?></td>
                      <td><?php echo $d['Nama'] ?></td>
                      <td><?php echo $d['Nama_Prodi'] ?></td>
                      <td><?php echo $d['Nomor_Hp'] ?></td>
                      <td><?php echo $d['Alamat'] ?></td>
                      <td><?php echo $d['Foto'] ?></td>
                      <td><a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                      </td>
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