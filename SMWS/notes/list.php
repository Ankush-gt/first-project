<?php
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/html/navbar.html');

// include($_SERVER['DOCUMENT_ROOT'].'/projects/srs-b4-Intern-5/include/'.'protected/header.php');
// include($_SERVER['DOCUMENT_ROOT'].'/projects/srs-b4-Intern-5/include/'.'public/meta.php');
$user = new note();
$user_list_arr = $note1->nlist();


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
<table class='table'>
    <thead>
        <tr>
            <th>note id</th>
            <th>note Aid</th>
            <th>note title</th>
            <th>opration</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM notes";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc())
            echo
                "<tr>
                                        <td>" . $row['n_Id'] . "</td>
                                        <td>" . $row['n_Aid'] .  "</td>
                                        <td>" . $row['n_Title'] . "</td>
                                        <td><a href = 'edit.php'?rn=$row[n_Id] &rn=$row[n_Aid] 
                                        &rn=$row[n_Title]'
                                        onclick ='return checkadd()'>Edit/update</td>
                                        <td><a href = 'delete.php?rn=$row[n_Id]                    
                                        onclick ='return checkadd()'>Delete</td>
                                    </tr>"
                ?>
        </tbody>
    </table>