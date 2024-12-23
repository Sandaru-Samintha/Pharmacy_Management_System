<?php
    include_once "dbconnection.php";
    session_start();

    if (isset($_POST['medicinename'])) 
    {
        $medicinename = $_POST['medicinename'];

        // Use prepared statements to prevent SQL injection
        $sql4 = "SELECT batchnumber, expirydate, quantity, sellingprice,medicinename,id FROM medicines WHERE medicinename = ?";
        $stmt = mysqli_prepare($connect, $sql4);

        if ($stmt) 
        {
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "s", $medicinename);

            // Execute the statement
            mysqli_stmt_execute($stmt);

            // Bind result variables
            mysqli_stmt_bind_result($stmt, $batchnumber, $expirydate, $quantity, $sellingprice,$medicinename,$id);

            // Fetch results
            mysqli_stmt_fetch($stmt);

            // Close the statement
            mysqli_stmt_close($stmt);

            $_SESSION['batchnumber']=$batchnumber;
            $_SESSION['expirydate']=$expirydate;
            $_SESSION['quantity']=$quantity;
            $_SESSION['sellingprice']=$sellingprice;
            $_SESSION['medicinename']=$medicinename;
            $_SESSION['id']=$id;
            header("Location:../newinvoice.php");
        }
    }
?>