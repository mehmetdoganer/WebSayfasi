<!-- <?php 
    require_once "database/index.php";
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
 
    <title>Bartin İhale Sitesi</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Bartın İhale Sistemi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            
      
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Urunler</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/urunlerim.php">Urunlerim</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/urunekle.php">Urun Ekle</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/cikis.php">Çıkış Yap</a>
            </li>
            <li>
                <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="ÜRÜN ARA" aria-label="search">
                <button class="btn btn-outline-success" type="submit"> Ara</button>
                </form>
            </li>

        
        
        </ul>
      
        </div>
    </div>
    </nav>
</header>