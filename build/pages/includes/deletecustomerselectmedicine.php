<?php

    session_start();
    include_once "dbconnection.php";

    if(isset($_POST['delete']))
    {
        
        $id=$_POST['id'];   
        

            //update the quentity of medicine  and totalamount of invoice

            $sql10="SELECT invrequantity,invmedicinename FROM selectcustomermedicine WHERE id ='$id' ";//get the invquantity and invermedicinename
            $result10 = mysqli_query($connect, $sql10);

            if (!$result10) {
                die("Error executing query: " . mysqli_error($connect));
            }


            $invrequantity;
            $invmedicinename;
            $checkresult10 = mysqli_num_rows($result10);
            if ($checkresult10 > 0) 
            {
                while ($row10 = mysqli_fetch_assoc($result10)) 
                {
                    $invrequantity = $row10['invrequantity'];
                    $invmedicinename = $row10['invmedicinename'];
                }

                
            }


            //delet the row in newinvoice
            $sql="DELETE FROM selectcustomermedicine WHERE id='$id'";
            $result=mysqli_query($connect,$sql);


            //get the quantity and id in medicine table 
            $sql11 = "SELECT quantity, id FROM medicines WHERE medicinename = '$invmedicinename'";
            $result11 = mysqli_query($connect, $sql11);

            if (!$result11) 
            {
                die("Error executing query: " . mysqli_error($connect));
            }
            $quantity;
            $id;
            $checkresult11 = mysqli_num_rows($result11);
            if ($checkresult11 > 0) 
            {
                while ($row11 = mysqli_fetch_assoc($result11)) {
                    $quantity = $row11['quantity'];
                    $id = $row11['id'];
                }

                $newquantity = $quantity + $invrequantity;

                $sql12 = "UPDATE medicines SET quantity='$newquantity' WHERE id=$id";
                if (!mysqli_query($connect, $sql12)) {
                    die("Error updating quantity: " . mysqli_error($connect));
                }
            }



            if($result==true)
            {
                $_SESSION["deletedsavedeitem"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-400 to-lime-400 text-white'>That was deleted</div>";
                header("Location:../newinvoice.php");
            }
            else
            {
                $_SESSION["deletefailed"]="<div class='bg-gradient-to-tl from-red-600 to-orange-400 text-white'>Failed to delete,Try again..! </div>";
                header("Location:../newinvoice.php");
            }
        
    }
    
    
?>