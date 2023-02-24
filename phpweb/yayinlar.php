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

</style>
  
</head>
<body>
<div class="container" >
    <h1 style="position:absolute; left:19%; top: 50px; "> Yayınlar</h1>
    <div class="row" >
        <?php
        $q = $db->prepare("SELECT *, yazilar.id as yazi_id  FROM yazilar ");
        $q->execute();
        $yayinlar = $q->fetchAll(PDO::FETCH_ASSOC);
        foreach ($yayinlar as $yayin) {
    ?>
        <div class="card" style="left: 40px; top:50px;">
        <img src="<?= $yayin['resim_url'] ?> " >
        <h1 ><?= $yayin['makaleadi'] ?></h1>
        <h6 class="price"><?= $yayin['yazaradi'] ?></h6>
        <p class="card-text"><?= $yayin['makaleozeet'] ?></p>

       <?php if (isset($_SESSION['id'])) { ?>
       <p style="text-decoration:none" > <button><a href="yayinguncelle.php?id=<?=$yayin['id']?>" style="text-decoration:none; "> Güncelle <i class="fa fa-refresh fa-spin"></i></button></p></a>
        <p > <button > </i><a href="yayinsil.php?id=<?=$yayin['id']?>" style="text-decoration:none; color:red; "> Sil <i class="fa fa-trash" style="color:red"></i></button></p></a>
      
       <?php } else {?>
        <p style="text-decoration:none" > <button style="visibility:hidden ;"><a href="yayinguncelle.php?id=<?=$yayin['id']?>" style="text-decoration:none; "> Güncelle <i class="fa fa-refresh fa-spin"></i></button></p></a>
        <p > <button style="visibility: hidden;" > </i><a href="yayinsil.php?id=<?=$yayin['id']?>" style="text-decoration:none; color:red; "> Sil <i class="fa fa-trash" style="color:red"></i></button></p></a>
   
        
        <?php }?>
        
            <div class="card-body" >
            
            </div>
        </div>
        

        <?php }  ?>
        <body>
        <div class="user-card skeleton" style="position: fixed; top: 150px; left:0px;">

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
  
</div>
    </div>

</div>
<div style="position: fixed; top: 150px; right:0px;">
<a target="_blank" href="http://www.sitenizolsun.com" _mce_href="http://www.sitenizolsun.com"><img style="border: 0pt none;" _mce_style="border: 0pt none;" alt=" " src="http://www.yardim.sitenizolsun.com/FileUpload/bs13731/File/yurdum-reklam-banner1.jpg" _mce_src="http://www.yardim.sitenizolsun.com/FileUpload/bs13731/File/yurdum-reklam-banner1.jpg" height="425" width="170" /></a>
</div>
</body>
</html>