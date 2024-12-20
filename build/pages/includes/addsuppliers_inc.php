<?php

session_start();
include_once "dbconnection.php";

    if(isset($_POST['submit']))
    {
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $location=$_POST["location"];
        

        if(empty($firstname)||empty($email)||empty($phone)||empty($location)||empty($lastname))
        {
            $_SESSION["addempty"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Empty Field, try again..!</div>";
            header("Location:../addsuppliers.php");
            exit();
        }
        elseif(!preg_match("/^[\w.%+-]+@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/",$email))
        {
            $_SESSION["emailinvalid"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalide email address</div>";
            header("Location:../addsuppliers.php?error=invalidfield");
            exit();
        }

        elseif(!preg_match('/^\+?[0-9]{10,15}$/',$phone))
        {
            $_SESSION["phoneinvalid"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalide Customer contact number</div>";
            header("Location:../addsuppliers.php?error=invalidfield");
            exit();
        }

        $sql= "INSERT INTO suppliers(firstname,lastname,location,email,phone) VALUES ('$firstname','$lastname','$location','$email','$phone')";


        $result=mysqli_query($connect,$sql);

        if($result==true)
        {
            $_SESSION["addsuccess"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-400 to-lime-400 text-white'>Successfully added the supplier</div>";
            header("Location:../suppliers.php");
        }
        else
        {
            $_SESSION["addfail"]="<div class='bg-gradient-to-tl from-red-600 to-orange-400 text-white'>Failed to add, try again..!</div>";
            header("Location:../addsuppliers.php");
        }
    }
?>