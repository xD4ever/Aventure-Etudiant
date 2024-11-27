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
    <title>regiter page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

</head>
<body>
    <div class="container">
        <h1 class="form-title">Register</h1>
        <?php
          if(isset($errors['user_exist'])){
            echo '<div class="error-main"> <p>' .$errors['user_exist'].'</p> </div>';
        }
        ?>
            <form method="POST" action="user.account.php">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="First name" id="First name" placeholder="First name" required>
                    <?php
                      if(isset($errors['Firstname'])){
                        echo'<div class="error"> <p>'. $errors['Firstname'].'</p></div>';
                    }
                    ?>
                </div>
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="Last name" id="Last name" placeholder="Last name" required>
                    <?php
                      if(isset($errors['Lastname'])){
                        echo'<div class="error"> <p>'. $errors['Lastname'].'</p></div>';
                    }
                    ?>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="email" required>
                    <?php
                      if(isset($errors['email'])){
                        echo'<div class="error"> <p>'. $errors['email'].'</p></div>';
                    }
                    ?>
                </div>
                <div class="input-group password">
                   <i class="fas fa-lock"></i>
                   <input type="password" name="password" id="password" placeholder="password" required>
                   <i id="eye" class="fas fa-eye"></i>
                   <?php
                      if(isset($errors['password'])){
                        echo'<div class="error"> <p>'. $errors['password'].'</p></div>';
                    }
                    ?>
                </div>

                <div class="input-group">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="confirm_password" id="password" placeholder=" confirm password" required>
                  <?php
                      if(isset($errors['confirm_password'])){
                        echo'<div class="error"> <p>'. $errors['confirm_password'].'</p></div>';
                    }
                    ?>
                </div>
                <input type="submit" class="btn" value="Sign Un" name="sigup">
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
                <p>
                   Already have an account?
                </p>
                <a href="index.php">Sing In</a>
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
