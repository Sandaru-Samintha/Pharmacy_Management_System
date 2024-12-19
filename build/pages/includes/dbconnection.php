<?php

    $dbservername="localhost";
    $dbusername="root";
    $dbpasswor="";
    $dbname="pharmacy_system_db";

    $connect=mysqli_connect($dbservername,$dbusername,$dbpasswor,$dbname);
    if(!$connect)
    {
        die("Can not connect the database");
    }
?>