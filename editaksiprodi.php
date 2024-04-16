<?php
require 'koneksi.php';
$id =$_POST['ID_Prodi'];
$prodi = $_POST['namaprodi'];

$query = "UPDATE prodi SET nama_prodi='$prodi' WHERE id_prodi=$id ";

mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0){
    echo "
           <script>
           alert('Data berhasil ditambahkan');
           document.location.href='prodi.php;
           </script>
    ";
}else {
    echo "
        <script>
        alert ('Data gagal ditambahkan');
        </script>
    ";
    echo mysqli_error($conn);
};
 ?>

