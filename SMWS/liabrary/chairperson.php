<?php
class Chairperson
{

    function list($aId)
    {
        global $conn;
        $sql = "SELECT * FROM user WHERE aId=$aId ";
        $result = $conn->query($sql);
        //$row3= mysqli_fetch_assoc($result3);
        return $result;
    }
    function delete($uId)
    {
        global $conn;
        $sql = "DELETE FROM user WHERE uId='$uId'";
        $result = $conn->query($sql);

        return $result;
    }
    function Update($uId, $firstName, $lastName, $userName, $uPassword)
    {
        global $conn;

        $sql = "UPDATE user SET firstName='" . $firstName . "',lastName='" . $lastName . "',email='" . $userName . "',uPassword='" . $uPassword . "' where uId=$uId";
        $result = $conn->query($sql);
        echo "Updated successfully";
        return $result;
    }
    function add($firstName, $lastName, $userName, $uPassword, $aId)
    {
        global $conn;

        $sql4 = "INSERT INTO user(firstName,lastName,email,uPassword,aId) VALUES 
        ('$firstName','$lastName','$userName','$uPassword',$aId)";
        $result4 = $conn->query($sql4);
        echo "Add successfully";

        return $result4;
    }
    function list_note($n_Aid)
    {
        global $conn;
        $sql = "SELECT * FROM notes WHERE n_Aid= $n_Aid ";
        $result = $conn->query($sql);
        return $result;
    }
    function addnote($n_Aid, $n_Title, $n_Details, )
    {
        global $conn;
        $sql = "INSERT INTO notes (n_Aid, n_Title,n_Details) VALUES ('$n_Aid','$n_Title','$n_Details')";
        $result = $conn->query($sql);
        echo "Add successfully";
        return $result;
    }
    function deletenote($n_Id)
    {
        global $conn;
        $sql = "DELETE  FROM notes WHERE n_Id='" . $n_Id . "'";
        $result = $conn->query($sql);

        return $result;
    }
    function updatenote($n_Id, $n_Title, $n_Details, )
    {
        global $conn;

        $sql = "UPDATE notes SET n_Title='$n_Title',n_Details='$n_Details' WHERE n_Id =$n_Id";
        $result = $conn->query($sql);

        return $result;
    }





}
?>