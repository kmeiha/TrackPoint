<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
    <?php
        include 'connection.php';
        session_start();
        if(isset($_SESSION['loggedUser'])){
            $s = $_SESSION['loggedUser'];
            $sqlUser = "Select * from users where UserID = '$s'";
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
<link href="mystyle.css?t=<?php echo time()?>" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

  .threeBoxs{
  display: none;
  }

  .homeTable{
    position: absolute;
    top: 50%;
    left:20%;
    width: 60%;
    z-index: 1;
  }

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: rgb(255, 255, 255);
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
  .transCoordsStyle{
    background-color: #04AA6D;
    z-index: 1;
  }
  .transferPosition{
    position:absolute;
    top: 10%;
    left: 2%;
    width: 50%;
    height: 80%;
  }
  
  .pickPosition{
    position:absolute;
    top: 10%;
    left: 2%;
    width: 50%;
    height: 80%;
  }
  .receivePosition{
    position:absolute;
    top: 10%;
    left: 2%;
    width: 50%;
    height: 80%;
  }

  .inputTextPage{
    width: 100%;
    height: 100%;
    background-color: #04AA6D;
  }
  .thirdTitle{
    color: rgb(84, 95, 19);
    font-weight: 900;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 7vh;
    position: absolute;
    top: 105%;
    left: 20%;
    z-index: 2;
    opacity: 1;
    width: 50%;

  }
  .thirdText{
    color: rgb(38, 71, 102);
    font-weight: 900;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 5vh;
    position: absolute;
    top: 105%;
    left: 40%;
    z-index: 2;
    opacity: 1;
    height: 70%;
    width: 50%;
  }
  .ulDarkness1{
    color: rgb(135, 143, 32);
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 3.5vh;
    position:absolute;
    left:57%;
    top: 55%;
  }
  .ulDarkness2{
    color: rgb(135, 143, 32);
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 3.5vh;
    position:absolute;
    left:57%;
    top: 65%;
  }
  .ulDarkness3{
    color: rgb(135, 143, 32);
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 3.5vh;
    position:absolute;
    left:57%;
    top: 75%;

  }
    .moveInvText{
      color: white;
      position: absolute;
      left: 55%;
      top: 30%;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .moveInvTitle{
      color: white;
      position: absolute;
      left: 55%;
      top: 10%;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .imageMoveInventory{
      width: 30%;
      position:absolute;
      top: 50%;
      left: 65%;
    }
    .moveInventory{
      height: 100%;
      position:absolute;
      top: 100%;
    }
    .textBoxes{
      height:100%;
      width: 90%;
      margin-left: 5%;
      font-size: 2.5vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-weight: 400;
      color:gray;
    }
    .titleBoxes{
      margin-left: 5%;
      font-size: 2.4vh;
    }
    .iconAt{
      margin-left: 40%;
      margin-top: 5%;
    }
  .dolorBox{
    position:absolute;
    top: 50%;
    left: 10%;
    font-size: small;
    width: 20%;
    background-color:white;
    border-style:groove;
    border-color: rgb(22, 78, 22);
    border-radius: 5%;
    height: 40%;
  }
  .dribbleBox{
    position:absolute;
    top: 50%;
    left: 37%;
    font-size: small;
    width: 20%;
    border-style:groove;
    border-color: rgb(22, 78, 22);
    border-radius: 5%;
    background-color:white;
    height: 40%;
  }
  .instaBox{
    position:absolute;
    top: 50%;
    left: 65%;
    font-size: small;
    width: 20%;
    border-style:groove;
    border-color: rgb(22, 78, 22);
    border-radius: 5%;
    background-color:white;
    height: 40%;

  }
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #ddd;
      
    }
    .SystemIn{
      font-family: 'Courier New', Courier, monospace;
      color: #333;
      position: absolute;
      left: 29%;
    }
    .tablePosition{
      position:absolute;
      top: 50%;
    }
    .topnav {
     overflow:hidden;
      background-color: #333;
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
        table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
    .descriptionIn{
      font-family: 'Courier New', Courier, monospace;
      color: #333;
      position: absolute;
      left: 15%;
      top: 20%;  
    }
    .getStarted{
      color: white;
      padding: 1%;
      border-radius: 10%;
      background-color: #3b3838;
      position:absolute;
      top: 35%;
      left: 42%;
      border-color: #000000;
      font-family: 'Courier New', Courier, monospace;
    }
    .imageBackgMain{
      background-image: url(./images/61cf04ea45898934315251e5_Inventory-management-system-objectives.png);
      height: 100vh;
    }
    .thirdPageBackground{
      background-image: url(./images/inventorynew4.jpg);
      height: 80vh;
      background-repeat: no-repeat;
      width: 100%;    
      position: absolute;
      top: 100%;
      background-color: rgb(62, 104, 160);
      opacity: 0.2;
    }
    </style>
    </head>
    <body>
    
    <div class="topnav">
      <a  href="home.html">Home</a>
      <a href="news.html">News</a>
      <a href="contact.html">Contact</a>
    </div>

    <div class="imageBackgMain">
      <h1 class="SystemIn">Track Point</h1>
      <p class="descriptionIn">Try Track Point free for 14 days, and explore all the features you need to start a business fast.</p>
      <button class="getStarted" onclick="getStarted()">Get Started</button>
    </div>

    <div id="threeBoxs">
      <div class="dolorBox">
        <i class="fa fa-dollar iconAt"  style="font-size:48px;color:rgb(22, 78, 22)"></i>
        <h2 class="titleBoxes">Pricing as low as $29/month</h2>
        <p class="textBoxes">TO DO.</p>
      </div>
      <div class="dribbleBox">
        <i class="fa fa-dribbble iconAt" style="font-size:48px;color:rgb(22, 78, 22)"></i>
        <h2 class="titleBoxes">Drag-and-drop website builder</h2>
        <p class="textBoxes">Whether you sell online, on social media, in store, or out of the trunk of your car, Shopify has you covered. Start selling anywhere for just $29/month.</p>
      </div>
      <div class="instaBox">
        <i class="fa fa-instagram iconAt" style="font-size:48px;color:rgb(22, 78, 22)"></i>
        <h2 class="titleBoxes">Trusted by millions of businesses</h2>
        <p class="textBoxes">Shopify handles everything from marketing and payments, to secure checkout and shipping</p>
      </div>
    </div>
    <div class="homeTable" id="Table">
    </div>

    <div class="moveInventory" style="background-color: #333;width: 100%;">
      <img src="./images/Barcode-Tracking-System-Getting-Started.jpg" class="imageMoveInventory" usemap="#workmap">
      <map name="workmap">
        <area shape="rect" coords="225,20,275,65" alt="Computer" href="javascript:transferButton()">
      
        <area shape="rect" coords="225,85,275,140" alt="Computer" href="javascript:pickButton()">
        
        <area shape="rect" coords="225,155,275,210" alt="Computer" href="javascript:receiveButton()">
        
      </map>

      <h1 class="moveInvTitle">Move inventory faster with a barcode system</h1>
      <p class="moveInvText">Barcodes aren’t just for big box stores,<br>and you don’t need expensive equipment to start using them.<br>Leave your paper pick list behind and use a smartphone or inFlow Smart Scanner to:</p>
      <ul>
        <li class="ulDarkness1">Transfer</li>
        <li class="ulDarkness2">Pick</li>
        <li class="ulDarkness3">Receive</li>
      </ul>
        <div id="websiteBox">
        </div>
      <h1 class="thirdTitle">
        Our Goal
      </h1>
      <p class="thirdText">
        We needed the ability to run a small number of inventory items outside of our current ERP.<br> However, we quickly realized how much better and easy to work in inFlow was, so we’ve been migrating over for the past year.<br> It’s a great powerful tool and I highly recommend it!
      </p>
    <div class="thirdPageBackground">
    </div>
    </div>
  </body>
    </html>

    <script>
      
      const items = localStorage.getItem("items");

    function getStarted(){
      document.querySelector('#threeBoxs').classList.add('threeBoxs')

      
      var mytable = "<table><tr> <td>Id</td> <td>Item Name</td> <td>Item Salary</td>";

         const tableItems = JSON.parse(items);

        for (var item of tableItems) {  mytable += "</tr> <tr><td>" + item.id + "</td>" +" <td>" + item.name + "</td>" + "<td>" + item.salary + "</td><td><a href='./addDetails.html' onclick='javascript:pickedId("+ item.id +");'>Add details</a></td><td><a href='./viewDetails.html' onclick='javascript:pickedId("+ item.id +");'>View details</a></td>"; }
        mytable += "</tr></table>";
        document.getElementById("Table").innerHTML = mytable;
    }

    function pickedId(id){
      localStorage.setItem("pickedId", id)
    }
     function transferButton(){
    
          var ifram = "<iframe width='20%'' height='50%' id='transferPosition' class='transferPosition'  frameborder='no' allow='autoplay' src='https://www.wsj.com/market-data/quotes/index/DXY/historical-prices'></iframe>";
          document.getElementById("websiteBox").innerHTML = ifram;
     }

     function pickButton(){
    
    var ifram = "<iframe width='20%'' height='50%' id='transferPosition' class='transferPosition'  frameborder='no' allow='autoplay' src='https://www.xe.com/currencyconverter/convert/?Amount=1&From=USD&To=EUR'></iframe>";
    document.getElementById("websiteBox").innerHTML = ifram;
    }
    function receiveButton(){    
        var ifram = "<iframe width='20%'' height='50%' id='transferPosition' class='transferPosition'  frameborder='no' allow='autoplay' src='https://wise.com/gb/currency-converter/usd-to-eur-rate'></iframe>";
        document.getElementById("websiteBox").innerHTML = ifram;
    }

    

</script>    
</body>

</html>