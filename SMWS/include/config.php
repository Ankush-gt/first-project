<?php
 session_start();
include($_SERVER['DOCUMENT_ROOT'].'/smws/liabrary/helper.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/liabrary/auth.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/liabrary/user.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/liabrary/apart.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/liabrary/notes.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/liabrary/chairperson.php');
// include(PROJECT_ROOT.'library/helper.php') ;
// include(PROJECT_ROOT.'library/auth.php') ;
// include(PROJECT_ROOT.'library/user.php') ;
// include(PROJECT_ROOT.'library/apart.php') ;
// include(PROJECT_ROOT.'library/notes.php') ;
// include(PROJECT_ROOT.'library/chairperson.php') ;



$userInfo = new user();

$auth= new Auth();

$apt1 = new apartment();

$note1= new note();

$chair= new Chairperson();



?>