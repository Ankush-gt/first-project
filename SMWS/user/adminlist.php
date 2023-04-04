<?php

include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/html/navbar.html');
 $user = new user();
 $user_list_arr = $user->list();
?>
  <style>
        table,
        th,
        td {
            padding-left: 2vh;
            margin-right: 15%;
            border: 1px solid;
        }
    </style>
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h3>
                List of All Chairpersons
            </h3>
        </div>
    </div>

    <ul class="box-info">
        <li>
            <!-- <i class='bx bxs-smile'></i> -->
            <span class="text">
                <h3>
                    <table class='table' width="1200px">
                        <thead>
                            <tr>
                                <th width="100px">User Id</th>
                                <th width="200px">User Name</th>
                                <th width="200px">User Mail</th>
                                <th width="100px">User AId</th>
                                <th width="200px">User Role</th>
                                <!-- <th width="200px">Edit</th>
                                <th width="200px">Delete</th> -->
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sqljoin = "SELECT user.uId, user.firstName, user.lastName, user.email, user.aId, role.r_Label FROM user JOIN role ON user.r_Id = role.r_Id WHERE role.r_Id = 103";
                            $result = $conn->query($sqljoin);

                            if (!$result) { ?>
                                <tr>
                                    <td colspan="6">No Results found</td>
                                </tr>
                            <?php } else { ?>
                                <?php
                                while ($row = $result->fetch_assoc()){
                                    echo
                                        "<tr>
                                        <td>" . $row['uId'] . "</td>
                                        <td>" . $row['firstName'] . " " . $row['lastName'] . "</td>
                                        <td>" . $row['email'] . "</td>
                                        <td>" . $row['aId'] . "</td>
                                        <td>" . $row['r_Label'] . "</td>" ?>



                                    </tr>
                                    <?php ?>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>

                     <!-- <?php
                    // $result = $userInfo->list();
                    // foreach ($result as $key => $value) {
                    
                    //     echo $value['uId'] . "  " . $value['firstName'] . " " . $value['lastName'];
                    //     echo '<br>';
                    // }
                    ?>  -->
                </h3>
            </span>
        </li>
    </ul>
</main>
<!-- MAIN -->

<?php
// include("../protected/footer.php");
?>