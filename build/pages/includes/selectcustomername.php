<?php

    include_once "dbconnection.php";
    session_start();

        if(isset($_POST['customername']))
        {
            $customerName = $_POST['customername'];

            // Split the full name into firstname and lastname
            $nameParts = explode(" ", $customerName, 2); // Split into two parts
            $firstname = $nameParts[0];
            $lastname = isset($nameParts[1]) ? $nameParts[1] : '';

            // Use prepared statements to prevent SQL injection
            $sql4 = "SELECT phone, location, id FROM customers WHERE firstname = ? AND lastname = ?";
            $stmt = mysqli_prepare($connect, $sql4);

            if ($stmt) 
            {
                // Bind parameters
                mysqli_stmt_bind_param($stmt, "ss", $firstname, $lastname);
                                                            
                // Execute the statement
                mysqli_stmt_execute($stmt);
                                                            
                // Bind result variables
                mysqli_stmt_bind_result($stmt, $phone, $location, $invoicenumber);
                                                            
                // Fetch results
                mysqli_stmt_fetch($stmt);

                // Close the statement
                mysqli_stmt_close($stmt); 

                $_SESSION["phone"]=$phone;
                $_SESSION["location"]=$location;
                $_SESSION["invoicenumber"]=$invoicenumber;
                header("Location:../newinvoice.php");
            }
        }
?>
