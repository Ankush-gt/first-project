<?php
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/html/navbar.html');
// include($_SERVER['DOCUMENT_ROOT'].'/projects/srs-b4-Intern-5/SMWS/'.'protected/header.php');
// include($_SERVER['DOCUMENT_ROOT'].'/projects/srs-b4-Intern-5/SMWS/'.'public/meta.php');
// include($_SERVER['DOCUMENT_ROOT'].'/projects/srs-b4-Intern-5/SMWS/'.'navbar.html');
// include('./user.php');
$auth->isLogedin(); 

?>
<html>

<head>
    <title>Search</title>
</head>


<body>
    <div class="container">
        <form action="" method="POST">
            <input type="text" name="uId" class="btn" placeholder="uId" />
            <input type="submit" name="submit" class="btn" placeholder="search bu uId" />
        </form>
        <?php

        if (isset($_POST['submit'])) {
            $uId = $_POST['uId'];
            $result = $userInfo->get($uId);
            // print_r($result);
        }
        ?>
   
        <table>
            <tr>
                <th>uId</th>
                <th>firstName</th>
                <th>lastName</th>
            </tr> <br>
        </table>
        <style>
        table,
        th,
        td {
            border: 1px solid;
        }
</style>
        <?php
        if (!empty($result)) {
            ?>
            <tr>
                <td>
                    <?php echo $result['uId']; ?>
                </td>
                <td>
                    <?php echo $result['firstName']; ?>
                </td>
                <td>
                    <?php echo $result['lastName']; ?>
                </td>
            </tr>
        <?php } ?>
    </div>
</body>

</html>