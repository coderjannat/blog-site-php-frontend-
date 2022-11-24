<? 
require 'config/constants.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Site</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="css/style.css">
    <!-- ICONSCOUNT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>

<section class="form__section">
    <div class="container form__section-container">
      <h2>Sign up</h2>
      <div class="alert__message error">
        <p>This is an error message</p>
      </div>
      <form action="signup-logic.php" enctype="multipart/form-data" method="POST">
        <input type="text" name="firstname" placeholder="First Name">
        <input type="text" name="lastname" placeholder="Last Name">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="createpassword" placeholder="Create Password">
        <input type="password" name="confirmpassword" placeholder="Confirm Password">
        <div class="form__control">
            <label for="avatar"></label>
            <input type="file" name="avatar" id="avatar">
        </div>
        <button type="submit" name="submit" class="btn">Sign Up</button>
        <small>Already have an account? <a href="signin.php">Sign In</a></small>
      </form>

      
    </div>
</section>

<!-- JAVASCRIPT -->
<script src="./main.js"></script>
</body>

</html>