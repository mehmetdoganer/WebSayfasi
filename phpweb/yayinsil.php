<?php
        include "dependencies/_header.php";

    


        if (isset( $_SESSION['id'] )) {
            
         
     
$sil = $db->prepare("DELETE from yazilar where id=:id");
$sil->execute(array(
    "id" => $_GET["id"]
));

header("Location:yayinlar.php");
        }
?>