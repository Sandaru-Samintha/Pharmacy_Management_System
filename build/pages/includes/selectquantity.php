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
            $total=($sellingprice * $requantity ); //these all session valuse pass from selectmedicinename.php

            $_SESSION['total']= $total ;
            $_SESSION['requantity']=$requantity;
            header("Location:../newinvoice.php");

        // $sql= "UPDATE medicines SET quantity='$newquantity' WHERE id=$id";//update the new quantity
        }

        $_SESSION['button']='<button type="submit" name="add"  class="bg-gradient-to-tl from-green-600 to-lime-400 px-2 text-xs rounded-1.8 py-2 inline-block whitespace-nowrap r align-baseline leading-none ">

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white" class="size-5">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-11.25a.75.75 0 0 0-1.5 0v2.5h-2.5a.75.75 0 0 0 0 1.5h2.5v2.5a.75.75 0 0 0 1.5 0v-2.5h2.5a.75.75 0 0 0 0-1.5h-2.5v-2.5Z" clip-rule="evenodd" />
                                        </svg>
                                        </button>';
        header("Location:../newinvoice.php");

        
                
    }
?>