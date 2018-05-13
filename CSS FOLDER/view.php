<?php
  include "koneksi.php";
  $query = mysqli_query($koneksi, "SELECT * FROM signup ORDER BY firstname ASC") or die (mysqli_error($koneksi));
 ?>

 <!DOCTYPE html>
 <html
   <head>
     <title>Daftar Member Freshcare</title>

     <!-- FONT -->
     <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

     <!-- CSS -->
     <link rel="stylesheet" href="..\CSS FOLDER\css\bootstrap.min.css">
     <link rel="stylesheet" href="..\CSS FOLDER\css\style.css">
     <link rel="stylesheet" href="..\CSS FOLDER\css\linearis.css">

   </head>
   <body>
    <div class="tabel-wrapper">
    <div class="tabel">
    <div class="container">
     <table>
       <thead>
         <th>nomor</th>
         <th>firstname</th>
         <th>lastname</th>
         <th>username</th>
         <th>institution</th>
         <th>email</th>
         <th>country</th>
         <th>ACTION</th>
       </thead>
       <tbody>
         <?php $i=1; ?>
         <?php while ($data = mysqli_fetch_assoc($query)) {?>
           <tr>
             <td><?php echo $i++; ?></td>
             <td><?php echo $data['firstname']; ?></td>
             <td><?php echo $data['lastname']; ?></td>
             <td><?php echo $data['username']; ?></td>
             <td><?php echo $data['institution']; ?></td>
             <td><?php echo $data['email']; ?></td>
             <td><?php echo $data['counttry']; ?></td>
             <td><a href="hapus.php?username=<?php echo $data['username'] ?>">Hapus</a> || <a href="edit.php?username=<?php echo $data['username']; ?>">Edit</a> </td>
           </tr>
         <?php }?>
       </tbody>
     </table>
     <a href="logout.php" class="btn custom-btn-header">Logout</a>
     </div>
     </div>
     </div>
   </body>
 </html>
