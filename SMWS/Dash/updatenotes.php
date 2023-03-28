<?php
include($_SERVER['DOCUMENT_ROOT'].'/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/protected/header.php');

if (isset($_POST['submit'])) {
    
    $Id = $_POST['n_Id'];
    $Title = $_POST['n_Title'];
    $Details = $_POST['n_Details'];
    // $userPassword = $_POST['password'];
    // $City = $_POST['aCity'];
    // $aState = $_POST['state'];
    // $aCountry = $_POST['country'];

    $chair->updatenote($Id, $Title, $Details);
    
}
?>

<div class="login-form" >
    <form action="" method="POST">
      <h1>Update Meet</h1>
      <div class="content">
        <div class="input-field">
          <input type="n_Id" placeholder="n_Id" name="n_Id">
        </div>
        <div class="input-field">
          <input type="n_Title" placeholder="n_Title" name="n_Title">
        </div>
        <div class="input-field">
          <input type="n_Details" placeholder="n_Details" name="n_Details">
        </div>
        

      </div>
      
      <div class="action">
      <button type="submit" name="submit">Update Notes</button>
        
      </div>
    </form>
  </div>