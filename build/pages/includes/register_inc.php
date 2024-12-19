<?php
    
    include_once "dbconnection.php";
    session_start();

    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $Conpassword=$_POST['Conpassword'];


        //error handle

        if(empty($username)||empty($email)|| empty($password)|| empty($Conpassword))
        {

            $_SESSION["emptyfield"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Empty Field, try again..!</div>";
            header("Location:../sign-up.php?error=emptyfield&username=".$username);
            exit();
        }
        //check for invalied field
        elseif(!preg_match("/^[a-zA-Z0-9]*/",$username))
        {
            $_SESSION["usernameinvalid"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalide User Name</div>";
            header("Location:../sign-up.php?error=invalidfield&username=".$username);
            exit();
        }

        elseif(!preg_match("/^[\w.%+-]+@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/",$email))
        {
            $_SESSION["emailinvalid"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalide email address</div>";
            header("Location:../sign-up.php?error=invalidfield&username=".$username);
            exit();
        }

        elseif(strlen($password) <=6)
        {
            $_SESSION["passwordinvalid"]="<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Invalide password, it must be at least six characters</div>";
            header("Location:../sign-up.php?error=invalidfield&username=".$username);
            exit();
        }

        elseif($Conpassword!=$password)
        {
            $_SESSION["passwordnotmatched"]="<div class='bg-gradient-to-tl from-red-600 to-yellow-400 text-white text-center'>Password doesn't match </div>";
            header("Location:../sign-up.php?error=passworddosenotmatch&username=".$username);
            exit();
        }
        
    // Check if the username or email is already used
        else {
            $sql = "SELECT username, email FROM users WHERE username = ? OR email = ?";
            $stmt = mysqli_stmt_init($connect);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../sign-up.php?error=sqlerror1");
                exit();
            }

            // Bind and execute
            mysqli_stmt_bind_param($stmt, "ss", $username, $email); // 'ss' for two string parameters
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $rowCount = mysqli_stmt_num_rows($stmt);
            if ($rowCount > 0) {
                // Fetch the matching row(s) to check whether it's the username or email that already exists
                mysqli_stmt_bind_result($stmt, $existingUsername, $existingEmail);
                mysqli_stmt_fetch($stmt);

                // Provide specific feedback based on which field matches
                if ($existingUsername === $username) {
                    $_SESSION["usernameused"] = "<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Username is already used.</div>";
                    header("Location: ../sign-up.php?error=UsernameTaken");
                } elseif ($existingEmail === $email) {
                    $_SESSION["emailused"] = "<div class='flex justify-center items-center bg-gradient-to-tl from-red-600 to-yellow-400 text-white'>Email is already registered.</div>";
                    header("Location: ../sign-up.php?error=EmailTaken");
                }
                exit();
            }

            //insert data in to the database 
            else
            {
                $sql="INSERT INTO users (username,email,password) VALUES (?,?,?)";
                $stmt=mysqli_stmt_init($connect);
                if(!mysqli_stmt_prepare($stmt,$sql))
                {
                    header("../Location:sign-up.php?error=sqlerror2");
                    exit();
                }
                //hashed the password
                else{

                    //$hashpassword=password_hash($password,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,"sss",$username,$email,/*$hashpassword*/$password);
                    mysqli_stmt_execute($stmt);
                    $_SESSION["success"]="<div class='bg-gradient-to-tl from-green-600 to-lime-400 text-center text-white'>Successfully registered</div>";
                    header("Location:../sign-in.php?success=Registered");



                    // // Generate a random salt
                    // $salt = bin2hex(random_bytes(16)); // 16 bytes = 32 characters

                    // // Combine password and salt
                    // $passwordWithSalt = $password . $salt;

                    // // Hash the password with salt using SHA-256
                    // $hashPassword = hash('sha256', $passwordWithSalt);

                    // // Save the salt and hash (concatenate or store separately)
                    // $storedPassword = $salt . ':' . $hashPassword;

                    // // Bind the parameters and execute
                    // mysqli_stmt_bind_param($stmt, "sss", $username, $email, $storedPassword);
                    // mysqli_stmt_execute($stmt);

                    // // Set success message
                    // $_SESSION["success"] = "<div class='bg-gradient-to-tl from-green-600 to-lime-400 text-center text-white'>Successfully registered</div>";
                    // header("Location:../sign-in.php?success=Registered");



                }
            }
        }

    }


?>