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
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="mainPage.php">
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

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="duzenleme.php" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
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
      <div class="container-fluid">
        
      
      <a class="navbar-brand" href="#">benim sitem</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="mainPage.php">anasayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="yeniKayit.php">yeni kayit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="duzenleme.php">duzenleme</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="silme.php" >silme</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="arama.php" >arama</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



    <div class="container">
      
        <?php
  
    $gelenId=$_GET["urId"];
    $gelenAdi=$_GET["urAd"];
    $gelenFiyat=$_GET["urFiy"];
    $gelenAcik=$_GET["urAc"];
    $gelenAdet=$_GET["urAdet"];
    $gelenTuru=$_GET["urTur"];
  ?>
        
  
      <form action="duzenleKaydet.php" method="post" enctype="multipart/form-data">
 
            <div class="col-8-auto">
                  
          
<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Ürün id</label>
<input class="form-control" type="text" name="urId" aria-label="default input example" value="<?php echo $gelenId ?>">
</div>
<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Ürün adı</label>
<input class="form-control" type="text" name="urAd"  aria-label="default input example"  value="<?php echo $gelenAdi ?>">
    
</div>
<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Ürün fiyat</label>
<input class="form-control" type="text" name="urFiy" aria-label="default input example" value="<?php echo $gelenFiyat ?>">
    
</div>
<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Ürün adet</label>
<input class="form-control" type="text" name="urAdet" aria-label="default input example"  value="<?php echo $gelenAdet ?>">
</div>
<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Ürün türü</label>
<input class="form-control" type="text" name="urTur" aria-label="default input example"  value="<?php echo $gelenTuru ?>">
</div>
<div class="mb-3">

    
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Ürün Açıklaması</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="urAc" rows="3"><?php echo $gelenAcik ?></textarea>
</div>
<div class="col">
    <input class="btn btn-primary" type="submit" name="sbmt" value="Kaydet">
    <input class="btn btn-primary" type="reset" value="sifirla">
</div>



   
  </div>

    
    </form>
  
  </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
