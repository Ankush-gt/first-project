<?php
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');

if (isset($_POST['submit'])) {
    $aId = $_POST['aId'];
    $apt1->deletapt($aId);

}
?>
<div class="login-form">
    <form action="" method="POST">
        <h1>DeleteApt</h1>
        <div class="content">
            <div class="input-field">
                <input type="aId" placeholder="aId" name="aId">
            </div>

        </div>

        <div class="action">
            <button type="submit" name="submit">Save changes</button>

        </div>
    </form>
</div>