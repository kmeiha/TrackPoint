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
    <link rel="stylesheet" href="css/viewDetails.css">
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