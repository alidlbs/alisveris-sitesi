<?php  
  require('baglanti/baglan.php'); 
  include('fonksiyon/yonledir.php'); 
$y=0;
$ua=$_POST["adi"];
    $uf=$_POST["soyadi"];
    $us=$_POST["kuladi"];
    $ut=$_POST["mail"];
    $sf=$_POST["sifre"];
    $adi=$ua." ".$uf;

 if ($bg->connect_error){
  echo"Bağlanamadınız.Çünkü:".$bg->connect_error;
 }
    
    else
    {
        $sorgucuk=" INSERT INTO giris(AdSoyad,kadi,mail,yetki,sifre)
        VALUES('$adi','$us','$ut','$y','$sf')";
        $git=mysqli_query($bg,$sorgucuk) or die("Sorgu çalıştırılmadı..".$mysql->error);
        if($git) echo "<h1>Kayit Basarili onay icin yonetici gonderilmistir</h1>";
         header("refresh: 5; url=musteriGiris.php");   

    }
                  
                



?> 
