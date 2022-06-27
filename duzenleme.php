<?php require('baglanti/baglan.php'); ?>
<?php include('fonksiyon/yonledir.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>

       <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
  
      
<header class="navbar  navbar-dark bg-danger sticky-top  flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"> Hos geldin </a>
 
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
    <a class="nav-link px-3" href="index.php">cikis</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href='mainPage.php'>
              <span data-feather="home"></span>
          anasayfa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="uyekabul.php">
              <span data-feather="file"></span>
           izinler
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="liste.php">
              <span data-feather="shopping-cart"></span>
             urunler
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="musteriler.php">
              <span data-feather="users"></span>
              musteriler
            </a>
          </li>
          
          
        </ul>

        <hr>
        <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <a class="nav-link" href="arama.php">
              <span data-feather="file-text"></span>
           arama
            </a>
          </li>  <li class="nav-item">
            <a class="nav-link" href="yeniKayit.php">
              <span data-feather="file-text"></span>
           urun ekle
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="liste.php">
              <span data-feather="file-text"></span>
         listeleme
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="silme.php">
              <span data-feather="file-text"></span>
           silme
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="duzenleme.php">
              <span data-feather="file-text"></span>
         duzenle
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <?php
$A=0;
if($baglanti->connect_error)
echo "baglamadınız  çünkü : ". $baglanti->connect_error;
else
{  
    $sorgu="SELECT * FROM urun,resimler
    where resim_id = UrunId";
    $git=mysqli_query($baglanti,$sorgu);
   $deneme=mysqli_num_rows($git);
   echo $deneme."adet kayıt vardı...<br>";
   echo"
   <table class='table'>

   <thead>
   <tr>
   <th scope='col'>SIRA</th>
     <th scope='col'>urun ıd</th>
     <th scope='col'>urun adı</th>
     <th scope='col'>urun fiyat</th>
     <th scope='col'>urun açıklama</th>
     <th scope='col'>urun adeti </th>
     <th scope='col'>urun turu </th>
     <th scope='col'>resim </th>
     <th scope='col'>DUZENLEME </th>
   </tr>
 </thead>


   
";

while($str=mysqli_fetch_array($git)){
    $A++;
echo"
<tbody>
<tr>
<td>$A</td>
<th scope='row'>$str[0]</th>
<td>$str[1]</td>
<td>$str[2]</td>
<td>$str[3]</td>
<td>$str[4]</td>
<td>$str[5]</td>
<td><img src=$str[7] width='200' height='100' alt='' /> <br /></td>
<td>
<font color='#FFFFFF'><b><a href='duzenlemeKayit.php?&urId=$str[0]&urAd=$str[1]&urFiy=$str[2]&urAc=$str[3]&urAdet=$str[4]&urTur=$str[5]&dosya=$str[6]'>Düzenle</a></b></font>
</td>
</tr>

</tbody>



";
}
echo"</table>";
}
 $baglanti->close();
    ?>

  
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
