<?php
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/html/navbar.html');


$user = new user();
$user_list_arr = $user->list();

// echo "<pre>";
// print_r($user_list_arr);

// foreach ($user_list_arr as $key => $value) {
//     echo $value['uId'] . ". Welcome " . $value['firstName'] . " " . $value['lastName'];
//     echo "<br>";



// }
?>
  <style>
        table,
        th,
        td {
            border: 1px solid;
        }
    </style>
<table class='table'>
    <thead>
        <tr>
            <th>User Id</th>
            <th>User Name</th>
            <th>User Mail</th>
            <th>User role</th>
            <th>Aptid</th>
            <th>opration</th>
            <th>Delete</th>



            
        </tr>
    </thead>
    <tbody>
        <?php
         $sql= "SELECT user.uId, user.firstName, user.lastName, user.email, user.aId,
          role.r_Label FROM user JOIN role ON user.r_Id = role.r_Id";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc())
            echo
                "<tr>
                                        <td>" . $row['uId'] . "</td>
                                        <td>" . $row['firstName'] . " " . $row['lastName'] . "</td>
                                        <td>" . $row['email'] . "</td>
                                        <td>" . $row['r_Label'] . "</td>
                                        <td>" . $row['aId'] . "</td>

                                       <td><a href = 'updateuser.php?rn=$row[uId] &rn=$row[firstName] 
                                       &rn=$row[email]&rn=$row[r_Label]'
                                       onclick ='return checkadd()'>Edit/update</td>
                                       <td><a href = 'userdelete.php?rn=$row[uId]                    
                                       onclick ='return checkadd()'>Delete</td>
                                    </tr>"
                ?>
        </tbody>
    </table>