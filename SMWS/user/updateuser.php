<?php
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/html/navbar.html');

// include($_SERVER['DOCUMENT_ROOT'].'/projects/srs-b4-Intern-5/SMWS/'.'protected/header.php');
// include($_SERVER['DOCUMENT_ROOT'].'/projects/srs-b4-Intern-5/SMWS/'.'public/meta.php');
if (isset($_POST['submit'])) {
    $uId = $_POST['uId'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $uPassword = $_POST['uPassword'];
    $userInfo->update($uId,$firstName, $lastName, $email, $uPassword);

}
?>
<div class="login-form">
    <form action="" method="POST">
        <h1>Update user</h1>
        <div class="content">
            <div class="input-field">
                <input type="uId" placeholder="uId" name="uId">
            </div>
            <div class="input-field">
                <input type="firstName" placeholder="firstName" name="firstName" required>
            </div>
            <div class="input-field">
                <input type="lastname" placeholder="lastname" name="lastname" required >
            </div>
            <div class="input-field">
                <input type="email" placeholder="email" name="email" required >
            </div>
            <div class="input-field">
                <input type="uPassword " placeholder="uPassword" name="uPassword" required>
            </div>

        </div>

        <div class="action">
            <button type="submit" name="submit">Save changes</button>

        </div>
    </form>
</div>