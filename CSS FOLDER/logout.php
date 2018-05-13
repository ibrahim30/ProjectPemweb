<?php
  session_start();
  if(session_destroy())
  {
    echo "
    <script>
      alert('Anda Berhasil Logout...');
      window.location = 'admin.php';
      </script>" ;
  }
?>
