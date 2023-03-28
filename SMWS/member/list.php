<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/public/meta.php') ;
$info = $userInfo->getinfo();
$idOfChairPerson = $info['aId'];
?>
<style>
    table,
    th,
    td {
        border: 1px solid;
            text-align:center;
            padding: 10px 10px;
            margin-left: 10px;
        }
    
</style>
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>
                User list
            </h1>
        </div>
    </div>

    <ul class="box-info">
        <li>
            <!-- <i class='bx bxs-smile'></i> -->
            <span class="text">
                <h3>
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>uId</th>
                                <th>firstName</th>
                                <th>email</th>
                                <th>Role</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sqljoin = "SELECT user.uId, user.firstName, user.lastName, user.email, role.r_Label FROM user JOIN role ON user.r_Id = role.r_Id WHERE aId = '$idOfChairPerson'";
                            $result3 = $conn->query($sqljoin);

                            if (!$result3) { ?>
                                <tr>
                                    <td colspan="4">No Results found</td>
                                </tr>
                            <?php } else { ?>
                                <?php
                                while ($row3 = $result3->fetch_assoc()) {
                                    echo
                                        "<tr>
                                        <td>" . $row3['uId'] . "</td>
                                        <td>" . $row3['firstName'] . " " . $row3['lastName'] . "</td>
                                        <td>" . $row3['email'] . "</td>
                                        <td>" . $row3['r_Label'] . "</td>" ?>
                                    </tr>
                                    <?php ?>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
