<?php

    session_start();
    include_once "dbconnection.php";

    if(isset($_POST['submit']))
    {
        $id=$_POST["id"];
        $medicinename=$_POST["medicinename"];
        $brandname=$_POST["brandname"];
        $batchnumber=$_POST["batchnumber"];
        $medicinetype=$_POST["medicinetype"];
        $category=$_POST["category"];
        $manufacturedate=$_POST["manufacturedate"];
        $expirydate=$_POST["expirydate"];
        $suppliername=$_POST["suppliername"];
        $quantity=$_POST["quantity"];
        $purchaseprice=$_POST["purchaseprice"];
        $sellingprice=$_POST["sellingprice"];

        



        // if(empty($medicinename)||empty($brandname)||empty($batchnumber)||empty($medicinetype)||empty($category)||empty($manufacturedate)||empty($expirydate)||empty($suppliername)||empty($quantity)||empty($purchaseprice)||empty($sellingprice))
        // {
        //     $_SESSION["emptyset"]="<div class='bg-gradient-to-tl from-red-600 to-yellow-400 text-center text-white'>Empty field, try again..!</div>";
        //     header("Location:../updatemedicines.php?erro=emptyfield");
        //     exit();
        // }

        $sql= "UPDATE medicines SET

            medicinename='$medicinename',
            brandname='$brandname',
            batchnumber='$batchnumber',
            medicinetype='$medicinetype',
            category='$category',
            manufacturedate='$manufacturedate',
            expirydate='$expirydate',
            suppliername='$suppliername',
            quantity='$quantity',
            purchaseprice='$purchaseprice',
            sellingprice='$sellingprice' WHERE id=$id ";


        $result=mysqli_query($connect,$sql);

        if($result==true)
        {
            $_SESSION["success"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-400 to-lime-400 text-white'>Successfully updated the medicine</div>";
            header("Location:../medicines.php");
        }
        else
        {
            $_SESSION["fail"]="<div class='bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Failed to update, try again..!</div>";
            header("Location:../updatemedicines.php");
        }
    }
?>