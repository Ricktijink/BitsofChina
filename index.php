<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Main style sheet -->
   <link rel="stylesheet" href="CSS/style.css">
   <!-- Owl stylesheet -->
   <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
   <!-- Owl Default Theme -->
   <link rel="stylesheet" href="owl-carousel/owl.theme.css">
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

   <link rel="stylesheet" type="text/css" href="CSS/component.css" />
   <title>Bits of China | Home</title>
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
               <h1>Bits of china</h1>
            </div>
         </div>
         <!-- 1.3 - Navigation -->
         <div class="navigation-menu">
            <nav>
              <a href="index.php" class="active-link">Bits of Xi'an</a>
              <a href="#" id="openAbout_button">About us</a>
              <a href="#">Considering Xi'an</a>
              <a href="#">Studying Chinese</a>
              <a href="#">Message boards</a>
            </nav>
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
         <!-- 2.2 - Featured posts -->
         <div class="featured-posts">
            <!-- Owl carousel -->
            <div class="featured-ribbon">
               Our Picks!
            </div>
            <div id="owl-demo" class="owl-carousel owl-theme">
               <!-- Includes a file with containing all the featured posts -->
               <?php include 'Includes/inc_featured.php';?>
            </div>
         </div>
         <!-- 2.3 - Filter content -->
         <div class="content-filter">
            <div class="filter-category">
               Filters:<br/><br/>
               <span class="categoryBTN on" id="all">All</span>
               <span class="categoryBTN" id="lifestyle">Lifestyle</span>
               <span class="categoryBTN" id="food">Food</span>
               <span class="categoryBTN" id="recreation">Recreation</span>
               <span class="categoryBTN" id="nightlife">Night life</span>
               <span class="categoryBTN" id="student">Student</span>
               <span class="categoryBTN" id="travel">Travel</span>
               <span class="categoryBTN" id="work">Work</span>
            </div>
            <!-- Searchbar -->
            <div class="filter-search">
               Search:<br/><br/>
               <button type="submit"><i class="fa fa-search"></i></button>
               <input type="search" id="search" placeholder="Search...">
            </div>
            <!-- <div class="filter-region">
            Region:<br/><br/>
               <span class="categoryBTN">Xi'an</span>
            </div> -->
            <div class="clearfix"></div>
         </div>
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