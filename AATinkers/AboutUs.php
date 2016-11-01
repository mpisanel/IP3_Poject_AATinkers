<!--
    Authors: Tamonne Cotodie 214078353
             Encore Tomson 214162966
             Luxolo Mpisane 213133040
  -->
<!DOCTYPE html>

<html>
<head>
    <title>About Us</title>
    <link href="css/StyleWebsite.css" rel="stylesheet" type="text/css"/>
    <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
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
                     <li><a href="TermsAndConditions.php">T&C's</a></li>
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
            <span>About Us</span>
        </div>
        <div id="rightLine">
        </div>
             <div id="sideContent">
                 <img src="Images/Web_Images/the-real-africa-1200.jpg" alt=""/>
            </div>
     </div>
             <div id="subCon">
               <?php $file = fopen("../AATinkers/text_files/aboutus.txt","r") or die("Failed to read contact us");
                            while (!feof($file))
                            {
                                echo fgets($file);
                            }
                            fclose($file);
                ?>
            </div> 
        </div>
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
    <?php 
    ?>
</body>
</html>