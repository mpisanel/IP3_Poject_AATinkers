<!--
    Authors: Tamonne Cotodie 214078353
             Encore Tomson 214162966  
             Luxolo Mpisane 213133040
  -->
<?php
//require 'cart.php';
require_once 'connection.php';  
    if (isset($_POST["checkout"])) {
        
            /*$date = date("l jS \of F Y h:i:s A");
            $conn = new mysqli("localhost","root","","a_a_tinkers_db");
            $sql1 = "INSERT INTO orders(date, details, total_price) VALUES($date, 'name' ,$totalprice )";     
            /*$sql2 = "SELECT * FROM orders";
            $sql2=substr($sql2, 0, -1).") ORDER BY name ASC";
            $query2=mysql_query($sql2);
            
            
            echo 'YOUR ORDER HAS BEEN PLACED. THANK YOU FOR SHOPPING WITH US.';
            echo "<br></br><a href=\"HomePage.html\" class=\"button\">Return Home Page</a>";
            //session_unset();
            //exit;
            while($row=mysql_fetch_array($query2)) {

                 echo '\n' . $row['date'];
            }

            exit;*/
        ?>	
      <head>
      <b>
          Email: aatinkers@gmail.com<br/>
          Telephone: +27 21 460 3911<br/><br/>
          Keizersgracht and Tennant Street<br/>
          Zonnebloem<br/>
          PO Box 652<br/>
          Cape Town<br/>
          8000<br/><br/>
   
      </b>
      <h4><label> Order Date: </label><?php 
                $date = date("l jS \of F Y h:i:s A");
                echo $date;
        ?></h4>

           
    <table class='table table-hover '>

        <tr>
            <th><label>Item Details</label></th>
            <th><label>Quantity</label></th>
            <th><label>Unit Price<span></label></th>
            <th><label>Total</label></th>
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
                     ?>
                    <tr>
                        <td><div><label><?php echo $row['name'] ?></label></div></td>
                         <td><div>
                        <label>
                               <?php echo $_SESSION['cart'][$row['product_id']]['quantity'] ?> </label></div></td>
                        <td><div><label>R<?php echo $row['price'] ?></label></div></td> <span>
                        <td><div><label>R<?php echo $_SESSION['cart'][$row['product_id']]['quantity']*$row['price'] ?></label></div></td>
                    </tr>
                <?php   
                $sql2 = "INSERT INTO orders(date, details, total_price) VALUES($date, 'name' ,$totalprice )";
                }
                ?>

    </table>
<div class="modal-footer">

<label><b> Grand Total: R</b><?php echo $totalprice ?></label><br/>
<a href="HomePage.html"class=" btn btn-default btn-lg active" style="width:210px;"  class="button">Return Home Page</a>
</div>
      <?php 
      session_unset();
      exit();
    }
    
?>
