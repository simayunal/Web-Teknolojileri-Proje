<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
    <div id="social-header"> <font>Benim Web Sitem</font>
        <i class="fas fa-search"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-google"></i>
    </div>
    <div class="container"> 
        <section>
          <nav> 
            <ul>
                <li><a href="#" class="active">Hakkında</a></li>
                <li><a href="İletişim.html">İletişim</a></li>
                <li><a href="ÖzGeçmiş.html">Öz Geçmiş</a></li>
                <li><a href="Şehrim.html">Şehrim</a></li>
                <li><a href="İlgiAlanlarım.html">İlgi Alanlarım</a></li>
                <li><a href="mirasımız.html">Mirasımız</a></li>
                <li><a href="Login.html">Login</a></li>
            </ul>
         </nav>
          
         <main>

         <?php
              if(isset($_POST['email']) && isset($_POST['sifre']))  // form gönderilmiş mi
              {
               $email = $_POST['email'];
               $sifre = $_POST['sifre'];
  
              if(empty($email) || empty($sifre))// gönderilenler boş mu
               { 
                echo 'Lütfen boş bırakmayın';
               } 

              else {
               if($email == 'b211210086@ogr.sakarya.edu.tr' && $sifre == '123') // bilgiler doğru mu
              { 

              session_start();
              $_SESSION['email'] = 'b211210086@ogr.sakarya.edu.tr';
              $_SESSION['sifre'] = '123';
              echo 'Giriş yaptınız! Hoşgeldin B211210086';
              } 

              else {
               echo 'email ya da şifre yanlış! Tekrar Deneyiniz.';
              }
             }
            } 
            else {
            echo 'Lütfen formu kullanın';
              }
            ?>
       </main> 
        </section>   
          <footer>Web Teknolojileri Proje &copy | Simay Ünal 2022</footer>
    </div>
    
</body>
</html>