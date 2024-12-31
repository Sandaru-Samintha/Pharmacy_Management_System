<?php

    session_start();
    include_once "dbconnection.php";

    // if(isset($_POST['submit']))
    
    if(isset($_POST['delete']))
    {
        $custinvoicenumber=$_POST['custinvoicenumber'];
        $custcurrentdate=$_POST['custcurrentdate'];
        $paidamount=$_POST['paidamount'];
        $totalamount=$_POST['totalamount'];
        $sql="DELETE FROM invoices WHERE custinvoicenumber='$custinvoicenumber'and custcurrentdate='$custcurrentdate'and paidamount='$paidamount' and totalamount='$totalamount' ";
        //echo $id;

        $result=mysqli_query($connect,$sql);

        if($result==true)
        {
            $_SESSION["deletedinvoice"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-400 to-lime-400 text-white'>That was deleted</div>";
            header("Location:../manageinvoice.php");
        }
        else
        {
            $_SESSION["deletefailedinvoice"]="<div class='bg-gradient-to-tl from-red-600 to-orange-400 text-white'>Failed to delete,Try again..! </div>";
            header("Location:../manageinvoice.php");
        }
    }
?>