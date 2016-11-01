<!--
    Authors: Tamonne Cotodie 214078353
             Encore Tomson 214162966
             Luxolo Mpisane 213133040
  -->
<?php
include_once 'connection.php';
class AATProducts {
        private $productid = "";
        private $name = "";
        private $description = "";
        private $price = "";
        private $aat_image = "";
                
        public function __construct() {            
        }
        public function setProductId($productid)
        {
            $this->productid = $productid;
        }
        public function getProductId() {
            return $this->productid;
        }
        public function setName($name)
        {
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }
        public function setDescription($description)
        {
            $this->description = $description;
        }
        public function getDescription() {
            return $this->description;
        }
        public function setPrice($price)
        {
            $this->price = $price;
        }
        public function getPrice() {
            return $this->price;
        }
        public function setAatImage($aat_image)
        {
            $this->aat_image = $aat_image;
        }
        public function getAatImage() {
            return $this->aat_image;
        }
         public function sendProducts($name, $description, $price, $aat_image)
        {
           $conn = new mysqli("localhost","root","root","a_a_tinkers_db");
            $query = "insert INTO products(name,description,price,aat_image) VALUES"
                . "('$name', '$description', '$price', '$aat_image')";
        
            if ($conn->connect_error) 
            {
                die('Could not connect to database!');
            }
            else 
            {
                if($conn->query($query)) {
                    require 'AdminHome.php';
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
        
        exit();
        }
}
