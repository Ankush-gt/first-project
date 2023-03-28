<?php
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');

if (isset($_POST['submit'])) {
    $a_Id = $_POST['a_Id'];
    $note1->deletenote($a_Id);

}
?>
<div class="login-form">
    <form action="" method="POST">
        <h1>Update user</h1>
        <div class="content">
            <div class="input-field">
                <input type="a_Id" placeholder="a_Id" name="a_Id">
            </div>

        </div>

        <div class="action">
            <button type="submit" name="submit">Save changes</button>

        </div>
    </form>
</div>