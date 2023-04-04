<?php
     $val=true;
     if(filter_var($val, FILTER_VALIDATE_INT))
     {
     echo "$val is an integer";
     }else{
        echo " is not an integer";
     }
     

     

?>
