<html>
<head>

<title>View Details</title>
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
        .TableDet{
            position:absolute;
            top: 40%;
            left: 20%;
            background-color:rgb(139, 139, 139);
        }
        .TableTitles{
            background-color: rgb(196, 127, 23);
            color: white;
            font-size: large;
            font-weight: 600;
        }
        .tableBorder{
            border: #04AA6D solid 1px;
            height: 20vh;
            width: 50vw;
            color: white;

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

    <h1 class="Title">View details</h1>

    <div id="Table" class="TableDet">

    </div>

    </body>
</html>
<script>
    const id = localStorage.getItem("pickedId");
    const AllDetails = localStorage.getItem('globalDetails');
    const AllDetailsArray = AllDetails.split("}")

    const DetailById = AllDetailsArray[id].split("{");
    const model = DetailById[1].substring(DetailById[1].indexOf('"model":"')+9,DetailById[1].lastIndexOf('","color"'));

    const color = DetailById[1].substring(DetailById[1].indexOf('"color":"')+9,DetailById[1].lastIndexOf('","origin"'));

    const origin = DetailById[1].substring(DetailById[1].indexOf('"origin":"')+10,DetailById[1].lastIndexOf('","createdDate"'));

    const createdDate = DetailById[1].substring(DetailById[1].indexOf('"createdDate":"')+15,DetailById[1].lastIndexOf('"'));

    function table(){
        var mytable = "<table class='tableBorder'><tr class='TableTitles'><td style='text-align: center'>ID</td> <td style='text-align: center'>Model</td><td style='text-align: center'>Color</td><td style='text-align: center'>Origin</td><td style='text-align: center'>Created Date</td></tr><tr><td style='text-align: center'>"+id+"</td> <td style='text-align: center'>"+model+"</td><td style='text-align: center'>"+color+"</td><td style='text-align: center'>"+origin+"</td><td style='text-align: center'>"+createdDate+"</td></tr></table>"
        document.getElementById("Table").innerHTML = mytable;
    }    
    table();

</script>