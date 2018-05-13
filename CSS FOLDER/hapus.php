<?php
  include "koneksi.php";

  $username     =$_GET['username'];

  $hapus = mysqli_query($koneksi, "DELETE FROM signup WHERE username='$username'")
  or die (mysqli_error($koneksi));

  if($hapus){
    echo "
    <script>
      alert('Data Berhasil Dihapus.');
      window.location = 'view.php';
      </script>";
  }else{
    echo "
    <script>
      alert('Data Gagal Dihapus.');
      window.location = 'view.php';
      </script>";
  }

 ?>
