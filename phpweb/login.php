<?php
        include "dependencies/_header.php";

  if (  isset($_POST['kullaniciad'])  &&  isset($_POST['sifre'])    ) {

    $kullaniciad = $_POST['kullaniciad'];
    $sifre = $_POST['sifre'];

    $q = $db->prepare("SELECT *  FROM kullanicilar 
                WHERE kullanici_adi=:kadi AND sifre=:ksifre");
    $q->execute(array(
        "kadi"=>$kullaniciad,
        "ksifre"=>$sifre,) 
      );
   

    if ($q->rowCount() >0) {
      
      $user = $q->fetch();
      $_SESSION['kullanici_adi']=$user['kullanici_adi'];
      $_SESSION['id']=$user['id'];
      $_SESSION['ad']=$user['ad'];
      $_SESSION['soyad']=$user['soyad'];

      header("Location: index.php");

     
    } else {
      echo "kullanıci yok";
    }
    



  }
?>
<div class="container">
<form  method="POST">
  <div class="mb-3">
    <label for="kullaniciad" class="form-label">Kullanıcı Adınız</label>
    <input name="kullaniciad"  type="text" class="form-control" id="kullaniciad" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Şifreniz</label>
    <input  name="sifre" type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Giriş Yap</button>
</form>




</div>
<?php
        include "dependencies/_footer.php";
?>