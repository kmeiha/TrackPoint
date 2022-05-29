<?php 
session_start();
include 'connection.php';

$user = $_POST['user'];
$pass = $_POST['pass'];

$_SESSION['user'] =$user;

if(empty($user)){
    $_SESSION['msg']='Enter username';}
    else
        if(empty($pass)){
            $_SESSION['msg']='Enter passward';
        }
        else{
            $sqlUser = "select * from users where username = '$user'";
            $rsUser   = mysqli_query($con,$sqlUser);
            
            if(mysqli_num_rows($rsUser) <=0){        //raja3le data
                    $_SESSION['msg'] = 'Invalid Username or Password';
            }
            else {
                $r = mysqli_fetch_assoc($rsUser);
                if($r['Password'] != $pass){
                    $_SESSION['msg'] = 'Incorrect Username or Password';
                }
                else{
                    $_SESSION['loggedUser']=$r['UserID'];   //la no7ofiz fiha la ba3den ka id
                    header('location:home.php');
                    die(); //kermel tnen header
                }
            }
        }
header('location:login.php');




?>