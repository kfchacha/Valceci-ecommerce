<?php
    $con=mysqli_connect('localhost','root','','valceci_collections');
    if($con){
        echo"connection succesful";

    }else{
        die(mysqli_error($con));
    }



?>