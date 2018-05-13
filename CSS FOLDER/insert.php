<?php
  include "koneksi.php";
  $firstname    =$_POST['firstname'];
  $lastname     =$_POST['lastname'];
  $username     =$_POST['username'];
  $institution  =$_POST['institution'];
  $email        =$_POST['email'];
  $counttry     =$_POST['counttry'];
  $input = mysqli_query($koneksi, "INSERT INTO signup(firstname,lastname,username,institution,email,counttry) values ('$firstname','$lastname','$username','$institution','$email','$counttry')")
  or die (mysqli_error($koneksi));

  if($input){
    echo "
    <script>
      alert('Data Berhasil Ditambah.');
      window.location = 'signup.php';
      </script>";
  }else{
    echo "
    <script>
      alert('Data Gagal Ditambah.');
      window.location = 'signup.php';
      </script>";
  }

 ?>
