<?php require('baglanti/baglan.php'); ?>
<?php include('fonksiyon/yonledir.php'); ?>
<link rel="stylesheet" href="css/loginhata.css">
<link rel="stylesheet" href="css/hata.css">
<?php
$ka=$_POST["adiniz"];
$sf=$_POST["sifre"];
$y=1;
if($baglanti->connect_error)
echo "baglamadınız  çünkü : ". $baglanti->connect_error;
else
{  
    $sorgu="SELECT * FROM giris WHERE(kadi='".$ka."'AND sifre='".$sf."' AND yetki='".$y."')";
    $git=mysqli_query($baglanti,$sorgu);
   $deneme=mysqli_num_rows($git);
   if(mysqli_num_rows($git)>0)
   {

       $str=mysqli_fetch_array($git);
       
       
       echo" <div class='animation01'>
       <div class='rhombus_small'>
           <div class='rhombus'>
               <div class='border_box'>
                   <span class='line line01'></span>
                   <span class='line line02'></span>
                   <span class='line line03'></span>
                   <span class='line line04'></span>
                   <span class='circle circle01'></span>
                   <span class='circle circle02'></span>
                   <span class='circle circle03'></span>
                   <span class='circle circle04'></span>
                   <span class='animation_line animation_line01'></span>
                   <span class='animation_line_wrapper animation_line02_wrapper'><span class='animation_line animation_line02'></span></span>
                   <span class='animation_line animation_line03'></span>
                   <span class='animation_line_wrapper animation_line04_wrapper'><span class='animation_line animation_line04'></span></span>
                   <span class='animation_line animation_line05'></span>
                   <span class='animation_line_wrapper animation_line06_wrapper'><span class='animation_line animation_line06'></span></span>
                   <span class='animation_line animation_line07'></span>
                   <span class='animation_line_wrapper animation_line08_wrapper'><span class='animation_line animation_line08'></span></span>
               </div>
               <div class='wave'>
                   <div class='wave_wrapper'><div class='wave_box'></div></div>
               </div>
           </div>
       </div>
   </div>
   <div class='animation02'>
       <div class='rhombus_box'>
           <span class='rhombus_item_wrapper rhombus_item01_wrapper'><span class='rhombus_item'></span></span>
           <span class='rhombus_item_wrapper rhombus_item02_wrapper'><span class='rhombus_item'></span></span>
       </div>
       <div class='double_content'>
           <div class='double_wrapper02 dotted02'><div class='dotted_hide'><div class='double_wrapper01 dotted01'><span class='dotted_right'></span></div></div></div>
           <div class='double_wrapper02 white02'><div class='double_wrapper01 white01'></div></div>
           <div class='double_wrapper02 gray02'><div class='double_wrapper01 gray01'></div></div>
           <div class='double_wrapper02 orange02'><div class='double_wrapper01 orange01'></div></div>
       </div>
       <div class='name'>
           <p>"; echo " ".$str['AdSoyad']." Hoşgeldin.<br>";echo"</p>
           <span class='name_circle01'></span>
           <span class='name_circle02'></span>
       </div>
   </div>";
       go("mainPage.php?&kulad=$str[2]",0);
   }
   else{
      echo" <div class='container'>
      <h1><span>kullanici adi <br>sifre<br>hatali</span></h1>
      
      <div class='blobs_1'></div>
      <div class='blobs_2'></div>
      <div class='blobs_3'></div>
      <div class='blobs_4'></div>
      <div class='blobs_5'></div>
      <div class='blobs_6'></div>
      <div class='blobs_7'></div>
  </div>";
 go("index.php",2);
   }
  
}
 $baglanti->close();
    ?>