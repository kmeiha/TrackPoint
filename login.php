<!DOCTYPE html>
<html style="height: 100%;">
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css"/>
</head>
<body style="background: #3e4144;height: 100%;justify-content: center;display: grid;align-content: center;">
<?php
    //require('db.php');
    include 'db.php';
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password' ";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to home page
            header("Location: home.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username or password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login" style="margin: 50px auto;width: 300px;padding: 30px 25px;background: white;max-height: auto;">
        <h1 class="login-title">Login</h1>
        <input type="text" id="username" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">You don't have an account? <a href="register.php">Register here</a></p>
  </form>
<?php
    }
?>
<script>
    var username = document.getElementById('username').value;
    window.localStorage.setItem('name', username);
</script>

</body>
</html>