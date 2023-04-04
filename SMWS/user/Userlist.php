<?php
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/html/navbar.html');
// include($_SERVER['DOCUMENT_ROOT'] . '/smws/liabrary/auth.php');

$user = new user();
$user_list_arr = $user->list();

?>
<div class="login-form">
    <form action="" method="POST">
        <select class="form-select" aria-label="Default select example">
            <option selected>select user</option>
            <option value="1">member</option>
            <option value="2"></a>chairman</option>
            <option value="3">admin</option>
            <select class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
                <!-- <button type="submit" name="submit">Add</button> -->  
</div>
<?php
// if (isset($_POST['submit'])) {
//     if ($row['role'] == 'member') {
//         header("Location: memberlist.php");
//     } elseif ($row['role'] == 'chairman') {
//         header("Location: charmanlist.php");
//     } else {
//          header("Location: adminlist.php");
//     }

// } 
?> 
</select>
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
            <th>file</th>
            <th>search</th>


        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT user.uId, user.firstName, user.lastName, user.email, user.aId,
          role.r_Label,user.file FROM user JOIN role ON user.r_Id = role.r_Id";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc())
            echo
                "<tr>
                                        <td>" . $row['uId'] . "</td>
                                        <td>" . $row['firstName'] . " " . $row['lastName'] . "</td>
                                        <td>" . $row['email'] . "</td>
                                        <td>" . $row['r_Label'] . "</td>
                                        <td>" . $row['aId'] . "</td>
                                        <td>" . $row['file'] . "</td>

                                       <td><a href = 'updateuser.php?rn=$row[uId] &rn=$row[firstName] 
                                       &rn=$row[email]&rn=$row[r_Label]'
                                       onclick ='return checkadd()'>Edit/update</td>
                                       <td><a href = 'userdelete.php?rn=$row[uId]                    
                                       onclick ='return checkadd()'>Delete</td>
                                       <td><a href = 'Searchuser.php?rn=$row[uId]                    
                                       onclick ='return checkadd()'>search</td>
                                    </tr>"
                ?>
        </tbody>
    </table>