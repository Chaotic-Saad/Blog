<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Krona+One|Open+Sans|Michroma|Righteous&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">


<link href="blog.css" rel="stylesheet" >
<link href="slider.css" rel="stylesheet">
    <title>E-sports</title>
</head>
<body>
  <?php
  include"navbar/navbar.php"; 
  ?>




<!-- scroll button -->



  <div class="demo-cont">
    <!-- slider start -->
    <div class="fnc-slider example-slider">
      <div class="fnc-slider__slides">
        <!-- slide start -->
        <div class="fnc-slide m--blend-green m--active-slide">
          <div class="fnc-slide__inner">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span> Valorant </span>
                </div>
                <div class="fnc-slide__heading-line">
       
                </div>
              </h2>
              <button type="button" class="fnc-slide__action-btn">
                Credits
                <span data-text="Credits">Credits</span>
              </button>
            </div>
          </div>
        </div>
        <!-- slide end -->
        <!-- slide start -->
        <div class="fnc-slide m--blend-dark">
          <div class="fnc-slide__inner">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span> Counter Strike Global Offensive </span>
                </div>
               <!--  <div class="fnc-slide__heading-line">
                  <span>Cloud9</span>
                </div> -->
              </h2>
              <button type="button" class="fnc-slide__action-btn">
                Credits
                <span data-text="Credits">Credits</span>
              </button>
            </div>
          </div>
        </div>
        <!-- slide end -->
        <!-- slide start -->
        <div class="fnc-slide m--blend-red">
          <div class="fnc-slide__inner">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span> StarCraft II </span>
                </div>
               <!--  <div class="fnc-slide__heading-line">
                  <span>PAYBACK</span>
                </div> -->
              </h2>
              <button type="button" class="fnc-slide__action-btn">
                Credits
                <span data-text="Credits">Credits</span>
              </button>
            </div>
          </div>
        </div>
        <!-- slide end -->
        <!-- slide start -->
        <div class="fnc-slide m--blend-blue">
          <div class="fnc-slide__inner">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span> League of Legends </span>
                </div>
               <!--  <div class="fnc-slide__heading-line">
                  <span>J H I </span>
                </div> -->
              </h2>
              <button type="button" class="fnc-slide__action-btn">
                Credits
                <span data-text="Credits">Credits</span>
              </button>
            </div>
          </div>
        </div>
        <!-- slide end -->
      </div>
      <nav class="fnc-nav">
        <div class="fnc-nav__bgs">
          <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
          <div class="fnc-nav__bg m--navbg-dark"></div>
          <div class="fnc-nav__bg m--navbg-red"></div>
          <div class="fnc-nav__bg m--navbg-blue"></div>
        </div>
        <div class="fnc-nav__controls">
          <button class="fnc-nav__control">
            I
            <span class="fnc-nav__control-progress"></span>
          </button>
          <button class="fnc-nav__control">
            II
            <span class="fnc-nav__control-progress"></span>
          </button>
          <button class="fnc-nav__control">
            III
            <span class="fnc-nav__control-progress"></span>
          </button>
          <button class="fnc-nav__control">
            IV
            <span class="fnc-nav__control-progress"></span>
          </button>
        </div>
      </nav>
    </div>
    <!-- slider end -->
    <div class="demo-cont__credits">
      <div class="demo-cont__credits-close"></div>
      <h2 class="demo-cont__credits-heading">Made by</h2>
      <img src="https://dribbble.com/shots/2375246-Fashion-Butique-slider-animation" alt="" class="demo-cont__credits-img" />
      <h3 class="demo-cont__credits-name">Saad Eddhaher</h3>
      <a href="https://www.instagram.com/vexndex/" target="_blank" class="demo-cont__credits-link">My Instagram</a>
      <a href="https://www.linkedin.com/in/saad-eddhaher-2294691a1/" target="_blank" class="demo-cont__credits-link">My LinkedIn</a>
      <h2 class="demo-cont__credits-heading">Based on</h2>
      <a href="https://dribbble.com/shots/2375246-Fashion-Butique-slider-animation" target="_blank" class="demo-cont__credits-link">Concept by Automata Studio</a>
      <h4 class="demo-cont__credits-blend">Global Blend Mode</h4>
      <div class="colorful-switch">
        <input type="checkbox" class="colorful-switch__checkbox js-activate-global-blending" id="colorful-switch-cb" />
        <label class="colorful-switch__label" for="colorful-switch-cb">
          <span class="colorful-switch__bg"></span>
          <span class="colorful-switch__dot"></span>
          <span class="colorful-switch__on">
            <span class="colorful-switch__on__inner"></span>
          </span>
          <span class="colorful-switch__off"></span>
        </label>
      </div>
    </div>
  </div>








