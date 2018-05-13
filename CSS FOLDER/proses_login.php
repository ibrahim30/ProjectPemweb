<?php
  session_start();
  include "koneksi.php";
  $user =$_POST['user'];
  $pwd  =$_POST['pwd'];


  $user =stripslashes($user);
  $password =stripslashes($password);
  $user =mysqli_real_escape_string($koneksi,$user);
  $pwd =mysqli_real_escape_string($koneksi,$pwd);

  $query  =mysqli_query($koneksi,"SELECT * FROM admin where pwd='$pwd' AND user='$user'");
  $rows   =mysqli_num_rows($query);
  if ($rows == 1){
      $_SESSION['login_user'] = $user;
      echo "<script>alert('Welcome Administrator of Freshcare!');
      window.location = 'view.php';   </script>";
    }
  else{
    echo "<script>alert('Wrong Username or Password!! ');
    window.location = 'admin.php';   </script>";
  }
  ?>
