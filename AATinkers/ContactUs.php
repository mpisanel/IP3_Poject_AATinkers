<!--
    Authors: Tamonne Cotodie 214078353
             Encore Tomson 214162966
             Luxolo Mpisane 213133040
  -->
<?php
    include_once "connection.php";
    include_once "Contact.php";
    $fullname = "";
    $email_address = "";
    $subject = "";
    $massage = "";
   
    if(isset($_POST["btnSubmit"]))
    {
        $fullname = $_POST["fullname"];
        $email_address = $_POST["emailaddress"];
        $subject = $_POST["subject"];
        $massage = $_POST["message"];
        
            if((class_exists("Contact")))
            {
                $detObject = new Contact();
            }
          
            $detObject->setFullName($fullname);
            $detObject->setEmailAddress($email_address);
            $detObject->setSubject($subject);
            $detObject->setMessage($massage);
            
           
                try{
                    $detObject->sendEmail($detObject->getFullName(),$detObject->getEmailAddress(), 
                            $detObject->getSubject(), $detObject->getMessage()
                           );
                }catch (Exception $e)
                {
                    $e->getMessage();
                }
    }
    
?>

<html>
<head>
    <title>Contact Us</title>
    <link href="css/StyleWebsite.css" rel="stylesheet" type="text/css"/>
	  <link href="css/contact.css" rel="stylesheet" type="text/css"/>
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
      
        <div id= "content">
       <div id="welcomeMsg">
        <div id="leftline">
        </div>
        <div id="textWelcome">
            <span>Contact Us</span>
        </div>
        <div id="rightLine">
        </div>
             <div id="sideContent">
                 <?php $file = fopen("../AATinkers/text_files/contactus.txt","r") or die("Failed to read contact us");
                            while (!feof($file))
                            {
                                echo fgets($file);
                            }
                            fclose($file);
                ?>
            </div>
    </div>	 
	<div id="subCon">	 
            <form name="emailForm" action="<?php $_SERVER["PHP_SELF"] ?>" method="post">       
            <div class="login-box">
			<div class="box-header"><br/>
				<h2>Details</h2><br/>
			</div><br/>
                    <div class="row">
                       <div class="col-sm-10">
                      <label class="col-sm-4 control-label">Full Name
                       </label>
                       <div class="col-sm-10">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                          <span class="input-group-addon">
                      <span class="glyphicon glyphicon-user"></span></span>
                          </span>
                        <input class="form-control" type="text" name="fullname" required="true"/>
                        </div>
                        </div></div></div>

                         <div class="col-sm-10">
                        <label class="col-sm-4 control-label">Email Address
                       </label>
                       <div class="col-sm-10">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                          <span class="input-group-addon">
                           <span class="glyphicon glyphicon-envelope"></span>
                          </span>
                          <input class="form-control" type="email" name="emailaddress"required="true">
                        </div>

                      </div></div></div>
					   <div class="col-sm-10">
                        <label class="col-sm-4 control-label">Subject
                       </label>
                       <div class="col-sm-10">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                          <span class="input-group-addon">
                           <span class="glyphicon glyphicon-menu-hamburger"></span>
                          </span>
                          <input class="form-control" type="text" name="subject"required="true">
                        </div>

                      </div></div></div>
 
                        <div class="col-sm-10">
                       <label class="col-sm-4 control-label">Message
                      </label>
                      <div class="col-sm-10">
                           <div class="fg-line">
                             <div class="input-group input-group-lg">
                         <span class="input-group-addon">
                        <span class="glyphicon glyphicon-menu-hamburger"></span></span>
                         </span>
                          <textarea class="form-control" name="message" rows="5"  cols="10"  id="comment" style="height: 95px;"  width="120"></textarea>
                       </div>
                     </div></div></div>                  				  
                      </div>                     
              <div class="modal-footer">
                        <button type="submit" class=" btn btn-default btn-lg" width="15px" value="Submit" name="btnSubmit">Submit</button>
		                    <span> </span><span> </span>
                       
               </div> </div>
             </form> 
            </div> </div>  
           
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
    <?php 
    ?>
        </div>
</body>
</html>