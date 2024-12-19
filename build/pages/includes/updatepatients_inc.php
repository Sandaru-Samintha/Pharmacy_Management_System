<?php

    session_start();
    include_once "dbconnection.php";

    if(isset($_POST['submit']))
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $location=$_POST['location'];
        $allergic=$_POST['allergic'];
        $conditions=$_POST['conditions'];
        $Oconditions=$_POST['Oconditions'];

        $sql= "UPDATE patients SET 
        
            name='$name',
            dob='$dob',
            email='$email',
            phone='$phone',
            location='$location',
            allergic='$allergic',
            conditions='$conditions',
            Oconditions='$Oconditions' WHERE id=$id  ";


        $result=mysqli_query($connect,$sql);

        if($result==true)
        {
            $_SESSION["updated"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-400 to-lime-400 text-white'>Updated success</div>";
            header("Location:../patients.php");
        }
        else
        {
            $_SESSION["updatefailed"]="<div class='bg-gradient-to-tl from-red-600 to-orange-400 text-white'>Failed to update,Try again..! </div>";
            header("Location:../patients.php");
        }
    }
?>