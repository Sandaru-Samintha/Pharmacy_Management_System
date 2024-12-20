<?php

    session_start();
    include_once "dbconnection.php";

    if(isset($_POST['submit']))
    {
        $id=$_POST['id'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $location=$_POST['location'];

        $sql= "UPDATE suppliers SET 
        
        firstname='$firstname',
        lastname='$lastname',
        email='$email',
        phone='$phone',
        location='$location' WHERE id=$id ";


        // if(!preg_match("/^[\w.%+-]+@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/",$email))
        // {
        //     $_SESSION["updatedemailinvalid"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalide email address</div>";
        //     header("Location:../updatesuppliers.php?error=invalidfield");
        //     exit();
        // }

        // elseif(!preg_match('/^\+?[0-9]{10,15}$/',$phone))
        // {
        //     $_SESSION["updatedphoneinvalid"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalide Customer contact number</div>";
        //     header("Location:../updatesuppliers.php?error=invalidfield");
        //     exit();
        // }    

        $result=mysqli_query($connect,$sql);

        if($result==true)
        {
            $_SESSION["updated"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-400 to-lime-400 text-white'>Successfully updated</div>";
            header("Location:../suppliers.php");
        }
        else
        {
            $_SESSION["updatefailed"]="<div class='bg-gradient-to-tl from-red-600 to-orange-400 text-white'>Failed to update,Try again..! </div>";
            header("Location:../suppliers.php");
        }
    }
?>