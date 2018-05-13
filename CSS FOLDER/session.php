<?php
  session_start();
  include "koneksi.php"


  if (!isset($_SESSION['login_user']))
  {
    echo "
    <script>
      alert('Silahkan Login Terlebih Dahulu...');
      window.location = 'login.php';
      </script>" ;
  }

 ?>