<div  id="background" >

  <div class="container mt-5">


    <!--Section: Content-->
    <section class="dark-grey-text">
  
      <!-- Section heading -->
      <h2 class="frame-1 , text-center font-weight-bold mb-4 pb-2">TRENDING</h2>
      <!-- Section description -->
      <p id="p1" class="text-center mx-auto w-responsive mb-5">FNATIC:
        " Well, we gottem. GG We're back on the Spodek stage! But, first, we fight for first in our group tomorrow. #IEM "</p>
  
      <!-- Grid row -->
      <div class="row align-items-center">
  
        <!-- Grid column -->
        <div class="col-lg-5">
  
          <!-- Featured image -->
          <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
            <img class="img-fluid" src="post1.PNG" alt="Sample image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-lg-7">
  
          <!-- Category -->
          <a href="#!" class="red-text">
            <h6 class="font-weight-bold mb-3"><i class="fa fa-gamepad"></i>>_Environment</h6>
          </a>
          <!-- Post title -->
          <h4 class="font-weight-bold mb-3"><strong>Nicolas Besombes: "We must enhance the sporting heritage"</strong></h4>
          <!-- Excerpt -->
          <p class="p">The sports heritage is very little protected. Nicolas Besombes talks about France Esport's commitment to perpetuate French esport....</p>
          <!-- Post data -->
          <p>by <a><strong>Carine Fox</strong></a>_November 25, 2019</p>
          <!-- Read more button -->
          <a class="btn red btn-md btn-rounded mx-0" href="http://localhost/Blog/article/details/details.php?id_article=17">Read more</a>
  
        </div>

        
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
      <hr class="my-5">
      
      
    </section>
    <!--Section: Content-->
  
  
  </div>


  <div class="container mt-5">


    <!--Section: Content-->
    <section class="dark-grey-text">
  
     
      <!-- Grid row -->
      <div class="row align-items-center">
  
        <!-- Grid column -->
        <div class="col-lg-5">
  
          <!-- Featured image -->
          <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
            <img class="img-fluid" src="post2.PNG" alt="Sample image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-lg-7">
  
          <!-- Category -->
          <a href="#!" class="red-text">
            <h6 class="font-weight-bold mb-3"><i class="fa fa-gamepad"></i></i>_marketing</h6>
          </a>
          <!-- Post title -->
          <h4 class="font-weight-bold mb-3"><strong>Baptiste Huriez: “We want esports to become a full-fledged activity at FC Nantes</strong></h4>
          <!-- Excerpt -->
          <p class="p">FC Nantes signs a partnership with G. Academy. The idea of ​​associating training with a framework borrowed from sport is gaining ground....</p>
          <!-- Post data -->
          <p>by <a><strong>Saad EDDHAHER</strong></a>_6 décembre 2019</p>
          <!-- Read more button -->
          
          <a class="btn red btn-md btn-rounded mx-0" href="http://localhost/Blog/article/details/details.php?id_article=18">Read more</a>
  
        </div>

        
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
      <hr class="my-5">
      
      
    </section>
    <!--Section: Content-->
  
  
  </div>
  
  <div class="container mt-5">


    <!--Section: Content-->
    <section class="dark-grey-text">
  
     
  
      <!-- Grid row -->
      <div class="row align-items-center">
  
        <!-- Grid column -->
        <div class="col-lg-5">
  
          <!-- Featured image -->
          <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
            <img class="img-fluid" src="post3.PNG" alt="Sample image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-lg-7">
  
          <!-- Category -->
          <a href="#!" class="red-text">
            <h6 class="font-weight-bold mb-3"><i class="fa fa-gamepad"></i></i>_E-Sport GrandStand</h6>
          </a>
          <!-- Post title -->
          <h4 class="font-weight-bold mb-3"><strong>Brosak :” Weareesport veut recevoir la communauté et le grand public”.</strong></h4>
          <!-- Excerpt -->
          <p class="p">Après avoir mis fin a sa carrière de joueur professionnel, Brosak revient dans l’esport avec un nouveau projet innovant : Weareesport....</p>
          <!-- Post data -->
          <p>by <a><strong>Jhon Muller</strong></a>_10 septembre 2019</p>
          <!-- Read more button -->
          <a class="btn red btn-md btn-rounded mx-0" href="http://localhost/Blog/article/details/details.php?id_article=19">Read more</a>
  
        </div>

        
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
      <hr class="my-5">
      
      
    </section>
    <!--Section: Content-->
  
  
  </div>
  <footer class="page-footer font-small pt-4 footer">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase"><a class="navbar-brand" href="../blog.php"><img src="Automata.PNG" height="30" alt="Automata"></a></h5>
      <p>“Blogging is like work, but without coworkers thwarting you at every turn.” -Scott Adams</p>
      <hr>
    <div>
    <h5>Where you can find us !</h5> 3154 Doctors Drive, Los Angeles, California
       <hr>
       <h5>Take an Appointment :</h5>
       Phone Number : 310-341-3592
    </div>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase"><strong>Links</strong></h5><br>

      <ul class="list-unstyled" style="font-size:16px;">
        <li>
          <a href="./profile/profile.php">Profile</a>
        </li><br>
        
        <li>
          <a href="./article/article.php">Articles</a>
        </li><br>
        <li>
          <a href="./post_article/postarticle.php">Post</a>
        </li><br>
        <li>
          <a href="mailto:saadedd51@gmail.com?subject=Subject of your contact here !">Contact</a>
        </li><br>
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Get in touch with us !</h5><br>

      <ul class="list-unstyled" style="font-size:16px;">
        <li>
          <a href="https://www.facebook.com/KATEVOLVED90">Facebook</a>
        </li><br>
        <li>
          <a href="https://www.instagram.com/vexndex/">Instagram</a>
        </li><br>
        <li>
          <a href="https://www.linkedin.com/in/saad-eddhaher-2294691a1/">LinkedIn</a>
        </li><br>
        <li>
          <a href="mailto:saadedd51@gmail.com?subject=Subject of your contact here !">Gmail</a>
        </li><br>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> Automata.com</a>
</div>
<!-- Copyright -->

</footer>
</div>
  <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>
<script src="slider.js"></script>
<script src="blog.js"></script>
</body>
</html>