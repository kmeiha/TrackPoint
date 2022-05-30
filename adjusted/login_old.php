<!DOCTYPE html>
<html>
    <?php session_start(); ?>
    <head>
        <title>Login Page</title>
    <style>
html{
    height: 100%;
}
body {
    background: #3e4144;
    height: 100%;
    justify-content: center;
    display: grid;
    align-content: center;
}
.form {
    margin: 50px auto;
    width: 300px;
    padding: 30px 25px;
    background: white;
    max-height: 300px;
}
h1.login-title {
    color: #666;
    margin: 0px auto 25px;
    font-size: 25px;
    font-weight: 300;
    text-align: center;
}
.login-input {
    font-size: 15px;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 25px;
    height: 25px;
    width: calc(100% - 23px);
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
}
.login-button {
    color: #fff;
    background: #55a1ff;
    border: 0;
    outline: 0;
    width: 100%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
}
.link {
    color: #666;
    font-size: 15px;
    text-align: center;
    margin-bottom: 0px;
}
.link a {
    color: #666;
}
h3 {
    font-weight: normal;
    text-align: center;
}

        </style>
    </head>
    <body style="background: #3e4144;height: 100%;justify-content: center;display: grid;align-content: center;">
        <form 
            class="form"
            name="frmlogin"
            action="chklogin.php" 
            method="post"
            style="margin: 50px auto;width: 300px;padding: 30px 25px;background: white;max-height: auto;">
        <table>
            <tr>
                <th class="login-title">Login</th>
            </tr>
            <tr>
                <td><input type="text" id="username" class="login-input" name="username" placeholder="Username" autofocus="true"
                            value="<?php 
                                        if(isset($_SESSION['user'])){
                                            echo $_SESSION['user'];
                                        }?>"  /></td>
            </tr>
            <tr>
                <td><input type="password" class="login-input" name="password" placeholder="Password"/></td>
            </tr>
            <tr>
                <td><input type="submit" value="login" class="login-button"></td>
            </tr>
            <tr>
                <td><font color="red">
                    <?php
                    if(isset($_SESSION['msg'])){ 
                        echo $_SESSION['msg'];
                    unset($_SESSION['user']); 
                    unset($_SESSION['msg']);
                    }
                    ?></font>
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>