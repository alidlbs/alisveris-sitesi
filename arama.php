
<?php require('baglanti/baglan.php'); ?>
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
      .bosluk{
        padding: 0.5%;
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
      
 <div class="container-sm">
        <form action="arama.php" method="post">
<div class="row" style="padding: 2%;">
    <div class="col-6">
         <select class="form-select" aria-label="Default select example" name="sec">
            <option selected>neye gore arama yapacaksınız</option>
            <option value="uadi">adı</option>
            <option value="utur">tur</option>
          </select>  
    </div>
    <div class="col-6">
         <div class="input-group">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" name="ara"/>
        <button type="submit" name="gonder" class="btn btn-outline-primary">search</button>
      </div>
    </div>
</div>
      


   
       
      
    
         
    </div>
    </form>
    <div class="row">
    
    <?php


if($baglanti->connect_error)
   {
     echo "baglamadınız  çünkü : ". $baglanti->connect_error;  
   } 
   else
    
      { 
         if(isset($_POST['ara']))
            {
        $sec=$_POST["ara"];
        $turi=$_POST["sec"];
        if ($turi=="uadi") 
        {
                $sorgucuk="SELECT * FROM urun WHERE (UrunAdi='$sec')";
            }
         else if ($turi=="utur")
            {
                
                $sorgucuk="SELECT * FROM urun WHERE (UrunTuru='$sec')";
            }
            else{echo" <script>alert('bos gecme');</script>";}

        
    }
   
  
 
}
if(isset($_POST['ara']))
{

$git=mysqli_query($baglanti,$sorgucuk);
$deneme=mysqli_num_rows($git);
if ($deneme==0) echo "Herhangi bir Kayıt Bulunamadı"; 



else
{
echo $deneme." adet kayıt vardır..<br>";
echo "<table border='1' bordercolor='blue' bgcolor='#fffff' align='center'>
<tr align='center'>
<td>
   <font color='#1254F6'><b>Ürün Id</b></font>
</td>
<td>
   <font color='#1254F6'><b>Ürün Adı</b></font>
</td>
<td>
   <font color='#1254F6'><b>Ürün Fiyatı</b></font>
</td>
<td>
   <font color='#1254F6'><b>Ürün Açıklaması</b></font>
</td>
<td>
   <font color='#1254F6'><b>Ürün Adeti</b></font>
</td>
<td>
   <font color='#1254F6'><b>Ürün Türü</b></font>
</td>

</tr>";}
while($str=mysqli_fetch_array($git))
{
   echo "
<tr align='center'>
<td>
   <font color='#1254F6'><b>$str[0]</b></font>
</td>
<td>
   <font color='#1254F6'><b>$str[1]</b></font>
</td>
<td>
   <font color='#1254F6'><b>$str[2]</b></font>
</td>
<td>
   <font color='#1254F6'><b>$str[3]</b></font>
</td>
<td>
   <font color='#1254F6'><b>$str[4]</b></font>
</td>
<td>
   <font color='#1254F6'><b>$str[5]</b></font>
</td>


</tr>";
}
echo "</table>";        
}

$baglanti->close();
?>

    </div>


   
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
