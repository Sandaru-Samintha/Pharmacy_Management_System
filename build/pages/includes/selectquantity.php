<?php

    include_once "dbconnection.php";
    session_start();

    if(isset($_POST['id']))
    {
        $id=$_POST['id'];
        $requantity = $_POST['requantity'];

        $sql6="SELECT * FROM medicines WHERE id = $id";

        $result6=mysqli_query($connect,$sql6);
        $checkresult6=mysqli_num_rows($result6);
        if($checkresult6>0)
        {
            while($row6=mysqli_fetch_assoc($result6))
            {
                $quantity=$row6['quantity'];
                $sellingprice=$row6['sellingprice'];
            }
        }


        if($quantity < $requantity)
        {
            $_SESSION['greterthanquantity']="<div class='bg-gradient-to-tl text-center from-red-600 to-orange-400 text-white'>Failed to delete,Try again..! </div>";
            header("Location:../newinvoice.php");
        }
        else if($quantity >= $_POST['requantity'])
        {
            $total=(($sellingprice*$requantity )+ 0.00); //these all session valuse pass from selectmedicinename.php
            $newquantity=$quantity-$requantity;//these all session valuse pass from selectmedicinename.php

            $_SESSION['total']= $total ;
            $_SESSION['requantity']=$requantity;
            header("Location:../newinvoice.php");

        // $sql= "UPDATE medicines SET quantity='$newquantity' WHERE id=$id";//update the new quantity
        }

        
                
    }
?>