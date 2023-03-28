<?php
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');

if (isset($_POST['submit'])) {
    $uId = $_POST['uId'];
    $userInfo->deleteUser($uId);

}
?>
<div class="login-form">
    <form action="" method="POST">
        <h1>Update user</h1>
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