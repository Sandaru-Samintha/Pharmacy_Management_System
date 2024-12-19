<?php

    session_start();
    include_once "dbconnection.php";

    if(isset($_POST['submit']))
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $location=$_POST["location"];

        $sql= "INSERT INTO suppliers(name,location,email,phone) VALUES ('$name','$location','$email','$phone')";


        $result=mysqli_query($connect,$sql);

        if($result==true)
        {
            $_SESSION["success"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-400 to-lime-400 text-white'>Successfully added the supplier</div>";
            header("Location:../suppliers.php");
        }
        else
        {
            $_SESSION["fail"]="<div class='bg-gradient-to-tl from-red-600 to-orange-400 text-white'>Failed to add, try again..!</div>";
            header("Location:../suppliers.php");
        }
    }
?>