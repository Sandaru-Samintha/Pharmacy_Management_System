<?php

    session_start();
    include_once "dbconnection.php";

    if(isset($_POST['submit']))
    {
        
        // Retrieve POST values and sanitize the input
        $valueWithPrefix1 = $_POST["totalamount"];
        $totalamount = str_replace("LKR . ", "", $valueWithPrefix1);
        
        $valueWithPrefix2 = $_POST["change"];
        $change = str_replace("LKR . ", "", $valueWithPrefix2);
        
        $paidamount = $_POST["paidamount"];
        
        // Retrieve customer data from session
        $custname = $_SESSION["custname"];
        $custphone = $_SESSION["custphone"];
        $custlocation = $_SESSION["custlocation"];
        $custinvoicenumber = $_SESSION["custinvoicenumber"];
        $custcurrentdate = $_SESSION["custcurrentdate"];
        $custpaymenttype = $_SESSION["paymenttype"];

        if(empty($paidamount)&& $totalamount==0.00)
        {
            header("Location:../newinvoice.php");
        }
        else if(!empty($paidamount)&& $totalamount!=0.00)
        {
            // Prepare the SQL statement for inserting data
            $sql14 = "INSERT INTO invoices (custname, custphone, custlocation, custinvoicenumber, custcurrentdate, paymenttype, invrequantity, invmedicinename, invbatchnumber, invquantity, invexpirydate, invsellingprice, invtotal, totalamount, paidamount, `change`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            // Prepare the statement
            $stmt = mysqli_prepare($connect, $sql14);
            
            if (!$stmt) {
                die("Error preparing statement: " . mysqli_error($connect));
            }
            
            // Select medicine data from the database
            $sql13 = "SELECT * FROM selectcustomermedicine";
            $result13 = mysqli_query($connect, $sql13);
            
            // Check for query errors
            if (!$result13) {
                die("Error executing query: " . mysqli_error($connect));
            }
            
            $checkresult13 = mysqli_num_rows($result13);
            if ($checkresult13 > 0) {
                // Loop through the medicine records and insert each into the invoices table
                while ($row13 = mysqli_fetch_assoc($result13)) 
                {
                    // Extract medicine data
                    $invrequantity = $row13['invrequantity'];
                    $invmedicinename = $row13['invmedicinename'];
                    $invbatchnumber = $row13["invbatchnumber"];
                    $invquantity = $row13["invquantity"];
                    $invexpirydate = $row13["invexpirydate"];
                    $invsellingprice = $row13["invsellingprice"];
                    $invtotal = $row13['invtotal'];
            
                    // Bind the parameters to the prepared statement
                    mysqli_stmt_bind_param($stmt, 'sssississisddddd', 
                        $custname, $custphone, $custlocation, $custinvoicenumber, $custcurrentdate, $custpaymenttype,
                        $invrequantity, $invmedicinename, $invbatchnumber, $invquantity, $invexpirydate, $invsellingprice,
                        $invtotal, $totalamount, $paidamount, $change
                    );
            
                    // Execute the query
                    if (!mysqli_stmt_execute($stmt)) 
                    {
                        die("Error inserting data into invoices: " . mysqli_error($connect));
                    }
                }
            }
            
            // Now, truncate the table after the insert operation is successful
            $sql15 = "TRUNCATE TABLE selectcustomermedicine";
            if (!mysqli_query($connect, $sql15)) 
            {
                die("Error truncating table: " . mysqli_error($connect));
            }

                
            if(mysqli_query($connect, $sql15)==true)
            {
                $_SESSION["successpaid"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-400 to-lime-400 text-white'>Successfully paid the customer</div>";
                
            
                // Redirect to the new invoice page
                header("Location: ../manageinvoice.php");
            }
            // Redirect to the new invoice page
            header("Location: ../manageinvoice.php");
        
        // Close the prepared statement
        mysqli_stmt_close($stmt);
        }
    }
?>
