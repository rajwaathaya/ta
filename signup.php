<?php 
require_once 'function.php'; 
// session_start(); 
if (isset($_SESSION['login'])) { 
    header('Location: index.php'); 
    exit; 
} 
 
$alert = ''; 
 
// kalo button submit diklik 
if (isset($_POST['submit'])) { 
    // if ($_POST['password'] != $_POST['confirm']) { 
    //     $alert = "Password confirm doesn't match!"; 
    // } else { 
        $result = register($_POST); 
        if ($result) { 
            echo "<script> 
                alert('Registration Success!'); 
                document.location.href = 'login.php'; 
            </script>"; 
        } else { 
            echo "<script> 
                alert('Registration Failed!'); 
                document.location.href = 'signup.php';
            </script>"; 
        } 
    // } 
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onyx Lavanda</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="" method="post">
                <h1>Sign Up</h1>
                <hr>
                <p>Hello! Want to be our member?</p>
                <label for="">Name</label>
                <input type="text" placeholder="Name" name="name">
                <label for="">Username</label>
                <input type="username" placeholder="Username" name="username">
                <label for="">Password</label>
                <input type="password" placeholder="Password" name="password">
                <button type="submit" name="submit">Sign Up</button>
                <p>
                    <a href="#" onclick="location.href='login.php'">Already have account?</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="img/register.jpg" alt="">
        </div>
    </div>
</body>

</html>

