<!DOCTYPE html>

<!-- FONT -->
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="..\CSS FOLDER\css\bootstrap.min.css">
<link rel="stylesheet" href="..\CSS FOLDER\css\style.css">
<link rel="stylesheet" href="..\CSS FOLDER\css\linearis.css">

<div class="navigasi">
<ul>
  <li><a href="aaaa.html">Home</a></li>
  <li><a href="intro.html">Issues</a></li>
  <li><a href="cat.html">Category</a></li>
  <li><a class="active" href="signup.php">Become our partner</a></li>
  <li style="float:right"><a  href="admin.php">Admin</a></li>
</ul>
</div>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="wrapper2">
      <div class="signup">
      <h2>Welcome!</h2><br>
        <form action="insert.php" method="POST">
          <input type="text" name="firstname" placeholder="First Name" /><br>
          <input type="text" name="lastname" placeholder="Last Name" /><br>
          <input type="text" name="username" placeholder="Username" /><br>
          <input type="text" name="institution" placeholder="Institution Name" /><br>
          <input type="text" name="email" placeholder="Email" /><br>
          <input type="text" name="counttry" placeholder="Country" /><br><br>
          <button> Submit </button>
        </form>
        </div>
      </div>
      </div>
  </body>

</html>
