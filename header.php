<!doctype html>
<html lang="en">

<head>
  <!-- Required Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Document Title, Description, and Author -->
  <title>Wave - Bootstrap 5 One Page Template</title>
  <meta name="description" content="Wave is a Bootstrap 5 One Page Template.">
  <meta name="author" content="BootstrapBrain">

  <!-- Favicon and Touch Icons -->
  <link rel="icon" type="image/png" sizes="512x512" href="./assets/favicon/favicon-512x512.png">
  <?php  wp_head(); ?>
 
</head>


<body data-bs-spy="scroll" data-bs-target="#bsb-tpl-navbar" data-bs-smooth-scroll="true" tabindex="0">
  <!-- Header -->
  <header id="header" class="bsb-tpl-header-sticky bsb-tpl-header-sticky-animation-no">

    <!-- Navbar 1 - Bootstrap Brain Component -->
    <nav id="scrollspyNav" class="navbar navbar-expand-md wave-bg-blue bsb-navbar bsb-navbar-hover bsb-navbar-caret" style="background: <?php  echo get_theme_mod('brain_color_setting');   ?>">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="./assets/img/branding/wave-logo.svg" class="bsb-tpl-logo" alt="">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul id="bsb-tpl-navbar" class="navbar-nav justify-content-end flex-grow-1">
              <?php 
              
              $nave_menu =  get_option("menu_wave");
              if(isset($nave_menu['home'])) {  ?>

              <li class="nav-item">
                <a class="nav-link active" href="#scrollspyNav" aria-current="page" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Home</a>
              </li>
              
              <?php }
               if(isset($nave_menu['service'])) {  ?>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyServices" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Services</a>
              </li>
             <?php } 
               if(isset($nave_menu['portfolio'])) {   ?>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyPortfolio" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Portfolio</a>
              </li>
              <?php } 
               if(isset($nave_menu['about'])) { ?>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyAbout" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">About</a>
              </li>
              <?php } 
                if(isset($nave_menu['team'])) { ?>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyTeam" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Team</a>
              </li>
              <?php }
              if(isset($nave_menu['pricing'])) {  ?>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyPricing" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Pricing</a>
              </li>
              <?php }
               if(isset($nave_menu['blog'])) {  ?>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyBlog" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Blog</a>
              </li>
              <?php } 
               if(isset($nave_menu['contact'])) {?>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyContact" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Contact</a>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </nav>

  </header>



