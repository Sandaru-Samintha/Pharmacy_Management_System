<?php

    include_once "includes/dbconnection.php";

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        //echo  $id;
    }
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
    <link rel="apple-touch-icon" sizes="76x76" href="https://e7.pngegg.com/pngimages/841/884/png-clipart-linkin-park-the-hunting-party-tour-logo-musical-ensemble-lynyrd-skynyrd-miscellaneous-album-thumbnail.png" />
    <link rel="icon" type="image/png" href="https://e7.pngegg.com/pngimages/841/884/png-clipart-linkin-park-the-hunting-party-tour-logo-musical-ensemble-lynyrd-skynyrd-miscellaneous-album-thumbnail.png" />
    <title>Late Pharmacy</title>
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
      <nav navbar-main class="relative flex flex-wrap items-center justify-between  px-0 py-2 mx-6 mt-6 transition-all ease-in bg-blue-500 shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
              
                <a class="text-white opacity-50" href="javascript:;">Pages</a>
              </li>
              <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:content-['/'] text-white before:text-white" aria-current="page">View Medicine</li>
            </ol>
            <h6 class="mb-0 font-bold text-white capitalize">View Medicine</h6>
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
        <!--  Medicines Detail -->
        <div class="flex flex-wrap-mx-3">
            <div class="flex-none w-full  max-w-full px-3">
                <div class="relative flex flex-col  min-w-0 h-full mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-2xl rounded-2xl bg-clip-border ">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0  rounded-2xl">
                        <h6> Medicine Details Form</h6>
                    </div>
                        <div class="flex max-h-screen">
                            <div class="m-auto">
                                <div>
                                    <div class="flex-auto px-0 pt-0 pb-2">
                                        <div class="p-0 overflow-x-auto">
                                            <!--  Medicines form-->
                                            <div class="mt-2  ">
                                                <div class="flex spacing-x-4">
                                                    <div class="flex py-5 pl-5 overflow-hidden"> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                                    <path fill-rule="evenodd" d="M16.098 2.598a3.75 3.75 0 1 1 3.622 6.275l-1.72.46V12a.75.75 0 0 1-.22.53l-.75.75a.75.75 0 0 1-1.06 0l-.97-.97-7.94 7.94a2.56 2.56 0 0 1-1.81.75 1.06 1.06 0 0 0-.75.31l-.97.97a.75.75 0 0 1-1.06 0l-.75-.75a.75.75 0 0 1 0-1.06l.97-.97a1.06 1.06 0 0 0 .31-.75c0-.68.27-1.33.75-1.81L11.69 9l-.97-.97a.75.75 0 0 1 0-1.06l.75-.75A.75.75 0 0 1 12 6h2.666l.461-1.72c.165-.617.49-1.2.971-1.682Zm-3.348 7.463L4.81 18a1.06 1.06 0 0 0-.31.75c0 .318-.06.63-.172.922a2.56 2.56 0 0 1 .922-.172c.281 0 .551-.112.75-.31l7.94-7.94-1.19-1.19Z" clip-rule="evenodd" />
                                                    </svg>
                                                        <h4 class="inline text-2xl font-semibold leading-none">Medicine Details</h4>
                                                    </div>
                                                </div>

                                                <!-- Medicine form  -->
                                                <form >
                                                
                                                <?php

                                                    $sql="SELECT * FROM medicines WHERE id=$id ";
                                                    //var_dump($id);
                                                    
                                                    

                                                    $result=mysqli_query($connect,$sql);
                                                    if(isset($sql))
                                                    {
                                                        $count=mysqli_num_rows($result);
                                                        if($count>0)
                                                        {
                                                            while($row=mysqli_fetch_assoc($result))
                                                            {

                                                              $id=$row["id"];
                                                              $medicinename=$row["medicinename"];
                                                              $brandname=$row["brandname"];
                                                              $batchnumber=$row["batchnumber"];
                                                              $medicinetype=$row["medicinetype"];
                                                              $category=$row["category"];
                                                              $manufacturedate=$row["manufacturedate"];
                                                              $expirydate=$row["expirydate"];
                                                              $suppliername=$row["suppliername"];
                                                              $quantity=$row["quantity"];
                                                              $purchaseprice=$row["purchaseprice"];
                                                              $sellingprice=$row["sellingprice"];
                                                            
                                                ?>
                                                                <!-- input fields -->
                                                                <div class="px-5 pb-5 ">
                                                                <label class="ml-4 font-bold text-xs text-slate-500">Medicine Name</label>
                                                                <input value="<?php echo $medicinename ;?>" readonly type="text" placeholder="Medicine Name" name="medicinename" class="text-black w-full px-4 py-2.5 mt-2 rounded-lg font-medium bg-slate-200">
                                                                <div class="flex">
                                                                    <div class="flex-grow w-1/2 pr-2">
                                                                        <label class="ml-4 font-bold text-xs text-slate-500">Brand Name</label>
                                                                        <input value="<?php echo $brandname ;?>" readonly type="text" placeholder="Brand Name" name="brandname" class="text-black w-full px-4 py-2.5 mt-2 rounded-lg font-medium bg-slate-200" >
                                                                    </div>
                                                                    <div class="flex-grow w-1/2 ">
                                                                        <label class="ml-4 font-bold text-xs text-slate-500">Batch Name</label>
                                                                        <input value="<?php echo $batchnumber ;?>" readonly type="text" placeholder="Batch Name" name="batchname" class="text-black w-full px-4 py-2.5 mt-2 rounded-lg font-medium bg-slate-200" >
                                                                    </div>
                                                                </div>
                                                                <div class="flex">
                                                                    <div class="flex-grow w-1/2 pr-2">
                                                                        <label class="ml-4 font-bold text-xs text-slate-500">Category</label>
                                                                        <input value="<?php echo $medicinetype ;?>" readonly type="text" placeholder="Category" name="category" class="text-black w-full px-4 py-2.5 mt-2 rounded-lg font-medium bg-slate-200" >
                                                                    </div>
                                                                    <div class="flex-grow w-1/2">
                                                                        <label class="ml-4 font-bold text-xs text-slate-500">Medicine Type</label>
                                                                        <input value="<?php echo $category ;?>" readonly type="text" placeholder="Category" name="category" class="text-black w-full px-4 py-2.5 mt-2 rounded-lg font-medium bg-slate-200" >
                                                                    </div>
                                                                </div>
                                                                <div class="flex">
                                                                    <div class="flex-grow w-1/2 pr-2">
                                                                        <label class="ml-4 font-bold text-xs text-slate-500">Manufacture Date</label>
                                                                        <input value="<?php echo $manufacturedate ;?>" readonly type="text" placeholder="Manufacture Date" name="manufacturedate" class="text-black w-full px-4 py-2.5 mt-2 font-medium  rounded-lg bg-slate-200" >
                                                                    </div>
                                                                    <div class="flex-grow w-1/2 ">
                                                                        <label class="ml-4 font-bold text-xs text-slate-500">Expiry Date</label>
                                                                        <input value="<?php echo $expirydate ;?>" readonly type="text" placeholder="Expiry Date" name="expirydate" class="text-black w-full px-4 py-2.5 mt-2 rounded-lg  font-medium bg-slate-200" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex space-x-2">
                                                                <div class="flex py-5 pl-5 overflow-hidden">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                                                <path fill-rule="evenodd" d="M16.098 2.598a3.75 3.75 0 1 1 3.622 6.275l-1.72.46V12a.75.75 0 0 1-.22.53l-.75.75a.75.75 0 0 1-1.06 0l-.97-.97-7.94 7.94a2.56 2.56 0 0 1-1.81.75 1.06 1.06 0 0 0-.75.31l-.97.97a.75.75 0 0 1-1.06 0l-.75-.75a.75.75 0 0 1 0-1.06l.97-.97a1.06 1.06 0 0 0 .31-.75c0-.68.27-1.33.75-1.81L11.69 9l-.97-.97a.75.75 0 0 1 0-1.06l.75-.75A.75.75 0 0 1 12 6h2.666l.461-1.72c.165-.617.49-1.2.971-1.682Zm-3.348 7.463L4.81 18a1.06 1.06 0 0 0-.31.75c0 .318-.06.63-.172.922a2.56 2.56 0 0 1 .922-.172c.281 0 .551-.112.75-.31l7.94-7.94-1.19-1.19Z" clip-rule="evenodd" />
                                                                </svg>

                                                                <h4 class="inline text-2xl font-semibold leading-none">Other Details</h4>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="px-5 pb-5 ">
                                                              <label class="ml-4 font-bold text-xs text-slate-500">Supplier Name</label>
                                                              <input value="<?php echo $suppliername ;?>" readonly type="text" placeholder="Supplier Name" name="suppliername" class="text-black font-medium w-full px-4 py-2.5 mt-2 rounded-lg bg-slate-200" >
                                                              </a>
                                                                <div class="flex">
                                                                    <div class="flex-grow w-1/2 pr-2">
                                                                        <label class="ml-4 font-bold text-xs text-slate-500">Stock Quantity</label>
                                                                        <input value="<?php echo $quantity ;?>" readonly type="text" placeholder="Stock Quantity" name="quentity" class="text-black w-full px-4 py-2.5 mt-2 rounded-lg  font-medium bg-slate-200" >
                                                                    </div>
                                                                    <div class="flex-grow w-1/2 ">
                                                                        <label class="ml-4 font-bold text-xs text-slate-500">Purchase Price</label>
                                                                        <input value="<?php echo "LKR"." . ". $purchaseprice ;?>" readonly type="text" placeholder="Purchase Price" name="purchaseprice" class="text-black w-full px-4 py-2.5 mt-2 rounded-lg font-medium bg-slate-200" >
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="flex">
                                                                    <div class="flex-grow w-1/2 pr-2">
                                                                        <label class="ml-4 font-bold text-xs text-slate-500">Selling Price</label>
                                                                        <input value="<?php echo "LKR"." . ". $sellingprice;?>" readonly type="text" placeholder="Selling Price" name="sellingprice" class="text-black w-full px-4 py-2.5 mt-2 rounded-lg font-medium bg-slate-200" >
                                                                        </a>
                                                                    </div>
                                                                    <div class="flex-grow w-1/2 ">
                                                                    <label class="ml-4 font-bold text-xs text-slate-500"></label>
                                                                        <a class="flex space-x-10 flex  font-medium tarnking-wide bg-gradient-to-tl from-blue-600 to-cyan-400 text-white w-full px-20 py-2.5 mt-2 rounded-lg " href="medicines.php">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061A1.125 1.125 0 0 1 21 8.689v8.122ZM11.25 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061a1.125 1.125 0 0 1 1.683.977v8.122Z" />
                                                                        </svg>
                                                                        <span>Go Back</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <hr class="mt-4">
                                                                <?php
                                                            }
                                                        }
                                                    }
                                                    ?>
                                            
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>


        <footer class="pt-4">
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
      <!-- end cards -->
    </main>
    <div fixed-plugin>
      <a fixed-plugin-button class="bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700">
        <i class="py-2 pointer-events-none fa fa-cog"> </i>
      </a>
      <!-- -right-90 in loc de 0-->
      <div fixed-plugin-card class="z-sticky shadow-soft-3xl w-90 ease-soft -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white bg-clip-border px-2.5 duration-200">
        <div class="px-6 pt-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
          <div class="float-left">
            <h5 class="mt-4 mb-0">Soft UI Configurator</h5>
            <p>See our dashboard options.</p>
          </div>
          <div class="float-right mt-6">
            <button fixed-plugin-close-button class="inline-block p-0 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:scale-102 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 active:opacity-85 text-slate-700">
              <i class="fa fa-close"></i>
            </button>
          </div>
          <!-- End Toggle Button -->
        </div>
        <hr class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
        <div class="flex-auto p-6 pt-0 sm:pt-4">
          <!-- Sidebar Backgrounds -->
          <div>
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
          </a>
          <!-- Sidenav Type -->
          <div class="mt-4">
            <h6 class="mb-0">Sidenav Type</h6>
            <p class="leading-normal text-sm">Choose between 2 different sidenav types.</p>
          </div>
          <div class="flex">
            <button transparent-style-btn class="inline-block w-full px-4 py-3 mb-2 font-bold text-center text-white uppercase align-middle transition-all border border-transparent border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-purple-700 to-pink-500 bg-fuchsia-500 hover:border-fuchsia-500" data-class="bg-transparent" active-style>Transparent</button>
            <button white-style-btn class="inline-block w-full px-4 py-3 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500" data-class="bg-white">White</button>
          </div>
          <p class="block mt-2 leading-normal text-sm xl:hidden">You can change the sidenav type just on desktop view.</p>
          <!-- Navbar Fixed -->
          <div class="mt-4">
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
  </body>
  <!-- plugin for charts  -->
  <script src="../assets/js/plugins/chartjs.min.js" async></script>
  <!-- plugin for scrollbar  -->
  <script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->
  <script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
</html>
