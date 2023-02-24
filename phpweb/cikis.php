<?php
include "dependencies/_header.php";
?>
    
<div class="container">

<?php
   
    session_destroy();

    echo '<div class="alert alert-primary" role="alert">
    Çıkış Yapılıyor !!!!
  </div>';

    header("Refresh:2 login.php");
?>


</div>

<?php
include "dependencies/_footer.php";
?>