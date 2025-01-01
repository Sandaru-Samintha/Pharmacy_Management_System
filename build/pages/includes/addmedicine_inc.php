<?php

    session_start();
    include_once "dbconnection.php";

    if(isset($_POST['submit']))
    {
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

        



        if(empty($medicinename)||empty($brandname)||empty($batchnumber)||empty($medicinetype)||empty($category)||empty($manufacturedate)||empty($expirydate)||empty($suppliername)||empty($quantity)||empty($purchaseprice)||empty($sellingprice))
        {
            $_SESSION["emptyset"]="<div class='bg-gradient-to-tl from-red-600 to-yellow-400 text-center text-white'>Empty field, try again..!</div>";
            header("Location:../addmedicine.php?erro=emptyfield");
            exit();
        }


        

        $sql= "INSERT INTO medicines(medicinename,brandname,batchnumber,medicinetype,category,manufacturedate,expirydate,suppliername,quantity,purchaseprice,sellingprice) VALUES ('$medicinename','$brandname','$batchnumber','$medicinetype','$category','$manufacturedate','$expirydate','$suppliername','$quantity','$purchaseprice','$sellingprice')";

        $sql2= "INSERT INTO purchase(medicinename,batchnumber,suppliername,quantity,purchaseprice) VALUES ('$medicinename','$batchnumber','$suppliername','$quantity','$purchaseprice')";


        $result=mysqli_query($connect,$sql);

        if($result==true)
        {
            $_SESSION["success"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-400 to-lime-400 text-white'>Successfully added the medicine</div>";
            header("Location:../medicines.php");
        }
        else
        {
            $_SESSION["fail"]="<div class='bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Failed to add, try again..!</div>";
            header("Location:../addmedicine.php");
        }
    }
?>