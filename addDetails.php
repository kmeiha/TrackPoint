<html>
<head>

<title>Add Details</title>
<link rel="stylesheet" href="style.css">
<?php
        include 'db.php';
        session_start();
        if(isset($_SESSION['username'])){
            $s = $_SESSION['username'];
            $sqlUser = "Select * from users where username = '$s'";
            $rsUser  = mysqli_query($con,$sqlUser);
            $rUser   = mysqli_fetch_assoc($rsUser);}
        else header('location:login.php')?>
</head>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<body>
    <!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #ddd;
      
    }
    
    .topnav {
      overflow: hidden;
      background-color: rgb(196, 127, 23);
    }
    
    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
    
    .topnav a.active {
      background-color: #04AA6D;
      color: white;
    }
     .Title{
         position: absolute;
         left: 40%;
         font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
     }
     .model{
         position: absolute;
         top: 30%;
         left: 24%;
         width: 50%;
         height: 5%;
         border: 3px solid rgb(196, 127, 23);
        padding: 1%;
        }
     
     .color{
         position: absolute;
         top: 40%;
         left: 24%;
         width: 50%;
         height: 5%;
         border: 3px solid rgb(196, 127, 23);
         padding: 1%;
        }
     
     .origin{
         position: absolute;
         top: 50%;
         left: 24%;
         width: 50%;
         height: 5%;
         border: 3px solid rgb(196, 127, 23);
         padding: 1%;
        }
     
     .createdDate{
         position: absolute;
         top: 60%;
         left: 24%;
         width: 50%;
         height: 5%;
         border: 3px solid rgb(196, 127, 23);
         padding: 1%;
        }
        .addDetailsButton{
            position:absolute;
            top: 75%;
            left: 29%;
            width: 40%;
            height: 5%;
            background-color: rgb(196, 127, 23);
            color: white;
            border: 0;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>
    </head>
    <body>
    
    <div class="topnav">
      <a  href="home.php">Home</a>
      <a href="news.php">News</a>
      <a href="contact.html">Contact</a>
    </div>
<!-- color,model, origin, date -->

    <h1 class="Title">Add details</h1>

    <input type="input" id="model" placeholder="Model...." class="model"/>
    <input type="input" id="color" placeholder="Color...." class="color"/>
    <input type="input" id="origin" placeholder="Origin...." class="origin"/>
    <input type="input" id="createdDate" placeholder="Created Date...." class="createdDate"/>

    <button class="addDetailsButton" onclick="addDetails()">Add Details</button>


    </body>
</html>
<script>
    const id = localStorage.getItem("pickedId");

    function addDetails(){
       const model = document.getElementById('model').value;
       const color = document.getElementById('color').value;
       const origin = document.getElementById('origin').value;
       const createdDate = document.getElementById('createdDate').value;
 
      const details = {'id': id, 'model': model, 'color': color, 'origin': origin, 'createdDate': createdDate};

       let globalDetails = localStorage.getItem('globalDetails');
       if ( globalDetails == "null" )
        {
         localStorage.setItem('globalDetails',JSON.stringify(details));
        } else{
          const globalDetailsArray = globalDetails + "," + JSON.stringify(details); 
          localStorage.setItem('globalDetails', globalDetailsArray);
       }
      console.log(localStorage.getItem('globalDetails'));
       
    }


</script>