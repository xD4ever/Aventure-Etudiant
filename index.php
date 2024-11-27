<?php
session_start();
if(isset($_SESSION['errors'])){
    $errors=$_SESSION['errors']
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    
</head>
<body>
    <div class="container">
        <h1 class="from-title">
            Sign In
        </h1>
        
        <?php
        if (isset($errors['login'])) {
            echo '<div class="error-main">';
            echo '<p>'. $errors['login'] . '</p>''</div>';
        }
        ?>
        
        <form method="POST" action="user.account.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" required placeholder="Email" >
                
                
                <?php
                if (isset($errors['email'])) {
                    echo '<div class="error">';
                    '<p>'. $errors['email'] . '</p>''</div>';
                }
                ?>

            </div> 
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <i class="fas fa-eye" id="eye"></i>

                <?php
                if (isset($errors['password'])) {
                    echo '<div class="error">';
                    '<p>'. $errors['password'] . '</p>''</div>';
                }
                ?>

            </div>
            <p class="recover"> 
                <a href="#">Recover password</a> 
            </p>
            <input type="submit" class="btn" value="Sign In" name="signin">
        </form>
        <p class="or">
            --------or--------          
        </P>
        <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-github"></i>
        </div>
        <div class="links">
            <p>Don't have an account?</p>
            <a href="register.php">Sing up</a>
        </div>
    </div>
    <script src="scipt.js"></script>
</body>
</html>

<?php

if(isset($_SESSION['errors'])){
    unset($_SESSION['errors']);
}
?>
