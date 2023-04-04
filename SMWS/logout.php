<?php
include("./include/config.php");
// session_unset();
setcookie('userName', $row['firstName'],time()-100);
session_destroy();
header("Location: ./index.php");

?>