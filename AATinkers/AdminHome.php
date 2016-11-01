<!--
    Authors: Tamonne Cotodie 214078353
             Encore Tomson 214162966  
             Luxolo Mpisane 213133040
  -->
<?php
    include_once "connection.php";
    include_once "Customer.php";
    //include_once "AdminReports.php";
    

    if (isset($_GET["btnSubmit"])) {
            
        get();
    }
    
    else if($_GET["btnRep"])
    {
        viewRepo();
    }
    else if($_GET["btnBack"])
    {
        require("LoginPage.html");
    }
    
    function get() {
        
       
        $nam = $_GET["nam"];
        $desc = $_GET["desc"];
        $pri = $_GET["pri"];
        $ima = $_GET["ima"];
        
        $conn = new mysqli("localhost","root","root","a_a_tinkers_db");
        $query = "INSERT INTO products(name,description,price,aat_image) VALUES('$nam', '$desc', '$pri', '$ima')";
        
        if($nam=="" || $nam=null || $desc=="" || $desc==null || $pri=="" || $pri==null || $ima=="" || $ima==null)
        {
            require 'AdminHomePage.php';
            ?>
             <script>
                        alert('Please make sure you enter data in all fields.');
                     </script>
                     <?php
        }
        else 
        {
            if ($conn->connect_error) 
            {
                die('Could not connect to database!');
            }
            else 
            {
                if($conn->query($query)) {
                    
                    require 'AdminHomePage.php';
                    ?>
                     <script>
                        alert('Data successfully saved in database!!');
                     </script>
                     <?php
                    
                }
                else {
                    echo $conn->error;
                }
            }
        }
       
    }
    function viewRepo()
    {
        require("AdminReports.php");   
        //exit();
    }
    
?>

