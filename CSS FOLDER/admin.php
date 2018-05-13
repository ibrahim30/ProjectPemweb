<!DOCTYPE html>

<!-- FONT -->
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="..\CSS FOLDER\css\bootstrap.min.css">
<link rel="stylesheet" href="..\CSS FOLDER\css\style.css">
<link rel="stylesheet" href="..\CSS FOLDER\css\linearis.css">

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    <div class="navigasi">
    <ul>
      <li><a href="aaaa.html">Home</a></li>
      <li><a href="intro.html">Issues</a></li>
      <li><a href="cat.html">Category</a></li>
      <li><a href="signup.php">Become our partner</a></li>
      <li style="float:right"><a class="active" href="admin.php">Admin</a></li>
    </ul>
    </div>
    <div class="wrapper">
      <div class="wrapper2">
      <div class="signup">
      <h2>Welcome!</h2><br>
        <form action="proses_login.php" method="POST">
          <input type="text" name="user" placeholder="Username" /><br>
          <input type="password" name="pwd" placeholder="password" /><br><br>
          <button type="submit" name="button">Submit</button>
        </form>
        </div>
      </div>
      </div>
  </body>

</html>
