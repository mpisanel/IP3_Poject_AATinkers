<!--
    Authors: Tamonne Cotodie 214078353
             Encore Tomson 214162966
             Luxolo Mpisane 213133040
    Reference: https://www.daniweb.com/programming/web-development/threads47478/use-dropdown-selected-value-in-msql-query
  -->
<html>
<head></head>

<body>

<!-- <select class="btn btn-lg btn-primary" style="height:50px; width:100px;" > -->
<?php

//Data examples used in this file where taken/viewed from the jqx widgets demo using php
    //require("connection.php");
    $conn = new mysqli("localhost","root","","a_a_tinkers_db");
$query = "SELECT * FROM categories";
$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());?>
<form id="form" name="form" method="post">

 <select class="btn btn-lg btn-default" style="height:50px; width:150px;" name='category' >
   <<?php
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
  ?>
<option value="<?php echo $row["CategoryId"] ?>">
<?php echo $row["CategoryName"] ?>
</option>


  <?php

  $catSelected=$_POST['category'];

}

?>
 </select>
<span></span>
 <span></span><button type="submit" id="submit" class="btn btn-lg btn-success"> Load Products</button>
 </form>


 <form id="form1" name="form1" method="post">

 <?php
  $sql="SELECT * FROM products WHERE CategoryId ='".$catSelected."' ORDER BY name ASC";
 $query=mysql_query($sql);
   $img_url="../AATinkers/Images/";
   if($query===FALSE){
     die(mysql_error());
   }
 while ($row=mysql_fetch_array($query))
 {
   ?>
   <div id="figure">
     <a><?php echo '<img src="'.$img_url.$row['aat_image'].'"/>';?>
     <div align="center"><?php echo $row['name'] ?><br />
     R<?php echo $row['price'] ?><br/>
     <a class="btn btn-primary btn-sm active" role="button" href="ProductsList.php?page=products&action=add&id=<?php echo $row['product_id'] ?>">
                           <span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                         </div></a>
   </div>
   <?php
 }

 ?>

</form>

</body>
</html>
