
<?php require('baglanti/baglan.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>ürünler</title>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#urunler").click(function(){
    $("#tablo").show();
  });
  
});
</script>   


<link rel="stylesheet" href="urunler.css">
</head>
<body>





       
<?php

if($baglanti->connect_error)
echo "baglamadınız  çünkü : ". $baglanti->connect_error;
else

{  
    $sorgu="SELECT * FROM urun";
    $git=mysqli_query($baglanti,$sorgu);
    while($str=mysqli_fetch_array($git))
    { 

      echo" <div class=container shoe>
      <div class='productImage shoeImg'></div>
      <div class=size shoeSize>
        <h4>SIZE</h4>
        <ul>
      <li>  ";
      echo"".$str["UrunAdeti"]."</li>
         
        </ul>
      </div>
      <div class=price shoePrice>
        <h4>FİYAT</h4>";
echo"".$str["UrunFiyat"]."" ;
echo"   </div>
      <div class=color shoeColor>
        <h4>COLORS</h4>
        <ul>
          <li><span class=blue></span></li>
          <li><span class=yellow></span></li>
          <li><span class=red></span></li>
        </ul>
      </div>
      <div class=productName shoeName>" ;
      echo"".$str["UrunAdi"]."
      </div>
    </div>";
 
        }$baglanti->close();
  } ?>
   
   
    
    
</body>
</html>