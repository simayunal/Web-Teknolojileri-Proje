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
               <li><a href="Login.html">Login</a></li>
            </ul>
         </nav>
          
         <main>
          
            <script type="text/javascript">

            function getParameterByName(name, url) 
            {
                    if (!url) url = window.location.href;
                     name = name.replace(/[\[\]]/g, '\\$&');
                    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                        results = regex.exec(url);
                     if (!results) return null;
                     if (!results[2]) return '';
                     return decodeURIComponent(results[2].replace(/\+/g, ' '));
                }
  
                var name = getParameterByName('name');
                var email = getParameterByName('email');
  
          </script>
  
          <table class="table">
              <thead class="table-info">
                <tr>
                  <th>Başarılı Bir şekilde Gönderdiniz </th>
                </tr>
              </thead>
  
              <tbody>
                <tr>
                  <td>İsminiz</td>
                  <td>
                    <script>document.write(name);
                    </script>
                  </td>
                </tr>
    
                <tr>
                  <td>E-Mail</td>
                  <td>
                    <script>document.write(email);
                    </script>
                  </td>
                </tr>
    
              
    
              </tbody>
            
          </table>	
  
        
          </main>
        
       </section>   
          <footer>Web Teknolojileri Proje &copy | Simay Ünal 2022</footer>
          <!-- BOOTSTRAP -->
        	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	        <!-- JAVASCRIPT -->
    </div>
    
</body>
</html>