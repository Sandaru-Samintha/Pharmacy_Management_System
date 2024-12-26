<?php

    include_once "dbconnection.php";
    session_start();

    if(isset($_POST['add']))
    {
        $valueWithPrefix1=$_POST['invsellingprice'];
        $invsellingprice= str_replace("LKR . ", "", $valueWithPrefix1);

        $valueWithPrefix2=$_POST['invtotal'];
        $invtotal= str_replace("LKR . ", "", $valueWithPrefix2);

        $invmedicinename=$_POST['invmedicinename'];
        $invbatchnumber=$_POST['invbatchnumber'];
        $invquantity=$_POST['invquantity'];
        $invexpirydate=$_POST['invexpirydate'];
        $invrequantity=$_POST['invrequantity'];
        


        $sql= "INSERT INTO selectcustomermedicine(invmedicinename,invbatchnumber,invquantity,invexpirydate,invsellingprice,invrequantity,invtotal) VALUES ('$invmedicinename','$invbatchnumber','$invquantity','$invexpirydate','$invsellingprice','$invrequantity','$invtotal')";

        
        $result=mysqli_query($connect,$sql);



        //update the quatity
        
    
        $sql9 = "SELECT quantity, id FROM medicines WHERE medicinename = '$invmedicinename'";
        $result9 = mysqli_query($connect, $sql9);

        if (!$result9) {
            die("Error executing query: " . mysqli_error($connect));
        }

        $checkresult9 = mysqli_num_rows($result9);
        if ($checkresult9 > 0) {
            while ($row9 = mysqli_fetch_assoc($result9)) {
                $quantity = $row9['quantity'];
                $id = $row9['id'];
            }

            $newquantity = $quantity - $invrequantity;

            $sql = "UPDATE medicines SET quantity='$newquantity' WHERE id=$id";
            if (!mysqli_query($connect, $sql)) {
                die("Error updating quantity: " . mysqli_error($connect));
            }
        }



        if($result==true)
        {
            $_SESSION["successsavethemedicine"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-400 to-lime-400 text-white'>Successfully added the medicine</div>";
            header("Location:../newinvoice.php");
        }
        else
        {
            $_SESSION["failsavethemedicine"]="<div class='bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Failed to add, try again..!</div>";
            header("Location:../newinvoice.php");
        }

        

        
    


        
    }


?>