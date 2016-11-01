<!--
    Authors: Tamonne Cotodie 214078353
             Encore Tomson 214162966
             Luxolo Mpisane 213133040
  -->
<?php if(isset($_POST["InvAdd"]))
{
  require 'AdminHomePage.php';
  exit();
}
else if(isset($_POST["InvUpdate"]))
{
  require 'AdminMessages.php';
  exit();
}
else if(isset($_POST["InvShow"]))
{
  require 'AdminReports.php';
  exit();
}
?>

<!DOCTYPE html>


<html>
<head>
    <title>AAT Inventory</title>
    <link href="bower_components/angular/bootstrap/dist/css/bootstrap.min.css"rel="stylesheet" type="text/css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="/bower_components/angular/angular.js"></script>
     <script src="/bower_components/toastr/toastr.js"></script>
    <script src="bower_components/ng-intl-tel-input/dist/ng-intl-tel-input.js" type="text/javascript"></script>
     <link href="css/StyleTable.css" rel="stylesheet" type="text/css"/>
     <link href="css/StyleWebsite.css" rel="stylesheet" type="text/css"/>
     <link href="css/StyleGallary.css" rel="stylesheet" type="text/css"/>
     <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
     <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
     <link href="generic.css" rel="stylesheet" type="text/css" />
     <meta charset="utf-8">
</head>

<body>

    <div id= "wrapper">
        <div id= "top_nav">
        <div id="logt">
            <ul>
                <li><a href="LoginPage.html">Logout</a></li>
            </ul>
        </div>
        <div id="menu">
                <ul>
                    <li><a href="HomePage.html">Home</a></li>
                    <li><a href="ContactUs.php">Contact Us</a></li>
                    <li><a href="AboutUs.php">About Us</a></li>
                </ul>
        </div>
        </div>
        <div class="clear"></div>
      <div id= "banner">
	<div id="sliderFrame">
        <div id="slider">
            <a href="http://www.menucool.com/javascript-image-slider" target="_blank">
                <img src="Images/Banner/5.jpg" alt="Welcome to aatinkers.com" />
            </a>
            <img src="Images/Banner/1.jpg" alt=""/>
            <img src="Images/Banner/2.jpg" alt=""/>
            <img src="Images/Banner/3.jpg" alt=""/>
            <img src="Images/Banner/4.jpg" alt=""/>
        </div>
        <div id="htmlcaption" style="display: none;">
            <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
        </div>
        </div>

        </div>
        <div id= "side_nav">
        </div>
        <div class="clear"></div>
      <div class="card-body card-padding">
        <div id= "content">
            <form name="inventoryForm" action="<?php $_SERVER["PHP_SELF"] ?>" method="post">

			<!-- <div class="box-header"><br/>
				<h2>Enter Details</h2>
			</div><br/> -->
      <hr>
<div class="row col-sm-12" align="center">
  <button type="submit" class=" btn btn-primary btn-lg active" style="width:130px;" value="Submit" name="InvShow">View Reports</button>
  <span> </span><span> </span>  <span> </span><span> </span>
  <button type="submit" class=" btn btn-success btn-lg active" style="width:110px;"  value="Submit" name="InvAdd">Add</button>
  <span> </span><span> </span>
  <button type="submit" class=" btn btn-default btn-lg active" style="width:110px;" value="Submit" name="InvUpdate"> Messages</button>
  <span> </span><span> </span>
  <!-- <button type="submit" class=" btn btn-warning btn-lg active"  value="Submit" name="InvAdd">Delete</button>
  <span> </span><span> </span> -->
  <b>  <hr></b>


</div>
      <hr>

        <div id= "subContent">
<!-- product list -->
<?php
  require("connection.php");
	require("admProducts.php");
?>


<!-- products list end -->
</div>


             </form>
        </div></div>
        <div class="clear"></div>

        <div id="footer">
            <div class="connect">
                <div>
                    <h1>FOLLOW OUR MISSIONS ON</h1>
                    <div>
                        <a href="https://www.facebook.com/phinda.enko/" class="facebook">facebook</a>
			<a href="https://twitter.com/tamiie_07" class="twitter">twitter</a>
			<a href="https://plus.google.com/u/0/" class="googleplus">googleplus</a>
                    </div>
                </div>
            </div>
            <div class="footnote">
                <div>
                    <p>This site copyright © African Art Tinkers 2016. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
