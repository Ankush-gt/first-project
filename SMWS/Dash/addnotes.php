<?php
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');

// include($_SERVER['DOCUMENT_ROOT'].'/projects/srs-b4-Intern-5/include/'.'protected/header.php');
// include($_SERVER['DOCUMENT_ROOT'].'/projects/srs-b4-Intern-5/include/'.'public/meta.php');
$auth->isLogedin(); 
if(isset($_POST['submit'])) {
    //$nid= $_POST['n_Id'];
    $nAid = $_POST['n_Aid'];
    $title = $_POST['n_Title'];
    $details = $_POST['n_Details'];
    $chair->addnote($nAid, $title, $details);

}
?>


<div class="login-form">
    <form method="POST">
        <h1>Add new notes</h1>
        <div class="content">

             <div class="input-field">
                <input type="n_Aid" placeholder="n_Aid" name="n_Aid">
            </div> 
             <!-- <div class="input-field">
                <input type="aid" placeholder="aid" name="aid">
            </div>  -->
            <div class="input-field">
                <input type="n_Title" placeholder="n_Title" name="n_Title">
            </div>
            <div class="input-field">
                <input type="n_Details" placeholder="n_Details" name="n_Details">
            </div>

        </div>
        <div class="action">
            <button type="submit" name="submit">Add Notes</button>
        </div>
    </form>
</div>

<script src="./script.js"></script>


</body>

</html>