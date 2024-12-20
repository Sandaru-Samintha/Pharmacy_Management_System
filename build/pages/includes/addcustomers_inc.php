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
        $age=$_POST["age"];
        $gender=$_POST["gender"];
        $allergic=$_POST["allergic"];
        $doctorname=$_POST["doctorname"];
        $doctorphone=$_POST["doctorphone"];




        if(empty($firstname)||empty($lastname)|| empty($phone)|| empty($email)||empty($location)||empty($age)|| empty($gender)|| empty($doctorname)||empty($doctorphone))
        {

            $_SESSION["emptyfieldcustomeradd"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Empty Field, try again..!</div>";
            header("Location:../addcustomers.php?error=emptyfield");
            exit();
        }
        //check for invalied field

        elseif(!preg_match("/^[\w.%+-]+@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/",$email))
        {
            $_SESSION["emailinvalid"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalide email address</div>";
            header("Location:../addcustomers.php?error=invalidfield");
            exit();
        }

        elseif(!preg_match('/^\+?[0-9]{10,15}$/',$phone))
        {
            $_SESSION["phoneinvalid"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalide Customer contact number</div>";
            header("Location:../addcustomers.php?error=invalidfield");
            exit();
        }
        elseif(!preg_match('/^\+?[0-9]{10,15}$/',$doctorphone))
        {
            $_SESSION["doctorphoneinvalid"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalide Doctor's contact number</div>";
            header("Location:../addcustomers.php?error=invalidfield");
            exit();
        }

        $sql= "INSERT INTO customers(firstname,lastname,phone,location,email,allergic,age,gender,doctorname,doctorphone) VALUES ('$firstname','$lastname','$phone','$location','$email','$allergic','$age','$gender','$doctorname','$doctorphone')";


        $result=mysqli_query($connect,$sql);

        if($result==true)
        {
            $_SESSION["successadding"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-400 to-lime-400 text-white'>Successfully added the patient</div>";
            header("Location:../customers.php");
        }
        else
        {
            $_SESSION["failadding"]="<div class='bg-gradient-to-tl from-red-600 to-orange-400 text-white'>Failed to add, try again..!</div>";
            header("Location:../addcustomers.php");
        }
    }
?>