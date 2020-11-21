<?php session_start(); ?>
<!---
Jay
-->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  
  <!--- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
  <link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Drift | Admin-Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  
  <!--Fonts and icons-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!--CSS Files-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
  <link href="assest/css/admin2.css" rel="stylesheet">
  <link href="assest/css/materialcolor.css" rel="stylesheet">
  
  
</head>
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

#area-chart{
min-height: 300px;
}
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: linear-gradient(to top left, #00ffff 0%, #ff6666 100%);
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
  width: 100%;
  border-radius: 12px;

  
}

.sidebar a:hover:not(.active) {
  background-color: black;
  color: white;
  width: 100%;
  border-radius: 12px;
  
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
<body style="background-color:#d7dbde">

<div class="sidebar max-width auto" style="color:#000;background-color:#bdc3c7">
	<center>
  <h3>Hello, <?php echo $_SESSION["firstname"]; ?></h3>
  <a class="active" href="admindash.html" ><i class="fa fa-dashboard"></i>&nbsp;&nbsp;Home</a>
  <a href="adminartnw.html"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Article & News</a>
  <a href="adminprdlist.html"><i class="fa fa-list-ul"></i>&nbsp;&nbsp;Product List</a>
  <a href="adminorder.html"><i class='fas fa-pencil-alt'></i>&nbsp;&nbsp;Order Stock</a>
  <a href="adminprofile.php"><i class='fas fa-user-circle'></i>&nbsp;&nbsp;User Profile</a>
  <a href="assets/php/logout.php"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;Logout</a>
  </center>
</div>
<div class="content">

  <div class="row">
  <div style="float: left; width: 100%; padding: 10px; background-color:#E8EAF6;height:100%;">
    <h2>1 Year of Business Income</h2>
    <p>(Graph) </p>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<div id="chart_div" ></div>
	<script>
	google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawCurveTypes);

function drawCurveTypes() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'No Of Sales');
	  data.addColumn('number', 'Revenue');
      

      data.addRows([
        [1, 200, 1290],   [2, 178, 1180],  [3, 276, 1628],   [4, 187, 1073],  [5, 99, 765],
        [6, 76, 540],   [7, 342, 4378],  [8, 300, 3987],  [9, 302, 4012],  [10, 297, 3887], [11, 310, 4002],
        [12, 400, 6542]
      ]);

      var options = {
        hAxis: {
          title: 'Month'
        },
        vAxis: {
          title: ''
        },
        series: {
          1: {curveType: 'function'}
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
	</script>
	<script src="assest/js/chart.js"></script>
	
  </div>
  </div>
<div class="row">
  <div class="column" style="float: left; width: 33.3%; padding: 10px; background-color:#C5CAE9;">
    <h2>Number Of Sales</h2>
    <p style="opacity:0.5">Today</p>
    <center><br>
    <h1>35</h1><br><br>
    </center>
  </div>
  <div class="column" style="float: left; width: 33.3%; padding: 10px; background-color:#9FA8DA;">
    <h2>Total Revenue Of The Day</h2>
    <p style="opacity:0.5"> </p>
    <center><br><br>
    <h1>RM 1249</h1>
    </center>
  </div>
  <div class="column" style="float: left; width: 33.3%; padding: 10px; background-color:#7986CB;">
    <h2>Total Revenue Of The Week</h2>
    <p style="opacity:0.5"> </p>
    <center><br><br>
    <h1>RM 12008</h1>
    </center>
  </div>
</div>
</div>

</body>
</html>
