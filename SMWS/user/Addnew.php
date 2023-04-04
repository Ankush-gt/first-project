<?php
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/html/navbar.html');
$auth->isLogedin(); 

if (isset($_POST['firstName']) && isset($_POST['lastname']) && isset($_POST['submit'])) {
  $user = $_POST['firstName'];
  $lastName = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['uPassword'];
  $r_Id = $_POST['r_Id'];
  $file = $_POST['file'];

  $filename = $file['name'];
  // print_r($_filename);
  //  exit;
  // $fileerror = $file['error'];
  // $filetmp =  $file['tmp_name'];
  // $fileext = explode('.',$filename);
  // $filecheck = strtolower(end($fileext));
  
  // $fileextstored = array('png', 'jpg' , 'jpeg');
  // $destinationfile = 'uplaod'.$filename;
  // move_uploaded_file($filetmp,$destinationfile);

  $result = $userInfo->add($user, $lastName, $email, $password, $r_Id, $file);



}
?>
<style>


</style>

<!-- partial:index.partial.html -->
<div class="login-form">
  <form method="POST">
    <h1>Add new user</h1>
    <div class="content">
      <!-- <div class="input-field">
          <input type="uId" placeholder="uId" name="uId">
        </div> -->
      <div class="input-field">
        <input type="firstname" placeholder="firstname" name="firstName">
      </div>
      <div class="input-field">
        <input type="lastname" placeholder="lastname" name="lastname">
      </div>
      <div class="input-field">
        <input type="email " placeholder="email" name="email">
      </div>
      <div class="input-field">
        <input type="uPassword" placeholder="uPassword" name="uPassword">

      </div>
      <div class="input-field">
        <input type="r_Id " placeholder="r_Id" name="r_Id">
      </div>
    </div>
    <!-- *****new******* -->
    <div class="input-field">
      <label for="file",></label>
        <input type="file" placeholder="file" name="file" > 
      </div>
      <div class="action">
      <button type="submit" name="submit">Add</button>
    </div>
  </form>
</div>
<!-- partial -->
<script src="./script.js"></script>

<!-- <script>
    let form = document.querySelecter('form');

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      return false;
    });
  </script> -->
</body>

</html>