<?php

    session_start();
    include_once "dbconnection.php";

    if(isset($_POST['submit']))
    {
        $id=$_POST["id"];
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $location=$_POST["location"];
        $age=$_POST["age"];
        $gender=$_POST["gender"];
        $allergic=$_POST["allergic"];
        $doctorname=$_POST["doctorname"];
        $doctorphone=$_POST["doctorphone"];




        
        //check for invalied field

        // if(!preg_match("/^[\w.%+-]+@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/",$email))
        // {
        //     $_SESSION["updateemailinvalid"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalide email address</div>";
        //     header("Location:../updatecustomers.php?error=invalidfield");
        //     exit();
        // }

        // elseif(!preg_match('/^\+?[0-9]{10,15}$/',$phone))
        // {
        //     $_SESSION["updatephoneinvalid"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalide Customer contact number</div>";
        //     header("Location:../updatecustomers.php?error=invalidfield");
        //     exit();
        // }
        // elseif(!preg_match('/^\+?[0-9]{10,15}$/',$doctorphone))
        // {
        //     $_SESSION["updatedoctorphoneinvalid"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalide Doctor's contact number</div>";
        //     header("Location:../updatecustomers.php?error=invalidfield");
        //     exit();
        // }

        $sql= "UPDATE customers SET

            firstname='$firstname',
            lastname='$lastname',
            email='$email',
            phone='$phone',
            location='$location',
            age='$age',
            gender='$gender',
            allergic='$allergic',
            doctorname='$doctorname',
            doctorphone='$doctorphone'WHERE id=$id ";


        $result=mysqli_query($connect,$sql);

        if($result==true)
        {
            $_SESSION["successupdating"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-400 to-lime-400 text-white'>Successfully updated the customer</div>";
            header("Location:../customers.php");
        }
        else
        {
            $_SESSION["failupdating"]="<div class='bg-gradient-to-tl from-red-600 to-orange-400 text-white'>Failed to update, try again..!</div>";
            header("Location:../updatecustomers.php");
        }
    }
?>