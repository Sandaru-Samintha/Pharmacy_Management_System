<?php

    session_start();
    include_once "dbconnection.php";

    if(isset($_POST['submit']))
    {
        $name=$_POST["name"];
        $dob=$_POST["dob"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $location=$_POST["location"];
        $allergic=$_POST["allergic"];
        $conditions=$_POST["conditions"];
        $Oconditions=$_POST["Oconditions"];

        $sql= "INSERT INTO patients(name,dob,phone,location,email,allergic,conditions,Oconditions) VALUES ('$name','$dob','$phone','$location','$email','$allergic','$conditions','$Oconditions')";


        $result=mysqli_query($connect,$sql);

        if($result==true)
        {
            $_SESSION["success"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-400 to-lime-400 text-white'>Successfully added the patient</div>";
            header("Location:../patients.php");
        }
        else
        {
            $_SESSION["fail"]="<div class='bg-gradient-to-tl from-red-600 to-orange-400 text-white'>Failed to add, try again..!</div>";
            header("Location:../addpatients.php");
        }
    }
?>