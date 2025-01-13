<?php
    
    include_once "dbconnection.php";
    session_start();

    if(isset($_POST['submit']))
    {
        $susername=$_POST['username'];
        $spassword=$_POST['password'];



        if(empty($susername)||empty($spassword))
        {

            $_SESSION["emptyfield"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Empty Field, try again..!</div>";
            header("Location:../sign-in.php?error=emptyfield&username=".$username);
            exit();
        }
        elseif(!empty($susername)&& !empty($spassword))
        {
            $sql= "SELECT * FROM users";
            $result=mysqli_query($connect,$sql);
            if($result==true)
            {
                $count=mysqli_num_rows($result);
                if($count>0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        
                        $username=($row['username']);
                        $password=($row['password']);

                        // $passCheck=password_verify($spassword,$password);
                        if(/*$passCheck==false*/!($spassword==$password))
                        {
                            $_SESSION["invalidpassword"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalid username or password, try again..!</div>";
                            header("Location:../sign-in.php?error=badlogin");
                            exit();
                        }
                        elseif($spassword==$password/*$passCheck==true*/)
                        {
                            if($susername==$username)
                            {
                                $_SESSION["loggedsuccess"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-600 to-lime-400 text-white'>Successfully login</div>";
                                header("Location:../dashboard.php?success=username=".$username);

                            }
                            else if(!($susername==$username ))
                            {
                                $_SESSION["invalideusname"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalid username, try again..!</div>";
                                header("Location:../sign-in.php?error=badlogin");
                            }
                        }


                        
                        // // Retrieve username, hashed password, and salt from the database
                        // $username = $row['username'];
                        // $storedHash = $row['password']; // This should be the salted hash stored during registration
                        // $storedSalt = $row['salt'];     // Salt stored during registration

                        // // Combine the provided password with the stored salt
                        // $passwordWithSalt = $spassword . $storedSalt;

                        // // Hash the combined password with salt using SHA-256
                        // $providedHash = hash('sha256', $passwordWithSalt);

                        // // Verify the hash
                        // if (!hash_equals($storedHash, $providedHash)) {
                        //     // Password does not match
                        //     $_SESSION["invalidpassword"] = "<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalid username or password, try again..!</div>";
                        //     header("Location:../sign-in.php?error=badlogin");
                        //     exit();
                        // }

                        // // Check if the provided username matches
                        // if ($susername === $username) {
                        //     // Login successful
                        //     $_SESSION["loggedsuccess"] = "<div class='flex justify-center items-center bg-gradient-to-tl from-green-600 to-lime-400 text-white'>Successfully logged in</div>";
                        //     header("Location:../dashboard.php");
                        //     exit();
                        // } else {
                        //     // Username does not match
                        //     $_SESSION["invalideusername"] = "<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalid username or password, try again..!</div>";
                        //     header("Location:../sign-in.php?error=badlogin");
                        //     exit();
                        // }
                    }
                }
            }
        }
    }





    // <?php
    
    // include_once "dbconnection.php";
    // session_start();

    // if(isset($_POST['submit']))
    // {
    //     $susername=$_POST['username'];
    //     $spassword=$_POST['password'];



    //     if(empty($susername)||empty($spassword))
    //     {

    //         $_SESSION["emptyfield"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Empty Field, try again..!</div>";
    //         header("Location:../sign-in.php?error=emptyfield&username=".$username);
    //         exit();
    //     }
    //     elseif(!empty($susername)&& !empty($spassword))
    //     {
    //         $sql= "SELECT * FROM users WHERE username = ? " ;
    //         $stmt=mysqli_stmt_init($connect);
    //         if(!mysqli_stmt_prepare($stmt,$sql))
    //         {
    //             header("Location:../sign-in.php?error=sqlerror1");
    //             exit();
    //         }
    //         else
    //         {

    //             mysqli_stmt_bind_param($stmt,"s",$susername);
    //             mysqli_stmt_execute($stmt);
    //             $result=mysqli_stmt_get_result($stmt);
    //             if($row = mysqli_fetch_assoc($result))
    //             {
                        
    //                 $passCheck=password_verify($spassword,$row['password']);
    //                 if($passCheck==true)
    //                 {
    //                     $_SESSION['username']==$row['username'];
    //                     $_SESSION["loggedsuccess"]="<div class='flex justify-center items-center bg-gradient-to-tl from-green-600 to-lime-400 text-white'>Successfully login</div>";
    //                     header("Location:../dashboard.php?success=username=".urlencode($row['username']));
                        
    //                 }
    //                 else
    //                 {
    //                     $_SESSION["invalidpassword"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalid username or password, try again..!</div>";
    //                     header("Location:../sign-in.php?error=badlogin".urlencode($spassword));
    //                     exit();
            
    //                 }  
    //             }
    //         }
    //     }
    // }