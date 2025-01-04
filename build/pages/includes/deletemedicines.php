<?php

    session_start();
    include_once "dbconnection.php";

    
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $sql="DELETE FROM medicines WHERE id='$id'";
        $sql2="DELETE FROM purchase WHERE id='$id'";
        //echo $id;

        $result=mysqli_query($connect,$sql);
        $result2=mysqli_query($connect,$sql2);

        if($result==true)
        {
            $_SESSION["deleted"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-400 to-lime-400 text-white'>That was deleted</div>";
            header("Location:../medicines.php");
        }
        if($result2==true)
        {
            $_SESSION["deleted"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-400 to-lime-400 text-white'>That was deleted</div>";
            header("Location:../managepurches.php");
        }
        else
        {
            $_SESSION["deletefailed"]="<div class='bg-gradient-to-tl from-red-600 to-orange-400 text-white'>Failed to delete,Try again..! </div>";
            header("Location:../medicines.php");
        }
    }
?>