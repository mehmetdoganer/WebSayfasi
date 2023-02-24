<?php

        
    
    try {
        $db_name= "mehmetsite"; 
        $db_username = "root";
        $db_password = "";
        $db = new PDO('mysql:host=localhost;dbname='.$db_name, $db_username, $db_password);
    } catch (PDOException $e) {
        print "Hata!: " . $e->getMessage() . "<br/>";
        die();
    }

