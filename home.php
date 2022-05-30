<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
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
    <link href="mystyle.css?t=<?php echo time()?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">  
    </head>
    <body>
    
    <div class="topnav">
      <a href="home.php">Home</a>
      <a href="news.php">News</a>
      <a href="contact.html">Contact</a>
      <a ><font color="green">Logged:<?php echo $_SESSION['username'] ?></font></a>
      <a href="logout.php" style="float: right;"><font color="red">Logout</font></a>
      
    </div>

    <div class="imageBackgMain">
      <h1 class="SystemIn">Track Point</h1>
      <p class="descriptionIn">Try Track Point free for 14 days, and explore all the features you need to start a business fast.</p>
      <button class="getStarted" onclick="getStarted()">Get Started</button>
    </div>

    <div id="threeBoxs">
      <div class="dolorBox">
        <i class="fa fa-dollar iconAt"  style="font-size:48px;color:rgb(22, 78, 22)"></i>
        <h2 class="titleBoxes">Pricing as low as $29/5 users</h2>
        <p class="textBoxes">Work becomes a lot more visible when it’s all in one place. It makes collaboration a whole lot easier. .</p>
      </div>
      <div class="dribbleBox">
        <i class="fa fa-dribbble iconAt" style="font-size:48px;color:rgb(22, 78, 22)"></i>
        <h2 class="titleBoxes">Track Point</h2>
        <p class="textBoxes">Whether you sell online, on social media, in store, or out of the trunk of your car, Track Point has you covered. Start selling anywhere for just $29/5 users.</p>
      </div>
      <div class="instaBox">
        <i class="fa fa-instagram iconAt" style="font-size:48px;color:rgb(22, 78, 22)"></i>
        <h2 class="titleBoxes">Trusted by millions of businesses</h2>
        <p class="textBoxes">Track Point handles everything from marketing and payments, to secure checkout and shipping</p>
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

        for (var item of tableItems) {  mytable += "</tr> <tr><td>" + item.id + "</td>" +" <td>" + item.name + "</td>" + "<td>" + item.salary + "</td><td><a href='./addDetails.php' onclick='javascript:pickedId("+ item.id +");'>Add details</a></td><td><a href='./viewDetails.php' onclick='javascript:pickedId("+ item.id +");'>View details</a></td>"; }
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