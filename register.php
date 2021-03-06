<!DOCTYPE html>
<html style="height: 100%;">
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="css/register.css"/>
</head>
<body style="background: #3e4144;height: 100%;justify-content: center;display: grid;align-content: center;">
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '$password', '$email', '$create_datetime')";
        


        $validation_username = "SELECT * FROM `users` WHERE username='$username'";
        $validation_username_result   = mysqli_query($con, $validation_username);

        $validation_email = "SELECT * FROM `users` WHERE email='$email'";
        $validation_email_result   = mysqli_query($con, $validation_email);

        if(mysqli_num_rows($validation_username_result)){
            echo "<div class='form'>
                  <h3>UserName exist</h3><br/>
                  <p class='link'>Click <a href='register.php'> here </a> to register</p>
                  </div>";
        }elseif(mysqli_num_rows($validation_email_result)){
            echo "<div class='form'>
            <h3>Email exist</h3><br/>
            <p class='link'>Click <a href='register.php'> here </a> to register</p>
            </div>";
        }else{

            $result   = mysqli_query($con, $query);
            if ($result) {
                echo "<div class='form'>
                      <h3>You are registered successfully.</h3><br/>
                      <p class='link'>Click <a href='home.php'> here </a> to go to the home page</p>
                      </div>";
            } else {
                echo "<div class='form'>
                      <h3>Required fields are missing.</h3><br/>
                      <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                      </div>";
            }
        }

    } else {
?>
    <form class="form" action="" method="post" style="margin: 50px auto;width: 300px;padding: 30px 25px;background: white;max-height: auto;">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="email" class="login-input" name="email" placeholder="Email Adress" required>
        <input type="password" class="login-input" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>