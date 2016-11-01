<!--
    Authors: Tamonne Cotodie 214078353
             Encore Tomson 214162966
             Luxolo Mpisane 213133040
    Reference: https://code.tutsplus.com/tutorials/build-a-shopping-cart-with-php-and-mysql--net-5144 
               http://bootsnip.com/snippets/featured/product-page-for-online-shop

  -->

<?php

    if(isset($_POST['submit'])) {

        foreach($_POST['quantity'] as $key => $val) {

            if($val==0) {

                unset($_SESSION['cart'][$key]);
            }
            else 
            {
                $_SESSION['cart'][$key]['quantity']=$val;
            }
        }
    }
    else if(isset($_POST['checkout'])) {
        ?>
  <h4>YOUR ORDER HAS BEEN PLACED. THANK YOU FOR SHOPPING WITH US. BELOW IS YOUR ORDER DETAILS:</h4><br/>
  
        <?php 
        require("orderDetails.php");
        //echo "<br></br><a href=\"HomePage.html\" class=\"button\">Return Home Page</a>";
   }


?>
  <html>
  <head>

    <title>View Cart Items</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/StyleWebsite.css" rel="stylesheet" type="text/css"/>
        <link href="css/telInput.css" rel="stylesheet" type="text/css"/>
        <link href="css/showCart.css" rel="stylesheet" type="text/css"/>
        <link href="generic.css" rel="stylesheet" type="text/css" />
        <link href="bower_components/angular/bootstrap/dist/css/bootstrap.min.css"rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="/bower_components/angular/angular.js"></script>
        <script src="/bower_components/toastr/toastr.js"></script>
       <script src="bower_components/ng-intl-tel-input/dist/ng-intl-tel-input.js" type="text/javascript"></script>

        <meta charset="utf-8">
  </head>
  <body>
      <form method="post" action="ProductsList.php?page=cart">
            <div class="login-box">
			<div class="box-header"><br/>
				<h2><label>Cart Items</label></h2><br/>
            </div>
    <br/>

    <table class='table table-hover '>

        <tr>
            <th><label>Item Details</label></th>
            <th><label>Selected Quantity</label></th>
            <th><label>Unit Price<span></label></th>
            <th><label>Selected Total</label></th>
        </tr>

        <?php

            $sql="SELECT * FROM products WHERE product_id IN (";

                foreach($_SESSION['cart'] as $id => $value) {

                    $sql.=$id.",";
                }

                $sql=substr($sql, 0, -1).") ORDER BY name ASC";
                $query=mysql_query($sql);
                $totalprice=0;

                while($row=mysql_fetch_array($query)) {

                    $subtotal=$_SESSION['cart'][$row['product_id']]['quantity']*$row['price'];
                    $totalprice+=$subtotal;
                     $img_url="../AATinkers/Images/";
                     ?>
                    <tbody>
                    <tr>
                        <td class="col-sm-5">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?php echo $img_url.$row['aat_image'] ?>" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><label><?php echo $row['name'] ?></label></h4>
                                <h5 class="media-heading"></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-2 ">
                          <input type="text" style="height:35px;width:55px" name="quantity[<?php echo $row['product_id'] ?>]"
                                 value="<?php echo $_SESSION['cart'][$row['product_id']]['quantity'] ?>" />
                        </td>
                        <td class="col-sm-2 "><strong><label>R <?php echo $row['price'] ?></label></strong></td>
                        <td><strong><label>R <?php echo $_SESSION['cart'][$row['product_id']]['quantity']*$row['price'] ?></label></strong></td>
                        <!-- <td class="col-sm-2">
                        <button type="button" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td> -->
                    </tr>
                    <?php
                                  }
                                  ?>

                    <tr>

                        <td>   </td>
                        <td>   </td>
                        <td><h5><b>Grand Total<b></h5></td>
                        <td><h5><strong>R <?php echo $totalprice ?></strong></h5></td>
                    </tr>
                </tbody>
    </table>
<div class="modal-footer">

<label><b> Grand Total: R</b><?php echo $totalprice ?></label><br/>
<label>To remove an item set its quantity to 0.</label>

</div>
    <a class="btn btn-primary btn-lg active " role="button" href="ProductsList.php?page=products"><span class="glyphicon glyphicon-arrow-left"></span> Return to Products</a>
    <button  class=" btn btn-primary btn-lg active"  type="submit"  name="submit"><span class="glyphicon glyphicon-pencil"></span> Update Cart</button>
    <button  class=" btn btn-primary btn-lg active"  type="submit" name="checkout"><span class="glyphicon glyphicon-ok"></span> Check Out</button>
</div>
   </form> 
  </body>
  </html>
