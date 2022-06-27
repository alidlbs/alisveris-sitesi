

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>musteri giris</title> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>

<style>
    #vanta{
    width: 100%;
    height: 100vh;
}
</style>

</head>
<body>
 <div id="vanta"></div>
   
   



    <div class="loginBox"> <img src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/000000/external-login-100-most-used-icons-flaticons-flat-flat-icons.png"/>
        <h3>Hoşgeldin <br> musteri giris</h3>
        <form action="musteri/kontrol.php" method="post">
            <div class="inputBox"> <input id="uname" type="text" name="adiniz" placeholder="kullanıcı"> <input id="pass" type="password" name="sifre" placeholder="şifre"> </div> <input type="submit" name="" value="giriş">
            <input type="reset" value="sıfırla" style="background-color: black;color: aliceblue;">
        </form> 
        <div class="text-center">
            <a href="admin.php" class="btn btn-secondary disabled" role="button" aria-disabled="true">Yonetici</a>
              <a href="uyeOl.php" style="background-color: black;color: aliceblue;float: left;"role="button" >uye ol</a>
            <p style="color: #59238F; float: right;">haydi söyle</p>
        </div>
    </div>
</body>
</html> 
<script>
    VANTA.BIRDS({
      el: "#vanta",
      mouseControls: true,
      touchControls: true,
      gyroControls: false,
      minHeight: 200.00,
      minWidth: 200.00,
      scale: 1.00,
      scaleMobile: 1.01
    })
    </script>