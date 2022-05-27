<html>
<head>

<title>CSS Position</title>
<link rel="stylesheet" href="style.css">

</head>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<body>
    <!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<style>
  .titleItem{
    position: absolute;
    top: 100%;
    left: 41%;
    z-index: 1;
    font-size: 100%;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
  .itemsList{
    position:absolute;
    top: 110%;
    left: 70%;
    font-size: 100%;
    color: #000000;
    z-index: 1;
  }
  .itemButton{
    position:absolute;
    top: 20%;
    left: 17%;
    z-index: 2;
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
      width: 40%;
      position:absolute;
      top: 20%;
      left: 10%;
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
      margin-left: 30%;
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
      font-weight: 900;
      font-size: 7vh;
      position: absolute;
      left: 40%;
    }
    .tablePosition{
      position:absolute;
      top: 50%;
    }
    .topnav {
      overflow: hidden;
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
      font-weight: 900;
      font-size: 4vh;
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
      background-image: url(./images/Asset-Inventory-Management-Software.png);
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
      <a href="logout.php" style="float: right;">Logout</a>
    </div>
    <div class="imageBackgMain">
      <h1 class="SystemIn">What New</h1>
      <button class="getStarted">Get Started</button>
    </div>

    <div>
      <div class="dribbleBox">
        <i class="fa fa-dribbble iconAt" style="font-size:48px;color:rgb(22, 78, 22)"></i>
        <h2 class="titleBoxes">Information</h2>
        <p class="textBoxes">Whether you sell online, on social media, in store, or out of the trunk of your car, Shopify has you covered. Start selling anywhere for just $29/month.</p>
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
      <h6 class="titleItem">Enter your Items:</h6>
    
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