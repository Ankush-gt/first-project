<?php
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
$aId = $_GET['n_Id'];
// print_r($_SESSION);
$auth->isLogedin(); 



?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">List of Members</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <a class="nav-link" href="add.php">Add New Members</a>



            </div>
        </div>
    </div>
</nav>
<style>
    table,
    th,
    td {
        border: 1px solid;
        text-align: center;
        padding: 30px 30px;
        margin-left: 50px;
    }
</style>
<div class="container m-5">
    <table class="table table-striped table-bordered border-dark table-hover">
        <tr class=" table-danger">
             <td> n_Id</td>
            <td> n_Details</td>
            <td> n_Title</td>
            <td> opration</td>
            <td> delete</td>
            <td> Add</td>


           


        </tr>
        <?php
        $result = $chair->list_note($aId);
        if (!mysqli_num_rows($result)) {
            echo "No results found";
        } else {
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                <tr class=" table-success">
                <td>
                        <?php echo $row["n_Id"]; ?>
                    </td>
                    <td>
                        <?php echo $row["n_Details"]; ?>
                    </td>
                    <td>
                        <?php echo $row["n_Title"]; ?>
                    </td>
                   
                     <td><a href='updatenotes.php' ? onclick='return checkadd()'>Edit/update</td>
                    <td><a href='deletenotes.php'?onclick =' return checkadd()'>Delete</td>
                    <td><a href='addnotes.php'?onclick =' return checkadd()'>Add</td> 
                </tr>
               
            <?php }
        }
        ?>
    </table>
</div>