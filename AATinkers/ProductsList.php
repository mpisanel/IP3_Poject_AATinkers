<!--
    Authors: Tamonne Cotodie 214078353
             Encore Tomson 214162966
             Luxolo Mpisane 213133040
             
   Reference: https://code.tutsplus.com/tutorials/build-a-shopping-cart-with-php-and-mysql--net-5144 
  -->
<?php
    if (session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

    require("connection.php");

    if(isset($_GET['page'])){

        $pages=array("products", "cart");

        if(in_array($_GET['page'], $pages)) {

            $_page=$_GET['page'];
        }
        else {

            $_page="products";
        }
    }
    else {

        $_page="products";
    }
?>
<!DOCTYPE >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Cart Page</title>
    <style type="text/css">
        .ad
        {
            width: 1000px; height:400px;
        }
    </style>
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
    <form method="get" action="ProductsList.php">
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
                    <li>
                        <a href="category.php">Category</a>
                    </li>
                    <li><a href="ContactUs.php">Contact Us</a></li>
                    <li><a href="AboutUs.html">About Us</a></li>

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

        <div class="clear"></div>
        <div id= "content">
            <form action="ProductsList.php">
            </form>

             <form action="Navigation.php">

            <!--p><input type="submit" value="Logout" name="btnLogout"/></p>
            <p><input type="text" name="search" /> <input type="submit" class="button" value="Search" name="btnsearch" /> </p-->
        </form>


 <div id= "subContent">
<?php
	require($_page.".php");
?>
<?php
	if($_page!="cart")
	{
		?>
		<div id="sidebar">
			<h1>Cart</h1>
			<?php
				if(isset($_SESSION['cart']))
				{

					$sql="SELECT * FROM products WHERE product_id IN (";

					foreach($_SESSION['cart'] as $id => $value)
					{
						$sql.=$id.",";
					}

					$sql=substr($sql, 0, -1).") ORDER BY name ASC";
					$query=mysql_query($sql);

					while($row=mysql_fetch_array($query))
					{
						?>
							<p><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['product_id']]['quantity'] ?></p>
						<?php
					}
					?>
					<hr />
					<a class="btn btn-primary btn-lg active " role="button" href="ProductsList.php?page=cart" >Confirm Items & Check Out</a>
					<?php
				}
				else
				{
					echo "<p>No products found. Please add products.</p>";
				}
			?>
		</div>
<?php }?>
</div>
	</div>
	<div class="clear"></div>
		<div id="footer">
		<div class="connect">
			<div>
				<h1>FOLLOW OUR  MISSIONS ON</h1>
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
	</form>
</body>
</html>
