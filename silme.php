<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>silme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>
 <nav class="navbar navbar-expand-lg  navbar-dark bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="mainPage.php">hoş geldin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="liste.php">urunlerim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="yeniKayit.php">yeni kayit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="duzenleme.php">duzenleme</a>
        </li>
       
          <li class="nav-item">
          <a class="nav-link" href="arama.php" >arama</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
        
   
<?php include('fonksiyon/yonledir.php'); ?>
<?php require('baglanti/baglan.php');

echo"<table class='table'>

<thead>
<tr>
<th scope='col'>SIRA</th>
  <th scope='col'>urun ıd</th>
  <th scope='col'>urun adı</th>
  <th scope='col'>urun fiyat</th>
  <th scope='col'>urun açıklama</th>
  <th scope='col'>urun adeti </th>
  <th scope='col'>urun turu </th>
  <th scope='col'>silme </th>
</tr>
</thead>

";

?>

<?php
$A=1;
	if (isset($_GET['sil']))
	{
		$silinecek_no=@$_GET["UrunId"];
		$silinecek_ad=@$_GET["UrunAdi"];
		
		$sorgucuk="delete from Urun where UrunId=\"$silinecek_no\" AND UrunAdi=\"$silinecek_ad\"";
			$git=mysqli_query($bg,$sorgucuk) or die ("Sorgu çalıştırılamadı.. ".$mysqli->error);
			if ($git) echo "<br> Kayıt başarı ile silinmiştir..". go("silme.php",4);;
	}
	else{
$sorgucuk="SELECT * FROM Urun ";
			$git=mysqli_query($bg,$sorgucuk);
			 $deneme=mysqli_num_rows($git);
while($str=mysqli_fetch_array($git))
			{
				echo "
               


                <tbody>
                <tr>
                <td>$A</td>
                <th scope='row'>$str[0]</th>
                <td>$str[1]</td>
                <td>$str[2]</td>
                <td>$str[3]</td>
                <td>$str[4]</td>
                <td>$str[5]</td>
            <td>
            	<font color='white'><b><a href='silme.php?&UrunId=$str[0]&UrunAdi=$str[1]&sil=OK'>Sil</a></b></font>
            </td>
        </tr>
        </tbody>";
}
echo "</table>";}
mysqli_close($bg);
?>

</div>
</body>
</html>