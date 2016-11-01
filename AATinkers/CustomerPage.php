<!--
    Authors: Tamonne Cotodie 214078353
             Encore Tomson 214162966
             Luxolo Mpisane 213133040
  -->
<?php
    include_once "connection.php";
    include_once "Customer.php";
    $name = "";
    $surname = "";
    $address = "";
    $email = "";
    $password = "";
    $bank = "";
    $card_no = "";
    if(isset($_POST["btnSubmit"]))
    {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $phoneNo = $_POST["phone"];
        $password = $_POST["password1"];
        $bank = $_POST["bank"];
        $card_no = $_POST["cardNo"];
       
            if((class_exists("Customer")))
            {
                $custObject = new Customer();
            }
          
            $custObject->setName($name);
            $custObject->setSurname($surname);
            $custObject->setAddress($address);
            $custObject->setEmail($email);
            $custObject->setPhoneNo($phoneNo);
            $custObject->setPassword($password);
            $custObject->setBank($bank);
            $custObject->setCurdNo($card_no);
            
           
                try{
                    $custObject->registerCust($custObject->getName(),$custObject->getSurname(), 
                            $custObject->getAddress(), $custObject->getEmail(), $custObject->getPhoneNo(),
                            $custObject->getPassword(), $custObject->getBank(), $custObject->getCardNo());
                }catch (Exception $e)
                {
                    $e->getMessage();
                }
    }
    
?>


<html>
<head>
    <title>New Customer</title>
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
        <div id="log">
            <ul>
                    <li><a href="LoginPage.html">Login</a></li>
                    <li><a href="CustomerPage.php">Register</a></li>
            </ul>
        </div>
        <div id="tfheader">
		<form method="get" action="http://www.google.com">
		        <input type="text" class="tftextinput" name="q" size="21" maxlength="120">
            <input type="submit" value="search" class="tfbutton">
		</form>
                </div>

        <div id="menu">
                <ul>
                    <li><a href="HomePage.html">Home</a></li>
                    <li><a href="ContactUs.php">Contact Us</a></li>
                    <li><a href="AboutUs.php">About Us</a></li>
                    <li> <a href="TermsAndConditions.php"> T&C's</a></li>
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
            <form name="registerForm" action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
            <div class="login-box">
			<div class="box-header"><br/>
				<h2>Enter Details</h2>
			</div><br/>
                    <div class="row">
                       <div class="col-sm-6">
                      <label class="col-sm-3 control-label">
                          Name
                       </label>
                       <div class="col-sm-8">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                          <span class="input-group-addon">
                      <span class="glyphicon glyphicon-user"></span></span>
                          </span>
                        <input class="form-control" type="text" name="name" required="true"/>
                        </div>
                        </div></div></div>

                         <div class="col-sm-6">
                        <label class="col-sm-3 control-label">
                          Surname
                         </label>
                         <div class="col-sm-8">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                           <span class="glyphicon glyphicon-user"></span></span>
                            </span>
                            <input class="form-control" type="text" name="surname" required="true"/>
                            </div>
                        </div></div></div>
                      </div><br/>

                        <div class="row" >
                           <div class="col-sm-6">
                          <label class="col-sm-3 control-label">
                          Address
                       </label>
                       <div class="col-sm-8">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                          <span class="input-group-addon">
                         <span class="glyphicon glyphicon-menu-hamburger"></span></span>
                          </span>
                         <input class="form-control" type="text" name="address" required="true" />
                        </div>
                        </div> </div></div>

                         <div class="col-sm-6">
                        <label class="col-sm-3 control-label">
                         Email Address
                       </label>
                       <div class="col-sm-8">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                          <span class="input-group-addon">
                           <span class="glyphicon glyphicon-envelope"></span>
                          </span>
                          <input class="form-control" type="email" name="email"required="true">
                        </div>

                      </div></div></div></div>

                      <div class="row">
                                   <div class="col-sm-6">
                        <label class="col-sm-3 control-label">
                         Cell Number
                       </label>
                       <div class="col-sm-8">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                          <span class="input-group-addon">
                          <span class="glyphicon glyphicon-phone"></span>
                          </span>
                          <input class="form-control" type="text" name="phone"required="true">
                        </div>

                      </div></div></div>

                         <div class="col-sm-6">
                        <label class="col-sm-3 control-label">
                      Password
                       </label>
		                 	<!--Make This a password field with validation-->
                      <div class="col-sm-8">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                          <span class="input-group-addon">
                         <span class="glyphicon glyphicon-lock"></span>
                          </span>
		                <input class="form-control" type="password" name="password1" ng-required="true">
                        </div></div></div></div>

                  </div>

                      <div class="row">
                        <div class="col-sm-6">
                       <label class="col-sm-3 control-label">
                       Bank
                      </label>
                      <div class="col-sm-8">
                           <div class="fg-line">
                             <div class="input-group input-group-lg">
                         <span class="input-group-addon">
                        <span class="glyphicon glyphicon-menu-hamburger"></span></span>
                         </span>
                         <input class="form-control" type="text" name="bank" required="true" />
                       </div>


                     </div></div></div>

                         <div class="col-sm-6">
                        <label class="col-sm-3 control-label">
                          Card No:
                       </label>
                       <div class="col-sm-8">
                      <div class="fg-line">
                        <div class="input-group input-group-lg">
                    <span class="input-group-addon">
               <span class="glyphicon glyphicon-credit-card"></span></span>
                    </span>
                  <input class="form-control" type="text" name="cardNo" required="true">
                  </div>
                </div></div></div></div>
				<br/>
              <div class="modal-footer">
                        <button type="submit" class="btn btn-default btn-lg"  value="Submit" name="btnSubmit">Submit</button>
		                    <span> </span><span> </span>
                        <!-- <button  class=" btn btn-default" width="15px" value="Back" name="btnBack">Back</button> -->
                        <a class="btn btn-default btn-lg" role="button" name="btnBack" href="HomePage.html" value="Back">Back</a>

               </div>
               <a href="TermsAndConditions.php">Terms & Conditions</a>.
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
