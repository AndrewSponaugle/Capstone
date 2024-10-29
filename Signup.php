<?php

    $database= new mysqli("localhost","root","","clinicmanagement");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
