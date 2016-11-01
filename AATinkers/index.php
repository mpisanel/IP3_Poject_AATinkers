<!DOCTYPE html>
<!--
    Authors: Tamonne Cotodie 214078353
             Encore Tomson 214162966
             Luxolo Mpisane 213133040
  -->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        if (isset($_GET["btnLogin"]))
            {
                getLog();
            }
        else if(isset($_GET["btnSignUp"]))
        {
             require("CustomerPage.php");
        }
        else if(isset ($GET["btnLogout"]))
        {
            $doc = new DOMDocument();
            $doc->loadHTMLFile("LoginPage.html");
            echo $doc->saveHTML();
            exit;

        }
        function getLog()
        {
        $email = $_GET["email"];
        $password = $_GET["password"];
        $conn = new mysqli("localhost","root","root","a_a_tinkers_db");

        $query = "SELECT * FROM customer WHERE customer_email = '$email' AND customer_password = '$password'";

        if ($conn->connect_error)
        {
            die('Could not connect to database!');
	}
	else {

            if($query_run=$conn->query($query)) {

                $valID = null;
                $valName = null;
                $valSurname = null;
                $valAddress = null;
                $valEmail = null;
                $valPass = null;
                $valBank = null;
                $valCard = null;

                while ($query_row = $query_run->fetch_assoc()) {

                    $valID = $query_row["customer_id"];
                    $valName = $query_row["customer_name"];
                    $valSurname = $query_row["customer_surname"];
                    $valAddress = $query_row["customer_address"];
                    $valEmail = $query_row["customer_email"];
                    $valPass = $query_row["customer_password"];
                    $valBank = $query_row["customer_bank"];
                    $valCard = $query_row["customer_card_no"];
                }

                if($valEmail == $email && $valEmail!=null && $valPass == $password && $valPass!=null) {

                    require("ProductsList.php");
                    exit;
                }
                else if($email == "admin@gmail.com" && $email!=null && $password == "admin" && $password!=null) {

                      require 'inventory.php';
                      exit();
                    ?>
                    <script>
                        alert('You are logging in as Admin!!');
                     </script>
                     <?php

                    exit;
                }
                 else if($email == "" || $password == "") {
                      $doc = new DOMDocument();
                      $doc->loadHTMLFile("LoginPage.html");
                      echo $doc->saveHTML();
                    ?>
                    <script>
                        alert('No data in the field!!');
                     </script>
                     <?php
                    //echo "Logged as Admin";
                    exit;
                }

                else {

                     require("LoginPage.html");

                    ?>
                      <script>
                        alert('Invalid details!!');
                     </script>
                     <?php
                    exit;
                }
            }
            else {

               echo mysql_error();
            }
        }
    }
        ?>
    </body>
</html>
