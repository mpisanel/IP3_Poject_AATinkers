<!--
    Authors: Tamonne Cotodie 214078353
             Encore Tomson 214162966
             Luxolo Mpisane 213133040
  -->
  <html>

<head>


    <link href="bower_components/angular/bootstrap/dist/css/bootstrap.min.css"rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/bower_components/angular/angular.js"></script>
    <script src="bower_components/angular/bootstrap/dist/js/bootstrap.js"></script>
    <script src="/bower_components/toastr/toastr.js"></script>
   <script src="bower_components/ng-intl-tel-input/dist/ng-intl-tel-input.js" type="text/javascript"></script>



</head>

 <body>

 <?php

    if(isset($_GET['action']) && $_GET['action']=="add"){


    ?>
    <!--<script>
                        alert('Added To Cart!!');
                     </script-->
<?php
        $id=intval($_GET['id']);

        if(isset($_SESSION['cart'][$id])){

            $_SESSION['cart'][$id]['quantity']++;

        }
		else
		{

            $sql_s="SELECT * FROM products WHERE product_id={$id}";
            $query_s=mysql_query($sql_s);

            if(mysql_num_rows($query_s)!=0){

                $row_s=mysql_fetch_array($query_s);

                $_SESSION['cart'][$row_s['product_id']]=array(
                        "quantity" => 1,
                        "price" => $row_s['price']
                    );
            }
            else
			{
                $message="This product id it's invalid!";
            }
        }
    }
?>

<?php
    if(isset($message)){

        echo "<h2>$message</h2>";
    }
?>
  <?php
  // include_once "connection.php";
  include_once "Customer.php";
    include_once "AATProducts.php";


   $sql="SELECT * FROM products ORDER BY name ASC";
	$query=mysql_query($sql);
	  $img_url="../AATinkers/Images/";
	while ($row=mysql_fetch_array($query))
	{
		?>
		<div id="figure">
			<a><?php echo '<img src="'.$img_url.$row['aat_image'].'"/>';?>
			<div align="center"><?php echo $row['name'] ?><br />
			R<?php echo $row['price'] ?><br/>
      <a class="btn btn-warning btn-sm disabled" role="button" style="width:80px;" href="ProductsList.php?page=products&action=add&id=<?php echo $row['product_id'] ?>">
                            <span class="glyphicon glyphicon-pencil"></span> Edit</a>
                            <a class="btn btn-danger btn-sm disabled" style="width:80px;" role="button disabled" href="ProductsList.php?page=products&action=add&id=<?php echo $row['product_id'] ?>">
                                                  <span class="glyphicon glyphicon-remove"></span> Delete</a>
                          </div></a>
		</div>
		<?php
	}

	?>
	<?php

  ?>


 </body>

  </html>
