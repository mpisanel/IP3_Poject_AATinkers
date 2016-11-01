<!--
    Authors: Tamonne Cotodie 214078353
             Encore Tomson 214162966  
             Luxolo Mpisane 213133040
  -->
<?php
    session_start(); 
    //require_once 'DisplayItems.php';
    
    if(isset($_GET['login'])) {

        $doc = new DOMDocument();
        $doc->loadHTMLFile("LoginPage.html");
        echo $doc->saveHTML();
        exit;
    }
    else if(isset($_GET['btnLogout'])) {

        $doc = new DOMDocument();
        $doc->loadHTMLFile("LoginPage.html");
        echo $doc->saveHTML();
        exit;
    }
?>