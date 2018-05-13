<?php
include "koneksi.php";
$username = $_GET['username'];
$query = mysqli_query($koneksi, "SELECT * FROM signup WHERE username='$username'") or die(mysqli_error($koneksi));
$data = mysqli_fetch_assoc($query);
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <title>Edit Data Member</title>
     <!-- FONT -->
     <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

     <!-- CSS -->
     <link rel="stylesheet" href="..\CSS FOLDER\css\bootstrap.min.css">
     <link rel="stylesheet" href="..\CSS FOLDER\css\style.css">
     <link rel="stylesheet" href="..\CSS FOLDER\css\linearis.css">
   </head>
   <body>
     <div class="wrapper">
       <div class="wrapper2">
       <div class="signup">
     <h2>Form Edit Member</h2>
     <form action="proses_edit.php" method="POST">
       <input type="text" name="firstname" placeholder="firstname" value="<?php echo $data['firstname']; ?>"><br>
       <input type="text" name="lastname" placeholder="lastname" value="<?php echo $data['lastname']; ?>"><br>
       <input type="text" name="username" placeholder="username" value="<?php echo $data['username']; ?>"><br>
       <input type="text" name="institution" placeholder="institution" value="<?php echo $data['institution']; ?>"><br>
       <input type="text" name="email" placeholder="email" value="<?php echo $data['email']; ?>"><br>
       <input type="text" name="counttry" placeholder="country" value="<?php echo $data['counttry']; ?>"><br>

       <!-- <center><input type="submit" value="Edit"></center> -->
       <button>Edit</button>

           </form>
           </div>
         </div>
         </div>
   </body>
 </html>
