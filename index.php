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
   <!-- Jquery -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <title>Bits of China | Home</title>
</head>
<body>
   <!-- 0.0 - Container -->
   <div class="container">
      <!-- 1.1 - Sidebar -->
      <div class="left-sidebar">
         <!-- 1.2 - Logo -->
         <div class="logo">
            <!-- TODO: fix or remove id -->
            <div class="logo-image" id="open">
               <img src="Images/logo.png" alt="Logo">
            </div>
            <!-- TODO: fix or remove id -->
            <div class="logo-text" id="close">
               <h1>Bits of China</h1>
            </div>
         </div>
         <!-- 1.3 - Introduction -->
         <div class="sidebar-introduction">
            <p>
              What's China really like? <br> 
              We provide the bits so you can put them together, one bit at a time.
            </p>
         </div>
         <!-- 1.4 - Left Sidebar Footer -->
         <div class="left-sidebar-footer">
            <div class="footer-socialmedia">
                  <!-- Facebook -->
                  <div class="soc-icon" id="soc-1">
                     <a href="https://www.facebook.com/Bits-of-China-869697049899478/" target="_blank"><i class="fab fa-facebook-f"></i></a>
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
            <div class="footer-copyright">
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
               Our series!
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
              <div class="filter-bar">
                  <span class="categoryBTN on" id="all">All</span>
                  <span class="categoryBTN" id="lifestyle">Lifestyle</span>
                  <span class="categoryBTN" id="food">Food</span>
                  <span class="categoryBTN" id="recreation">Recreation</span>
                  <span class="categoryBTN" id="nightlife">Night life</span>
                  <span class="categoryBTN" id="student">Student</span>
                  <span class="categoryBTN" id="travel">Travel</span>
                  <span class="categoryBTN" id="work">Work</span>
               </div>
            </div>
            <!-- Searchbar -->
            <!-- <div class="filter-search">
               Search:<br/><br/>
               <button type="submit"><i class="fa fa-search"></i></button>
               <input type="search" id="search" placeholder="Search...">
            </div> -->
            <div class="clearfix"></div>
         </div>
         <!-- 2.4 - Page content -->
         <div class="page-content">
            <!-- Includes a file with containing all the posts -->
            <ul class="grid effect-1" id="grid">
               <?php include 'main_posts.php';?>
            </ul>
            <!-- ?.? - Go to top button -->
            <a href="#" id="myBtn"><i class="far fa-arrow-alt-circle-up fa-2x"></i></a>
            <!-- Footer -->
            <div class="footer-page">
               Bits of China, 2018. Rick Tijink
            </div>
         </div>
      </div>
      <!-- 3.1 - Social bar -->
      <div class="page-sidebar-right" id="sidebarRight">
          <div class="cover">
            <div class="slidebar">
                <div class="slide" id="slide1">
                  <?php include 'Includes/inc_socialbar.php';?>
                </div>
            </div>
            <div class="clearfix"></div>
          </div>
      </div>
    </div>
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
