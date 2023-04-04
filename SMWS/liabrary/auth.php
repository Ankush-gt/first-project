<?php
class Auth
{
    public $isloggedIn = false;
    function login($userName, $userPassword)
    {


        global $conn;

        $sql = "select * from user where email = '$userName' and  uPassword = '$userPassword' ";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $_SESSION['email'] = $userName;
            $_SESSION['uPassword'] = $userPassword;
            if ($row['r_Id'] == '101') {
                setcookie('userName', $row['firstName'],time()+60*60*24);
                header("Location: ./member/userdashboard.php");
            } elseif ($row['r_Id'] == '102') {
                setcookie('userName', $row['firstName'],time()+60*60*24);

                header("Location: ./Dash/chairmandash.php");
            } elseif ($row['r_Id'] == '103') {
                setcookie('userName', $row['firstName'],time()+60*60*24);
                header("Location: Dashboard.php");
            } else {
                echo "Incorrect Input";
            }

        }
    }
    function isLogedin()
    {
        if (!$_SESSION['email']) {
            ob_clean();

            session_destroy();

            header("Location: http://localhost/smws/");

        }


    }

}
?>