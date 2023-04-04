<?php
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
// include($_SERVER['DOCUMENT_ROOT'].'/projects/srs-b4-Intern-5/include/'.'protected/header.php');
// include($_SERVER['DOCUMENT_ROOT'].'/projects/srs-b4-Intern-5/include/'.'public/meta.php');
$auth->isLogedin(); 
if (isset($_POST['submit'])) {
    $uId = $_POST['uId'];
    $chair->delete($uId);

}
?>
<div class="login-form">
    <form action="" method="POST">
        <h1>Delete user</h1>
        <div class="content">
            <div class="input-field">
                <input type="uId" placeholder="uId" name="uId">
            </div>

        </div>

        <div class="action">
            <button type="submit" name="submit">Save changes</button>

        </div>
    </form>
</div>