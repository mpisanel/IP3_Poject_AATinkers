<!--
    Authors: Tamonne Cotodie 214078353
             Encore Tomson 214162966
             Luxolo Mpisane 213133040
  -->
<?php
include_once 'connection.php';
include_once 'Customer.php';
if(class_exists("Customer"))
    {
        $sqlReadCust = new Customer();
    }
?>

<html>
<head>
    <title>Admin Page</title>
        <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/StyleWebsite.css" rel="stylesheet" type="text/css"/>
        <link href="css/telInput.css" rel="stylesheet" type="text/css"/>
        <link href="css/StyleRegister.css" rel="stylesheet" type="text/css"/>
      	<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
        <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
        <link href="generic.css" rel="stylesheet" type="text/css" />
        <link href="bower_components/angular/bootstrap/dist/css/bootstrap.min.css"rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="/bower_components/angular/angular.js"></script>
        <script src="/bower_components/toastr/toastr.js"></script>
       <script src="bower_components/ng-intl-tel-input/dist/ng-intl-tel-input.js" type="text/javascript"></script>
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
        <div id= "content">
            <div class="login-box">
            <form method="get" action="AdminHome.php">
                <?php //$sqlReadCust->customerReport()?>
            <div class="box-header"><br/>
			<h2><label>Product Details</label></h2>
			</div><br/>

                    <div class="row">
                       <div class="col-sm-6">
                      <label class="col-sm-3 control-label">
                        Product  Name
                       </label>
                       <div class="col-sm-8">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                          <span class="input-group-addon">
                      <span class="glyphicon glyphicon-user"></span></span>
                          </span>
                        <input class="form-control" type="text" name="nam" required="true"/>
                        </div>
                        </div></div></div>

                         <div class="col-sm-6">
                        <label class="col-sm-3 control-label">
                        Description
                         </label>
                         <div class="col-sm-8">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                           <span class="glyphicon glyphicon-user"></span></span>
                            </span>
                            <input class="form-control" type="text" name="desc" required="true"/>
                            </div>
                        </div></div></div>
                      </div><br/>

                        <div class="row" >
                           <div class="col-sm-6">
                          <label class="col-sm-3 control-label">
                        Price
                       </label>
                       <div class="col-sm-8">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                          <span class="input-group-addon">
                         <span class="glyphicon glyphicon-menu-hamburger"></span></span>
                          </span>
                         <input class="form-control" type="text" name="pri" required="true" />
                        </div>
                        </div> </div></div>

                          <div class="col-sm-6">
                        <label class="col-sm-3 control-label">
                        Image
                       </label>
                       <div class="col-sm-8">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                          <span class="input-group-addon">
                          <span class="glyphicon glyphicon-phone"></span>
                          </span>
                          <input class="form-control" type="text" name="ima"required="true">
                        </div>

                      </div></div></div></div><br/>
                      
                      <div class="modal-footer">
                        <button type="submit" class=" btn btn-default" value="Submit" name="btnSubmit">Submit</button>
		                    <span> </span><span> </span>
                        <!--<button  class=" btn btn-default" width="15px" value="Back" name="btnBack">Back</button>-->
                        
                       <span> </span><span> </span>
                       <a class="btn btn-default btn-lg" role="button" name="btnBack" href="inventory.php" value="Back">Back</a>
                    </div> 
                        <!--<button type="submit" value="Submit" name="btnSubmit">Submit</button>
			<br/><br/>
                        <!--<button type="submit" value="Back" name="btnBack">Back</button>
                       <a class="btn btn-default btn-lg" role="button" name="btnRep" href="AdminReports.php" value="Back">View Reports</a>
                      <!-- <button type="submit" value="ViewRepo" name="btnRep">View Reports</button>
                       <br/><br/>
                        <a class="btn btn-default btn-lg" role="button" name="btnBack" href="HomePage.html" value="Back">Back</a>-->
            </form>    
        </div>
        </div>
             </form>
        
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
    </div>
    </body>
</html>
