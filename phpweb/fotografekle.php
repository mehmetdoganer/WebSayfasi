<?php
    include "dependencies/_header.php";
   
//     if(isset($_SESSION["kullanici_adi"]))
//     print "Hoşgeldiniz:".$_SESSION['kullanici_adi'];
// else
// header("Location:index.php");



        

if (isset($_POST['fotograf_ad'])   ) 
{
    $urun_ad = $_POST['fotograf_ad'];
    
    
    

    date_default_timezone_set('Europe/Istanbul');
    $target_file = "uploads/".date("Y-m-d-s").basename($_FILES["resim"]["name"]);    
    $upload_status = move_uploaded_file($_FILES["resim"]["tmp_name"], $target_file);
    
    if  ($upload_status) {

        $insert = $db->prepare( "INSERT INTO 
        fotograflar(fotograf_ad	,fotograf_resim_url)
        VALUES(:ad,:resim_url)" );

        $chk = $insert->execute(
            array(
            "ad" =>$urun_ad ,
            "resim_url" => $target_file,
            
            )
        ); 

        if ($chk) {
        echo '<div class="alert alert-success" role="alert">
        BAŞARILI BİR ŞEKİLDE KAYIT EDİLDİ!</div>';
        }else {
        echo '<div class="alert alert-danger" role="alert">
        KAYIT EDİLEMEDİ! </div>';
        }





    } else {
        echo "Dosya yuklenemedi !";
    }


}

     
?>
<?php


  if (isset( $_SESSION['id'] )) {
      
   
?>
<div class="container">

<form  method="POST"  enctype="multipart/form-data"  class="row g-3">
    <div class="col-md-6">
        <label for="label1" class="form-label">Fotoğraf Adı</label>
        <input name="fotograf_ad" type="text" class="form-control" id="urunad">
    </div>

   

    <div class="col-12">
        <label class="form-label" for="resim">Resim Ekle</label>
        <input name="resim" type="file" class="form-control" id="resim">
    </div>


    <div class="col-12">
        <button type="submit" class="btn btn-primary">Fotoğraf Ekle</button>
        </div>

</form>
   
</div>


<?php } 
else
{ 
    print "giriş yapılşmamış";
}
?>
    
