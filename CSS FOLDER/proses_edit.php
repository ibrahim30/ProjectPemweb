<?php
  include "koneksi.php";
  $firstname    =$_POST['firstname'];
  $lastname     =$_POST['lastname'];
  $username     =$_POST['username'];
  $institution  =$_POST['institution'];
  $email        =$_POST['email'];
  $counttry     =$_POST['counttry'];
  $input = mysqli_query($koneksi, "UPDATE signup SET firstname='$firstname',lastname='$lastname',username='$username',institution='$institution',email='$email',counttry='$counttry'
  where username='$username'") or die (mysqli_error($koneksi));

  if($input){
    echo "
    <script>
      alert('Data Berhasil Diubah.');
      window.location = 'view.php';
      </script>";
  }else{
    echo "
    <script>
      alert('Data Gagal Diubah.');
      window.location = 'view.php';
      </script>";
  }

 ?>
