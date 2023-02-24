<?php 
    require_once "database/index.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
 
    <title>Mehmet Doğaner</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Mehmet Doğaner</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            
        <?php    
                session_start();

                if (isset( $_SESSION['id'] )) {
                    
                 

        ?>
            <li class="nav-item">
            
            <li class="nav-item">
            <a class="nav-link" href="/yayinlar.php">Yayinlar</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/fotograflar.php">Fotoğraflar</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/sunumlar.php">Sunumlar</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/cikis.php">Çıkış Yap</a>
            </li>
            <li>
              
                </form>
            </li>
        <?php } else{ ?>

            
            <li class="nav-item">
            <a class="nav-link" href="/yayinlar.php">Yayinlar</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/fotograflar.php">Fotoğraflar</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/sunumlar.php">Sunumlar</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/login.php">Giriş Yap</a>
            </li>
            
            <li>
          
                </form>
            </li>
           
           <?php } ?>
        
        </ul>
      
        </div>
    </div>
    </nav>
</header>