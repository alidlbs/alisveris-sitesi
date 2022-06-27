
<?php require('baglanti/baglan.php'); ?>
<?php include('fonksiyon/yonledir.php'); ?>

 
    <?php

if($_FILES){
	   
	  
    $maxBoyut       = 700000;
    $dosyaUzantisi  = substr($_FILES["dosya"]["name"],-4,4);
    $dosyaAdi       = rand(1,99999).$dosyaUzantisi;
    $dosyaYolu      = "dosya/".$dosyaAdi;
    
    
      if($_FILES["dosya"]["size"]>$maxBoyut){
          
          echo "<h2>dosya boyutu 700kb'dan yuksek olamaz...</h2>";
          
      }else {
          
          
          $dosya = $_FILES["dosya"]["type"];
          
      if($dosya == "image/jpeg" || $dosya == "image/png" || $dosya == "image/gif" || $dosya == "application/zip"){
          
          
          if(is_uploaded_file($_FILES["dosya"]["tmp_name"])){
              
              
              $tasi = move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyaYolu);
              
              $kayit = $db->prepare("insert into resimler set  
              
                            resim_adi=?,
                            resim_turu=?,
                            resim_size=?
              
              ");
              
              $resimTuru = $_FILES["dosya"]["type"];
              $resimSize = $_FILES["dosya"]["size"];
              
              $kayit->execute(array($dosyaYolu,$resimTuru,$resimSize));
              
              if($tasi){
                  
    $ua=$_POST["urad"];
    $uf=$_POST["urfi"];
    $us=$_POST["uradet"];
    $ut=$_POST["urtu"];
    $uac=$_POST["urac"];

    if ($bg->connect_error)
    echo"Bağlanamadınız.Çünkü:".$bg->connect_error;
    else
    {
        $sorgucuk=" INSERT INTO urun(UrunAdi,UrunFiyat,UrunAciklamasi,UrunAdeti,UrunTuru)
        VALUES('$ua','$uf','$uac','$us','$ut')";
        $git=mysqli_query($bg,$sorgucuk) or die("Sorgu çalıştırılmadı..".$mysql->error);
        if($git) echo "Kayit Basarili";   
    }
                  
                 echo "<h2>dosya basarıyla yuklendi...</h2>";
               
                header("refresh: 2; url=mainPage.php");				  
                  
              }else {
                  
                  echo "<h2>dosya tasınırken bir hata olustu...</h2>";
                  
              }
              
              
          } else {
              
              echo "<h2>dosya tasınırken bir hata olustu...</h2>";
              
          }
          
          
      }else {
          
          
         echo "<h2>dosya formati sadece jpg,png yada gif formatinda olmalıdır...</h2>"; 
          
          
      }
          
          
      }
    
   
    
}



    $bg->close();
?>