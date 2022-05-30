<html>
<head>

<title>News</title>
<link rel="stylesheet" href="css/news.css">
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    </head>
    <body>
    
    <div class="topnav">
      <a  href="home.php">Home</a>
      <a href="news.php">News</a>
      <a href="contact.html">Contact</a>
      <a ><font color="green">Logged:<?php echo $_SESSION['username'] ?></font></a>
      <a href="logout.php" style="float: right;"><font color="red">Logout</font></a>
    </div>
    <div class="imageBackgMain">
      <h1 class="SystemIn">What New</h1>
      <button><a class="getStarted" href="#nice" style="scroll-behavior: smooth;" >Get Started</a></button>
    </div>

    <div>
      <div class="dribbleBox">
        <i class="fa fa-dribbble iconAt" style="font-size:48px;color:rgb(22, 78, 22)"></i>
        <h2 class="titleBoxes">Information</h2>
        <p class="textBoxes">Whether you sell online, on social media, in store, or out of the trunk of your car, Track Point has you covered. Start selling anywhere for just $29/5 users.</p>
      </div>
    </div>
    <div class="moveInventory" style="background-color: #333;width: 100%;">
      <img src="./images/Barcode-Tracking-System-Getting-Started.jpg" class="imageMoveInventory">
      <h1 class="moveInvTitle">Move inventory faster with a barcode system</h1>
      <p class="moveInvText">Barcodes aren’t just for big box stores,<br>and you don’t need expensive equipment to start using them.<br>Leave your paper pick list behind and use a smartphone or inFlow Smart Scanner to:</p>
      <ul>
        <li class="ulDarkness1">Transfer</li>
        <li class="ulDarkness2">Pick</li>
        <li class="ulDarkness3">Receive</li>
      </ul>
      <h1 class="thirdTitle">
        ITEMS
      </h1>
      <h6 class="titleItem" id="nice">Enter your Items:</h6>
    
      <p class="thirdText">
        <input type="input" id="itemName" style="color:rgb(0, 0, 0);  background-color: white;border: 0px;width: 250px;height: 50px;border-radius: 50px;padding: 0 25px;">
        <input type="input" id="itemSalary" style="color:rgb(0, 0, 0);  background-color: white;border: 0px;width: 250px;height: 50px;border-radius: 50px;padding: 0 25px;">
        <span id="validate" style="display: none; color: red;font-size: 15px;margin-top: 5px;">please fill all fields</span>
        <button class="itemButton" onclick="myFunction()" style="color: rgb(119, 121, 18); background-color: #FFF; border-radius: 50px;padding: 13px 25px;width: 150px;border: 0px;cursor: pointer;">
          <span style="font-size: 19px;font-weight: 600;">Add Item</span>
        </button>

        <div id="itemsTable" class="itemsList">
          <table id=table_items>
            <tr>
              <td>Name</td>
              <td>Salary</td>
            </tr>
          </table>
        </div>
      </p>
    <div class="thirdPageBackground">
    </div>
    </div>
    </body>
    </html>
    
<script>
  window.onload = function() {
    getTableData();
  };
  
  function getTableData() {
      $.ajax({
        type: "GET",
        url: 'getitems.php',
        dataType: 'JSON',
        success: function(response) {
          var len = response.length;
          for(var i=0; i<len; i++){
            var name = response[i].name;
            var salary = response[i].salary;

            var table = document.getElementById("table_items");
            var row = table.insertRow();
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            cell1.innerHTML = name;
            cell2.innerHTML = salary;
          }
        }
      });
  }
  const items = [];
  function myFunction() {
    var item_name = document.getElementById('itemName').value;
    var item_salary = document.getElementById('itemSalary').value;
    var url = 'updateitems.php'
    if(item_name && item_salary){    
     $('#validate').css({"display":"none"});
      $.ajax({
        type: "POST",
        url: 'updateitems.php', 
        data: {
            item_name: item_name,
            item_salary: item_salary
          },
        success: function(response) {
          console.log('response ' + response);
        }
      });
      var table = document.getElementById("table_items");
      var row = table.insertRow();
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      cell1.innerHTML = item_name;
      cell2.innerHTML = item_salary;
    }else{
      $('#validate').css({"display":"block"});
    }
    

       

 }
 </script>
</body>
</html>