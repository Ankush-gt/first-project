<?php
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');

if (isset($_POST['submit'])) {
    $n_Id = $_POST['n_Id'];
    $chair->deletenote($n_Id);

}
?>
<div class="login-form">
    <form action="" method="POST">
        <h1>Delete user</h1>
        <div class="content">
            <div class="input-field">
                <input type="n_Id" placeholder="n_Id" name="n_Id">
            </div>

        </div>

        <div class="action">
            <button type="submit" name="submit">Save changes</button>

        </div>
    </form>
</div>