<?php

    session_start();
    include_once "dbconnection.php";

    if(isset($_POST['submit']))
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $location=$_POST['location'];

        $sql= "UPDATE suppliers SET 
        
            name='$name',
            email='$email',
            phone='$phone',
            location='$location' WHERE id=$id ";


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