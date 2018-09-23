<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Main style sheet -->
   <link rel="stylesheet" href="CSS/main.css">
   <!-- Owl stylesheet -->
   <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
   <!-- Owl Default Theme -->
   <link rel="stylesheet" href="owl-carousel/owl.theme.css">
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

   <title>Bits of China | Coffee Creeps</title>
</head>
<body>
   <!-- 0.0 - Container -->
   <div class="container">
      <!-- 1.1 - Sidebar -->
      <div class="page-sidebar-left">
         <!-- 1.2 - Logo -->
         <div class="logo">
            <div class="logo-image"></div>
            <div class="logo-text">
               <h1>Bits of China</h1>
            </div>
         </div>
         <!-- 1.3 - Navigation -->
         <div class="navigation-menu">
            <p>
              <span class="nav-title">Coffee Creeps</span>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis reiciendis eius blanditiis, 
              quasi quia.
              <a href="index.php" class="back_btn1">BACK</a>
            </p>
         </div>
         <!-- 1.4 - Footer -->
         <div class="sidebar-footer">
            <div class="footer-social">
                  <!-- Facebook -->
                  <div class="soc-icon" id="soc-1">
                     <i class="fab fa-facebook-f"></i>
                  </div>
                  <!-- LinkedIn -->
                  <div class="soc-icon" id="soc-2">
                     <i class="fab fa-instagram"></i>
                  </div>
                  <!-- Email -->
                  <div class="soc-icon" id="soc-3">
                     <i class="far fa-envelope-open"></i>
                  </div>
                  <!-- CV -->
                  <div class="soc-icon" id="soc-4">
                     <i class="far fa-user"></i>
                  </div>
            </div>
            <div class="footer-copy">
               Bits of China, 2018.
               <span>Rick Tijink</span>
            </div>
         </div>
      </div>
      <!-- 2.1 - Content container -->
      <div class="page-content-container">
        <span class="series-title">Coffee Creeps</span>
         <!-- 2.4 - Page content -->
         <div class="page-content">
            <!-- Includes a file with containing all the posts -->
            <ul class="grid effect-1" id="grid">
               <?php include 'Includes/inc_posts.php';?>
            </ul>
            <!-- ?.? - Go to top button -->
            <a href="#" id="myBtn"><i class="far fa-arrow-alt-circle-up fa-2x"></i></a>
         </div>
      </div>
      <!-- 3.1 -->
      <div class="page-sidebar-right">
         <?php include 'Includes/inc_socialbar.php';?>
      </div>
   </div>
   <!-- Masonry -->
   <script src="JS/jquery-3.3.1.min.js"></script>

   <!-- Include js plugin -->
   <script src="owl-carousel/owl.carousel.js"></script>
   <!-- Main code file -->
   <script src="JS/instafeed.min.js"></script>
   <!-- Filter & search -->
   <script src="JS/filter.js"></script>
   <script src="JS/masonry.pkgd.min.js"></script>
   <script src="JS/imagesloaded.pkgd.min.js"></script>
   <!-- Main code file -->
   <script src="JS/script.js"></script>
</body>
</html>
