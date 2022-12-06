<?php 
require_once 'function.php'; 
session_start(); 
 
if (isset($_SESSION['login'])) { 
    header('Location: index.php'); 
    exit; 
} 
 
if (isset($_POST['submit'])) { 
    if (is_null(login($_POST))) { 
        echo "<script> 
            alert('Username not registered!'); 
        </script>"; 
    } else if (!login($_POST)) { 
        echo "<script> 
            alert('Wrong username/ password!'); 
        </script>"; 
    } else { 
        $_SESSION['login'] = true; 
        $userData = getUserData($_POST['username']); 
        $_SESSION['level'] = $userData['level']; 
        $_SESSION['name'] = $userData['username']; 
        // $_SESSION['photo'] = $userData['image']; 
        $_SESSION['login'] = true; 
        header('Location: index.php'); 
         //if ($userData['level'] == 'admin') { 
        //   header('Location: index.php'); 
         //} 
 
        exit; 
    } 
} 
?>

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
                <h1>Login</h1>
                <hr>
                <p>Welcome Back!</p>
                <label for="">Username</label>
                <input type="text" placeholder="Username" name="username">
                <label for="">Password</label>
                <input type="password" placeholder="Password" name="password">
                <button type="submit" name="submit">Login</button>
                <p>
                    <a href="#" onclick="location.href='signup.php'">New here?</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="img/log.jpg" alt="">
        </div>
    </div>
</body>

</html>

