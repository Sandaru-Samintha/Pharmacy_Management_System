<?php

    session_start();
    include_once "includes/dbconnection.php";


?>



<!--
=========================================================
* Soft UI Dashboard Tailwind - v1.0.5
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard-tailwind
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Soft UI Dashboard Tailwind</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="../assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
  

  <!-- side bar -->
   <?php
      require "includes/sidebar.php";
   ?>

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <!-- Navbar -->
      <nav navbar-main class=" relative flex flex-wrap items-center justify-between  px-0 py-2 mx-6 mt-6 transition-all ease-in bg-blue-500 shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
              
                <a class="text-white opacity-50" href="javascript:;">Pages</a>
              </li>
              <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:content-['/'] text-white before:text-white" aria-current="page">New Invoice</li>
            </ol>
            <h6 class="mb-0 font-bold text-white capitalize">New Invoice</h6>
          </nav>
      
          
      
          <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto" id="navbar">
            <div class="flex items-center md:ml-auto md:pr-4">
              <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
                <span class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                  <i class="fas fa-search" aria-hidden="true"></i>
                </span>
                <input type="text" class="pl-9 text-sm focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
              </div>
            </div>

            
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">

              <li class="flex items-center">
                <a href="sign-in.php" class="block px-1 py-2 font-semibold text-white transition-all ease-nav-brand text-sm">
                  
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                </a>
              </li>

              <li class="flex items-center">
                <a href="sign-in.php" class="block px-0 py-2 font-semibold text-white transition-all ease-nav-brand text-sm">
                  <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                  <span class="hidden sm:inline">Sign Out</span>
                </a>
              </li>
    
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- end Navbar -->
    <div class="w-full px-6 py-6 m-auto">
        <!-- table Suppliers -->
        <div class="flex flex-wrap-mx-3">
            <div class="flex-none w-full max-w-full px-3">
              <?php
                if(isset($_SESSION['greterthanquantity']))
                {
                  echo $_SESSION['greterthanquantity'];
                  unset($_SESSION['greterthanquantity']);
                }
              ?>
              <?php
                if(isset($_SESSION['successsavethemedicine']))
                {
                  echo $_SESSION['successsavethemedicine'];
                  unset($_SESSION['successsavethemedicine']);
                }
              ?>
              <?php
                if(isset($_SESSION["deletedsavedeitem"]))
                {
                  echo $_SESSION["deletedsavedeitem"];
                  unset($_SESSION["deletedsavedeitem"]);
                }
              ?>
              
              
                <div class="relative flex flex-col  min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-2xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 rounded-2xl">
                        <h6>Create New Invoice</h6>
                    </div>

                        <div class="flex-auto px-0 pt-0 pb-2 pr-2">
                            <div class="p-0 overflow-x-auto "> 
                            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                <thead class="align-bottom">
                                <tr >
                                    
                                    <th class="px-14 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Select Option</th>
                                    <th class="px-6 py-3 pl-16 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Customer Name</th>
                                    <th class="px-6 py-3 pl-8 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Contact NO</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Location</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Invoice NO</th>
                                    <th class="px-6 py-3  font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Date</th>
                                    <th class="px-6 py-3  font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Payment Type</th>
                                    <!-- <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th> -->
                                    
                                </tr>
                                </div>
                                </thead>
        
                                <tbody>
                                <tr>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <form action="includes/selectcustomername.php" method="post">
                                      <select name="customername" style="width: 5cm;" class="mb-0 py-2 font-semibold text-xs  bg-gradient-to-tl from-slate-600 to-slate-400 rounded-1.8 text-white  border border-gray-600"   onchange="this.form.submit()">
                                          <option class="text-center" disabled selected value="">Select Customer Name</option>

                                          <?php

                                            $sql3 = "SELECT firstname, lastname FROM customers";
                                            $result3 = mysqli_query($connect, $sql3);

                                            if (mysqli_num_rows($result3) > 0)
                                            {
                                                while ($row = mysqli_fetch_assoc($result3))
                                                {
                                                    $fullName = $row['firstname'] . " " . $row['lastname'];
                                                    ?>
                                                    <option class="text-black text-center text-s" value="<?php echo $fullName; ?>"><?php echo $fullName; ?></option>
                                                    <?php
                                                }
                                            }
                                          ?>
                                      </select>
                                  </form>
                                            
                                </td>

                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <input name="customername" style="width: 5cm;"class="mb-0  py-2 font-semibold text-center leading-tight text-xs text-black  px-3   bg-slate-200 border border-gray-600" readonly value="<?php
                                                  
                                    if(isset($_SESSION["customername"]))
                                    {
                                      echo $_SESSION["customername"];
                                      $_SESSION["custname"]=$_SESSION["customername"];
                                    }
                                    ?>">
                                </td>

                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <input name="phone" style="width: 3cm;" class="mb-0  py-2 font-semibold text-center leading-tight text-xs text-black  px-3   bg-slate-200 border border-gray-600" readonly value="<?php
                                                  
                                    if(isset($_SESSION["phone"]))
                                    {
                                      echo $_SESSION["phone"];
                                      $_SESSION["custphone"]=$_SESSION["phone"];
                                    }
                                    ?>">
                                </td>

                                <td class="pl-4 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <input name="location" class="mb-0  py-2 font-semibold text-center leading-tight text-xs text-black  px-3   bg-slate-200 border border-gray-600" readonly value="<?php 
                                                                                  
                                  if(isset($_SESSION["location"]))
                                  {
                                      echo $_SESSION["location"];
                                      $_SESSION["custlocation"]=$_SESSION["location"];
                                  }
                                                                                
                                  ?>">
                                </td>

                                <td class="pl-5  align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <input name="invoicenumber" style="width: 2cm;" class="mb-0  py-2 font-semibold text-center leading-tight text-xs text-black  px-3   bg-slate-200 border border-gray-600" readonly value="<?php 
                                                
                                    if(isset($_SESSION["invoicenumber"]))
                                    {
                                      echo $_SESSION["invoicenumber"];
                                      $_SESSION["custinvoicenumber"]=$_SESSION["invoicenumber"];
                                    }
                                                
                                                
                                  ?>">
                                </td>

                                <td class="pl-4 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <input name="date"  class="mb-0  py-2 font-semibold text-center leading-tight text-xs text-black  px-3   bg-slate-200 border border-gray-600"  style="width: 3cm" readonly value="<?php 
                                                
                                                if(isset($_SESSION["currentdate"]))
                                                {
                                                  echo $_SESSION["currentdate"];
                                                  $_SESSION["custcurrentdate"]=$_SESSION["currentdate"];
                                                }
                                                            
                                                            
                                              ?>">
                                </td>

                                <td class="pl-4 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <Select name='<?php $_SESSION["paymenttype"]=$paymenttype;?> '  class="mb-0  py-2 font-semibold text-center leading-tight text-xs text-black  px-3   bg-slate-200 border border-gray-600">
                                  <option value='<?php echo$_SESSION["paymenttype"]="Cash Payment";?>'>Cash Payment</option>
                                    <option value='<?php echo$_SESSION["paymenttype"]="Credit Card";?>'>Credit Card</option>
                                    <option value='<?php echo$_SESSION["paymenttype"]="Debit Card";?>'>Debit Card</option>
                                    <option value='<?php echo$_SESSION["paymenttype"]="UPI";?>'>UPI</option>
                                    <option value='<?php echo$_SESSION["paymenttype"]="Net Banking";?>'>Net Banking</option> 
                                  </Select>
                                  </td>
                                </tr>
                                    <tr>
                                      <td>
                                        <div class="flex">
                                        <div class="p-2 pl-2">
                                            <a class="flex space-x-4 flex items-center font-semibold text-xs  bg-gradient-to-tl from-blue-600 to-cyan-400 text-white  px-7 py-2.5 pl-3  rounded-lg " style="width: 5cm;" href="addcustomers.php">
                                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                              </svg>
                                                <span>Add New Customer</span>
                                            </a>
                                        </div>
                                        </div>
                                      </td>
                                    </tr>

                                    <tr>
                                      <td colspan="7" class="pt-10">
                                      <hr style="width: 100%; border: 2px solid black;">
                                      </td>
                                    </tr>

                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="flex-auto px-0 pt-2 pb-2 pr-2">
                              <div class="p-0 overflow-x-auto"> 
                                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                  <thead class="align-bottom">
                                  <tr >
                                    
                                    <th class="px-12 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Medicine Name</th>
                                    <th class="px-6 py-3 pl-12 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Batch Number</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Quantity</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Exp.Date</th>
                                    <th class="px-6 py-3  font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Selling Price</th>
                                    <th class="px-6 py-3  font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Req.Quantity</th>
                                    <th class="px-6 py-3  font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Total</th>
                                    <th  class="px-6 py-3  font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                                    <!-- <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th> -->
                                    
                                </tr>
                                </div>
                                </thead>
                                <tbody>
        
                                
                                  <?php


                                    $sql8="SELECT * FROM selectcustomermedicine";
                                    $result8=mysqli_query($connect,$sql8);
                                    $checkresult8=mysqli_num_rows($result8);

                                    if($checkresult8>0)
                                    {
                                      $totatalamount=0.00;
                                      while($row8=mysqli_fetch_assoc($result8))
                                      {
                                        $invid=$row8['id'];
                                        $invmedicinename=$row8['invmedicinename'];
                                        $invbatchnumber=$row8['invbatchnumber'];
                                        $invquantity=$row8['invquantity'];
                                        $invexpirydate=$row8['invexpirydate'];
                                        $invsellingprice=$row8['invsellingprice'];
                                        $invrequantity=$row8['invrequantity'];
                                        $invtotal=$row8['invtotal'];
                                        $totatalamount=$totatalamount+$row8['invtotal'];

                                        ?>

                                        
                                        

                                          <tr><!--show the customer saved medicines details-->
                                            <form action="includes/deletecustomerselectmedicine.php" method="post">

                                            

                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <input name="invmedicinename" style="width: 4cm;" class="mb-0 py-2 font-semibold text-center leading-tight text-xs text-black px-1 bg-slate-200 border border-gray-600" readonly value="<?php  echo $invmedicinename ;$_SESSION["custinvmedicinename"]=$invmedicinename; ?>">
                                            </td>

                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <input name="invbatchnumber"   class="mb-0 py-2 font-semibold text-center leading-tight text-xs text-black px-1 bg-slate-200 border border-gray-600" readonly value="<?php echo $invbatchnumber;$_SESSION["custinvbatchnumber"]=$invbatchnumber;  ?>">
                                            </td>

                                            <td class="p-2 pl-4 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <input name="invquantity"  style="width: 2cm;" class="mb-0 py-2 font-semibold text-center leading-tight text-xs text-black px-1 bg-slate-200 border border-gray-600" readonly value="<?php echo $invquantity;$_SESSION["custinvquantity"]=$invquantity;?>">
                                            </td>

                                            <td class="p-2 pl-5 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <input name="invexpirydate"  style="width: 3cm;" class="mb-0 py-2 font-semibold text-center leading-tight text-xs text-black px-1 bg-slate-200 border border-gray-600" readonly value="<?php echo $invexpirydate;$_SESSION["custinvexpirydate"]=$invexpirydate; ?>">
                                            </td>

                                            <td class="p-2 pl-5 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <input name="invsellingprice"  style="width: 3cm;" class="mb-0 py-2 font-semibold text-center leading-tight text-xs text-black px-1 bg-slate-200 border border-gray-600" readonly value="<?php echo "LKR . ".$invsellingprice;$_SESSION["custinvsellingprice"]=$invsellingprice; ?>">
                                            </td>
                                              
                                            <td class="p-2 pl-7 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <input type="number" name="invrequantity"  min="0" max="<?php $_SESSION['quantity']?>" name="requantity" style="width: 2cm;" class="mb-0 py-2 font-semibold text-center leading-tight text-xs text-black px-2 bg-slate-200 border border-gray-600"  readonly value="<?php echo $invrequantity;$_SESSION["custinvrequantity"]=$invrequantity;?>">
                                            </td>
                                            
                                            <td class="p-2 pl-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <input type="text" name="invtotal"  value="<?php echo "LKR . ".$invtotal; $_SESSION["custinvtotal"]=$invtotal?>"style="width: 3cm;" class="mb-0 py-2 font-semibold text-center leading-tight text-xs text-black px-1 bg-slate-200 border border-gray-600" readonly>
                                            </td>

                                            <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                              
                                              <button type="submit" name="delete"  class="bg-gradient-to-tl from-red-600 to-yellow-400 px-2 text-xs rounded-1.8 py-2 inline-block whitespace-nowrap r align-baseline leading-none ">
                                              <input type="hidden" name="id" value="<?php echo $invid ; ?>">
                                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white" class="size-5">
                                              <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd" />
                                            </svg>
                                              </button>
                                            </td>
                                            </form>
                                            </tr>

                                        <?php
                                      }
                                    }

                                  ?>

                                
                                

                                

                                  <tr ><!-- visualice the selected things-->
                                    <td class="p-2  pt-8 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                          <form action="includes/selectmedicinename.php" method="post">
                                              <select name="medicinename" id="medicinename" class="mb-0 py-2 font-semibold text-center leading-tight font-semibold text-xs  bg-gradient-to-tl from-slate-600 to-slate-400 rounded-1.8 text-white border border-gray-600" style="width: 4cm;" onchange="this.form.submit()">
                                                  <option class="text-center" disabled selected>Select Medicine</option>
                                                  <?php
                                                    $sql5 = "SELECT medicinename FROM medicines";
                                                    $result5 = mysqli_query($connect, $sql5);

                                                    if (mysqli_num_rows($result5) > 0) 
                                                    {
                                                        while ($row = mysqli_fetch_assoc($result5)) 
                                                        {
                                                            $medicinename = $row['medicinename'];
                                                            ?>
                                                            <option class="text-black text-center text-s" value="<?php echo $medicinename; ?>" ><?php echo $medicinename; ?></option>
                                                            <?php
                                                        }
                                                  }
                                                  ?>
                                              </select>
                                          </form>
                                      </td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>

                                      <td class="p-2 pl-7  pt-8 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                          <form action="includes/selectquantity.php" onchange="this.form.submit()"  method="post">
                                              <input name="requantity" type="number" min="0" max="<?php echo isset($_SESSION['quantity']) ? $_SESSION['quantity'] : ''; ?>" class="mb-0 py-2 font-semibold text-center leading-tight font-semibold text-xs text-black   rounded-1.8  border border-gray-600"  style="width: 2cm;"value="requantity"   >
                                              <input type="hidden" name="id" value="<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : ''; ?>">
                                          </form>
                                      </td>
                                      
                                      <td class="p-2 pt-8 pl-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <input  type="text" name="totalamount" style="width: 3cm;" class="mb-0 py-2 font-bold text-center leading-tight text-xs  text-black px-2 bg-slate-400 border border-gray-600"  readonly value="<?php 
                                                
                                                if(isset($totatalamount))
                                                {
                                                  echo "LKR . " .$totatalamount ;
                                                }
                                                elseif(!isset($totatalamount))
                                                {
                                                  echo"LKR . 0.00";
                                                }
                                                ?>">
                                                
                                      

                                      <td class="p-2 pt-8  font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"> Total Amount</td>
                                      
                                    </tr>
                                  </div>






                                    <tr><!--get the requirde details-->
                                      <form action="includes/savecustomerselectedmedicines.php" method="post">
                                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                          <input name="invmedicinename" style="width: 4cm;" class="mb-0 py-2 font-semibold text-center leading-tight text-xs text-black px-1 bg-slate-200 border border-gray-600" readonly value="<?php echo isset($_SESSION['medicinename']) ? $_SESSION['medicinename'] : ''; ?>">
                                      </td>

                                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                          <input name="invbatchnumber" class="mb-0 py-2 font-semibold text-center leading-tight text-xs text-black px-1 bg-slate-200 border border-gray-600" readonly value="<?php echo isset($_SESSION['batchnumber']) ? $_SESSION['batchnumber'] : ''; ?>">
                                      </td>

                                      <td class="p-2 pl-4 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                          <input name="invquantity" style="width: 2cm;" class="mb-0 py-2 font-semibold text-center leading-tight text-xs text-black px-1 bg-slate-200 border border-gray-600" readonly value="<?php echo isset($_SESSION['quantity']) ? $_SESSION['quantity'] : ''; ?>">
                                      </td>

                                      <td class="p-2 pl-5 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                          <input name="invexpirydate" style="width: 3cm;" class="mb-0 py-2 font-semibold text-center leading-tight text-xs text-black px-1 bg-slate-200 border border-gray-600" readonly value="<?php echo isset($_SESSION['expirydate']) ? $_SESSION['expirydate'] : ''; ?>">
                                      </td>

                                      <td class="p-2 pl-5 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                          <input name="invsellingprice" style="width: 3cm;" class="mb-0 py-2 font-semibold text-center leading-tight text-xs text-black px-1 bg-slate-200 border border-gray-600" readonly value="<?php echo isset($_SESSION['sellingprice']) ? "LKR . ".$_SESSION['sellingprice'] : ''; ?>">
                                      </td>
                                        
                                      <td class="p-2 pl-7 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                          <input type="number" name="invrequantity" min="0" max="<?php echo isset($_SESSION['requantity']) ?$_SESSION['requantity']  : ''; ?>" style="width: 2cm;" class="mb-0 py-2 font-semibold text-center leading-tight text-xs text-black px-2 bg-slate-200 border border-gray-600"  readonly value="<?php echo isset($_SESSION['requantity']) ?$_SESSION['requantity']  : ''; ?>">
                                      </td>
                                      
                                      <td class="p-2 pl-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                          <input type="text" name="invtotal" value="<?php echo isset($_SESSION['total']) ?"LKR . ".$_SESSION['total']: ''; ?>"style="width: 3cm;" class="mb-0 py-2 font-semibold text-center leading-tight text-xs text-black px-1 bg-slate-200 border border-gray-600" readonly>
                                      </td>

                                      <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                        <?php

                                            if(isset($_SESSION['button']))
                                            {
                                              echo $_SESSION['button'];
                                              unset($_SESSION['button']);
                                            }
                                        ?>
                                        
                                      </td>
                                      </form>
                                    </tr>
                                  </tbody>
                                </table>
                                <div class="flex-auto px-0 pt-14 pb-2 pr-2">
                                  <div class="p-0 overflow-x-auto"> 
                                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                      
                                      <tr >
                                      <form action="includes/newinvoice_inc.php" method="post">
                                      <td>
                                      <div class="flex flex-row-reverse p-3 mr-3">
                                                    <div class="flex-initial ">
                                                        <button type="submit" name="submit"  class="flex space-x-2 flex items-center px-5 py-2 font-medium tarnking-wide text-white capitalize bg-gradient-to-tl from-green-600 to-lime-400 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  fill="currentColor" class="size-6" >
                                                        <path fill-rule="evenodd" d="M19.5 21a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3h-5.379a.75.75 0 0 1-.53-.22L11.47 3.66A2.25 2.25 0 0 0 9.879 3H4.5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h15Zm-6.75-10.5a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V10.5Z" clip-rule="evenodd" />
                                                        </svg>
                                                            <span >Save</span>
                                                        </button>
                                                    </div>
                                                </div>
                                      </td>
                                      <td class="p-2 pl-10"></td>
                                      <td class="p-2 pl-10 "></td>
                                      <td class="p-2 pl-6"></td>
                                      <td class="p-2 pl-6"></td>
                                      <td class="p-2 pl-6"></td>

                                      <td class="p-2 pl-15 ">
                                          <a class="font-bold text-left text-xs uppercase align-middle">Net Total :</a>
                                          <input type="text" id="totalamount" name="totalamount" style="width: 4cm;" 
                                              class="mb-0 py-2 font-bold text-center leading-tight text-xs text-black px-2 bg-slate-200 border border-gray-600"  
                                              readonly value="<?php 
                                                  if(isset($totatalamount)) {
                                                      echo 'LKR . ' . $totatalamount;
                                                  } else {
                                                      echo 'LKR . 0.00';
                                                  }
                                              ?>">
                                      </td>

                                      <td class="p-2 pl-2 ">
                                          <a class="font-bold text-xs text-left uppercase align-middle">Paid amount :</a>
                                          <input type="text" id="paidamount" name="paidamount" style="width: 4cm;" 
                                              class="mb-0 py-2 font-bold text-center leading-tight text-xs text-black px-2 bg-slate-200 border border-gray-600">
                                      </td>

                                      <td class="p-2 pl-2 ">
                                          <a class="font-bold text-left text-xs uppercase align-middle">Change :</a>
                                          <input type="text" id="change" name="change" style="width: 4cm;" 
                                              class="mb-0 py-2 font-bold text-center leading-tight text-xs text-black px-2 bg-slate-200 border border-gray-600" readonly>
                                      </td>

                                      <!-- Add this script to handle the calculation and LKR prefix -->
                                      <script>
                                          document.getElementById('paidamount').addEventListener('input', function () {
                                              const totalAmountInput = document.getElementById('totalamount');
                                              const paidAmountInput = document.getElementById('paidamount');
                                              const changeInput = document.getElementById('change');

                                              // Extract numeric value from total amount (ignoring "LKR .")
                                              const totalAmount = parseFloat(totalAmountInput.value.replace('LKR .', '').trim()) || 0;
                                              const paidAmount = parseFloat(paidAmountInput.value.trim()) || 0;

                                              // Calculate change
                                              const change = paidAmount - totalAmount;

                                              // Update the change field with "LKR" prefix
                                              changeInput.value = `LKR . ${change >= 0 ? change.toFixed(2) : '0.00'}`;
                                          });
                                      </script>
                                    </tr>
                                    </form>
                                  </div>
                                  
                                    <tbody>
                                    </tbody>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- <footer class="pt-0">
        <div class="w-full px-6 mx-auto">
            <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
            <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
                ©
                <script>
                    document.write(new Date().getFullYear() + ",");
                </script>
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a>
                for a better web.
                </div>
            </div>
            <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                <li class="nav-item">
                    <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                    <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">License</a>
                </li>
                </ul>
            </div>
        </div>
        </div>
        </footer>
    </div>
      end cards -->
    <!-- </main>
    <div fixed-plugin>
      <a fixed-plugin-button class="bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700">
        <i class="py-2 pointer-events-none fa fa-cog"> </i>
      </a>
      -right-90 in loc de 0-->
      <!-- <div fixed-plugin-card class="z-sticky shadow-soft-3xl w-90 ease-soft -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white bg-clip-border px-2.5 duration-200">
        <div class="px-6 pt-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
          <div class="float-left">
            <h5 class="mt-4 mb-0">Soft UI Configurator</h5>
            <p>See our dashboard options.</p>
          </div>
          <div class="float-right mt-6">
            <button fixed-plugin-close-button class="inline-block p-0 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:scale-102 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 active:opacity-85 text-slate-700">
              <i class="fa fa-close"></i>
            </button>
          </div> --> 
          <!-- End Toggle Button -->
        <!-- </div>
        <hr class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
        <div class="flex-auto p-6 pt-0 sm:pt-4"> -->
          <!-- Sidebar Backgrounds -->
          <!-- <div>
            <h6 class="mb-0">Sidebar Colors</h6>
          </div>
          <a href="javascript:void(0)">
            <div class="my-2 text-left" sidenav-colors>
              <span class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-purple-700 to-pink-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-slate-700 text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" active-color data-color-from="purple-700" data-color-to="pink-500" onclick="sidebarColor(this)"></span>
              <span class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-gray-900 to-slate-800 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color-from="gray-900" data-color-to="slate-800" onclick="sidebarColor(this)"></span>
              <span class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-blue-600 to-cyan-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color-from="blue-600" data-color-to="cyan-400" onclick="sidebarColor(this)"></span>
              <span class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-green-600 to-lime-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color-from="green-600" data-color-to="lime-400" onclick="sidebarColor(this)"></span>
              <span class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-red-500 to-yellow-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color-from="red-500" data-color-to="yellow-400" onclick="sidebarColor(this)"></span>
              <span class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-red-600 to-rose-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color-from="red-600" data-color-to="rose-400" onclick="sidebarColor(this)"></span>
            </div>
          </a> -->
          <!-- Sidenav Type -->
          <!-- <div class="mt-4">
            <h6 class="mb-0">Sidenav Type</h6>
            <p class="leading-normal text-sm">Choose between 2 different sidenav types.</p>
          </div>
          <div class="flex">
            <button transparent-style-btn class="inline-block w-full px-4 py-3 mb-2 font-bold text-center text-white uppercase align-middle transition-all border border-transparent border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-purple-700 to-pink-500 bg-fuchsia-500 hover:border-fuchsia-500" data-class="bg-transparent" active-style>Transparent</button>
            <button white-style-btn class="inline-block w-full px-4 py-3 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500" data-class="bg-white">White</button>
          </div> -->
          <!-- <p class="block mt-2 leading-normal text-sm xl:hidden">You can change the sidenav type just on desktop view.</p> -->
          <!-- Navbar Fixed -->
          <!-- <div class="mt-4">
            <h6 class="mb-0">Navbar Fixed</h6>
          </div>
          <div class="min-h-6 mb-0.5 block pl-0">
            <input navbarFixed class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right" type="checkbox" />
          </div>
          <hr class="h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent sm:my-6" />
          <a class="inline-block w-full px-6 py-3 mb-4 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer leading-pro text-xs ease-soft-in hover:shadow-soft-xs hover:scale-102 active:opacity-85 tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800" href="https://www.creative-tim.com/product/soft-ui-dashboard-tailwind" target="_blank">Free Download</a>
          <a class="inline-block w-full px-6 py-3 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 border-slate-700 text-slate-700 hover:bg-transparent hover:text-slate-700 hover:shadow-none active:bg-slate-700 active:text-white active:hover:bg-transparent active:hover:text-slate-700 active:hover:shadow-none" href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/" target="_blank">View documentation</a>
          <div class="w-full text-center">
            <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
            <h6 class="mt-4">Thank you for sharing!</h6>
            <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20Tailwind%20made%20by%20%40CreativeTim&hashtags=webdesign,dashboard,tailwindcss&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-tailwind" class="inline-block px-6 py-3 mb-0 mr-2 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700" target="_blank"> <i class="mr-1 fab fa-twitter"></i> Tweet </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard-tailwind" class="inline-block px-6 py-3 mb-0 mr-2 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700" target="_blank"> <i class="mr-1 fab fa-facebook-square"></i> Share </a>
          </div>
        </div>
      </div>
    </div>
  </body> -->
  <!-- plugin for charts  -->
  <script src="../assets/js/plugins/chartjs.min.js" async></script>
  <!-- plugin for scrollbar  -->
  <script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- github button -->
  <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
  <!-- main script file  -->
  <script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
</html> 
