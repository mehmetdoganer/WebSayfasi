<?php
        include "dependencies/_header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/cardlar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
.flip-card {
  background-color: transparent;
  width: 367px;
  height: 267px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  }
  .btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

</style>
</head>
<body>
<div class="container">
    <h1 style="position:absolute; left:23%; top: 80px; ">Fotoğraflar</h1>
    <?php if (isset($_SESSION['id'])) { ?>
      <a href="fotografekle.php"> <button class="btn" style="position:absolute; left:72%; top: 100px; " > <i  class="fa fa-folder"></i> Fotoğraf Yükle</button></a>
      <?php } 
      else {?>
        <a href="fotografekle.php"> <button class="btn" style="position:absolute; left:72%; top: 100px; visibility:hidden;" > <i  class="fa fa-folder"></i> Fotoğraf Yükle</button></a>
        <?php }
        ?>

    <div class="row">
        <?php
        $q = $db->prepare("SELECT *, fotograflar.id as fotograf_id  FROM fotograflar ");
        $q->execute();
        $fotograflar = $q->fetchAll(PDO::FETCH_ASSOC);
        foreach ($fotograflar as $fotograf) {
    ?>
        <div class="flip-card" >
  <div class="flip-card-inner" style="position:absolute; left:50%; top:50%; margin-left: -50px; margin-top:-50px;">
    <div class="flip-card-front">
      <img src=<?= $fotograf['fotograf_resim_url']  ?>  style="width:367px;height:267px; " >
    </div>
    
    
    <div class="flip-card-back">
      <p><a href="fotografsil.php?id=<?=$fotograf['id']?>"><button class="btn" style="width: 365px; height:266px;"> 
      <?php if (isset($_SESSION['id'])) { ?>
      <i class="fa fa-trash" style="font-size:50px; color:white"></i></a></button></div>
      
      <?php } else {?>
          <p style="color:white; text-decoration:none;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dignissimos quas ipsum asperiores voluptates vel commodi labore soluta corrupti maiores praesentium iste ullam, tenetur sint perferendis cum dolore harum possimus!</p></a></button></div>
        <?php }
        ?>
  </div>
</div>

        <?php }  ?>

    </div>
    <div class="user-card skeleton" style="position: fixed; top: 150px; left:0px;">

<div class="user-cover">
    <img class="user-avatar" src="uploads/cvv.jpeg" alt="user profile image">
</div>

<div class="user-details">
    <div class="user-name hide-text">Mehmet Doğaner</div>
    <div class="user-email hide-text">Öğrenci</div>
    <div class="user-text hide-text">Bartın Üniversitesi <br> Yönetim Bilişim Sİstemleri</div>

</div>
<div style="margin: 24px 0;">
 
<a href="https://www.linkedin.com/in/mehmet-do%C4%9Faner-2b4890201"><i class="fa fa-linkedin"></a></i>  
</div>
</div>
</div>
<div style="position: fixed; top: 150px; right:0px;">
<a target="_blank" href="http://www.sitenizolsun.com" _mce_href="http://www.sitenizolsun.com"><img style="border: 0pt none;" _mce_style="border: 0pt none;" alt=" " src="http://www.yardim.sitenizolsun.com/FileUpload/bs13731/File/yurdum-reklam-banner1.jpg" _mce_src="http://www.yardim.sitenizolsun.com/FileUpload/bs13731/File/yurdum-reklam-banner1.jpg" height="425" width="170" /></a>
</div>
</body>
</html>