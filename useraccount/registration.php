<!DOCTYPE html>
<html>
<head>
    <title>User Registration | PHP</title>
</head>
<body>

<div>
    <form action="registration.php" method="post">
        <div class="container">
            <h1>Registration</h1>
            <p>Fill the form please</p>
            <label for="firstname"><b>First Name</b></label>
            <input type="text" name="firstname" required>

            <label for="lastname"><b>Last Name</b></label>
            <input type="text" name="lastname" required>

            <label for="email"><b>Email</b></label>
            <input type="text" name="email" required>

            <label for="phone"><b>Phone</b></label>
            <input type="text" name="phone" required>

            
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" required>


        </div>

    </form>
</div>
</body>
</html>