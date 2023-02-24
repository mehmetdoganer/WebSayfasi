<?php
    include "dependencies/_header.php";
   
//     if(isset($_SESSION["kullanici_adi"]))
//     print "Hoşgeldiniz:".$_SESSION['kullanici_adi'];
// else
// header("Location:index.php");



  if (isset( $_SESSION['id'] )) {
      
   

$sorgu = $db->prepare("Select * from yazilar where id=:id");
$sorgu->execute(array(
    "id"=> $_GET["id"]
));
$yayin=$sorgu->fetch(PDO::FETCH_ASSOC);
?>


<div class="container">

<form  method="POST"  enctype="multipart/form-data"  class="row g-3">
    <div class="col-md-6">
        <label for="" class="form-label">Yazar Adı</label>
        <input name="yazar_ad" type="text" class="form-control" value="<?php echo $yayin["yazaradi"]; ?>">
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">makale</label>
        <input name="makaleicerik" type="text" class="form-control" value="<?php echo $yayin["makale"]; ?>">
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">makale adı</label>
        <input name="makale_ad" type="text" class="form-control" value="<?php echo $yayin["makaleadi"]; ?>">
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">makale ozet</label>
        <input name="makalet" type="text" class="form-control" value="<?php echo $yayin["makaleozeet"]; ?>">
    </div>

    <div class="col-12">
        <button type="submit" name="guncelle" class="btn btn-primary">Ürün Ekle</button>
        </div>
</form>
   <?php
   
   if(isset($_POST["guncelle"]))
   {
       $guncelle = $db->prepare("UPDATE yazilar set 
       yazaradi= :yazar,
       makale= :makaleicerik,
       makaleadi= :makalead,
       makaleozeet= :makaleozet where 
       id= :id");

       $guncelle->execute(array(
           "yazar"=>$_POST["yazar_ad"],
           "makale"=>$_POST["makaleicerik"],
           "makalead"=>$_POST["makale_ad"],
           "makaleozet"=>$_POST["makalet"],
           "id"=>$_GET["id"]
       ));
   }
}
   ?>
</div>




    
