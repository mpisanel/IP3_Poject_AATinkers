<!--
    Authors: Tamonne Cotodie 214078353
             Encore Tomson 214162966
             Luxolo Mpisane 213133040
  -->
<?php

include_once 'connection.php';
class Contact {
        private $fullname = "";
        private $emailaddress = "";
        private $subject = "";
        private $message = "";
        
        
        public function __construct() {  
        }
        
        public function getID() {
            return $this->id;
        }
        public function setFullName($fullname)
        {
            $this->fullname = $fullname;
        }
        public function getFullName() {
            return $this->fullname;
        }
        public function setEmailAddress($emailaddress)
        {
            $this->emailaddress = $emailaddress;
        }
        public function getEmailAddress() {
            return $this->emailaddress;
        }
         public function setSubject($subject)
        {
            $this->subject = $subject;
        }
        public function getSubject() {
            return $this->subject;
        }
         public function setMessage($message)
        {
            $this->message = $message;
        }
        public function getMessage() {
            return $this->message;
        }
        public function sendEmail($fullname, $emailaddress, $subject, $message)
        {
            $conn = new mysqli("localhost","root","root","a_a_tinkers_db");
            $query = "INSERT INTO email_queries(fullname,email_address,subject,message)"
                . " VALUES('$fullname', '$emailaddress', '$subject', '$message')";
            if ($conn->connect_error) 
            {
                die('Could not connect to database!');
            }
            else 
            {
                if($conn->query($query)) {
                    require 'HomePage.html';
                    ?>
                    <script>
                        alert('Email successfully sent!!');
                     </script>
                     <?php
                }
                else {

                    echo $conn->error;
                }
            }
            exit();
        }
        public function messageReport()
    {
        $conn = new mysqli("localhost","root","root","a_a_tinkers_db");
        $sqlStatement = "Select * from email_queries";
        $result = mysqli_query($conn,$sqlStatement);
        if(mysqli_num_rows($result) > 0)
        {
            echo "<table class='table table-hover'><tr><th>Query ID</th><th>Full Name</th><th>Email</th><th>Subject</th><th>Message</th></tr>";
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr><td>".$row["queryId"]."</td><td>".$row["fullname"]."</td><td>".$row["email_address"]."</td><td>".$row["subject"]."</td><td>".$row["message"]."</td></tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "<p id='errors'>No results</p>";
        }
    }
    
}
