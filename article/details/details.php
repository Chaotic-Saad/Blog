<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Krona+One|Open+Sans|Michroma|Righteous&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link href="details.css" rel="stylesheet">
  <title>Article Home</title>
</head>

<?php
include '../config.php';

if(isset($_GET['id_article']) ){
    $afficher_article= $_GET['id_article'];

    /* echo $afficher_article; */

    $requete_art="SELECT id, title,main,picture,text FROM `articles` WHERE id=$afficher_article";
    

  /*   echo $requete_art; */

    $res= mysqli_query($con,$requete_art) or die(mysqli_error($con));

    $row = mysqli_fetch_array($res);
   

   /*  echo $res->num_rows; */

    /* echo $row['title']; */

} else {echo '<h1> Article NOT FOUND </h1>';}
?>

<body>
  <!--Navbar -->
  <nav id="navb" class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
    <a class="navbar-brand" href="../blog.php"><img src="Automata.PNG" height="30" alt="Automata"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
      aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">

        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Articles
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="../article/article.php">Articles</a>


          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Contact
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">Email</a>
            <a class="dropdown-item" href="#">Instagram</a>
            <a class="dropdown-item" href="#">Facebook</a>
          </div>
        </li>

      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <form class="form-inline">
          <div class="md-form my-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          </div>
        </form>
        <li class="nav-item avatar dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <img src="saad.jpg " class="rounded-circle z-depth-0" alt="avatar image" height="35">
          </a>
          <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
            aria-labelledby="navbarDropdownMenuLink-55">
            <a class="dropdown-item" href="#">Profile</a>
            <form method="post" action="suppression.php" id="form">
              <button class="dropdown-item" name="submit" type="submit">Log Out</button>
            </form>
            <a class="dropdown-item" href="#">Help</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>


  <?php 
if ($res->num_rows>0) {
?>

  <!-- Jumbotron -->
  <div class="flex-fill text-align">
    <div class="jumbotron text-center">
      <hr>
      <!-- Title -->
      <h4 class="card-title h4 pb-2"><strong><?php echo $row['title']; ?></strong></h4>

      <!-- Card image -->
      <div class="view overlay my-4">

        <img class="img-fluid" src="../picture/<?php echo $row['picture']?>" alt="Card image cap">
        <a href="#">
          <div class="unique mask rgba-white-slight"><?php echo $row['main']; ?></div>
        </a>
      </div>

      <h5 class="indigo-text h5 mb-4"></h5>

      <p class="card-text "><?php echo $row['text']; ?></p>

      <!-- Linkedin -->
      <a class="fa-lg p-2 m-2 li-ic"><i class="fab fa-linkedin-in grey-text"></i></a>
      <!-- Twitter -->
      <a class="fa-lg p-2 m-2 tw-ic"><i class="fab fa-twitter grey-text"></i></a>
      <!-- Dribbble -->
      <a class="fa-lg p-2 m-2 fb-ic"><i class="fab fa-facebook-f grey-text"></i></a>

    </div>
    <!-- Jumbotron -->
  </div>
  </div>
 
  <?php 
}
else{

?>
  <div class="alert alert-warning" role="alert">
    Article Not Found 404 !
  </div>

  <?php
}
?>

<!-- Footer -->
<footer class="page-footer font-small pt-4 footer">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase"><a class="navbar-brand" href="../blog.php"><img src="Automata.PNG" height="30" alt="Automata"></a></h5>
      <p>Here you can use rows and columns to organize your footer content.</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Links</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Profile</a>
        </li>
        <li>
          <a href="#!"></a>
        </li>
        <li>
          <a href="#!">Link 3</a>
        </li>
        <li>
          <a href="#!"></a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Links</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Facebook</a>
        </li>
        <li>
          <a href="#!">Instagram</a>
        </li>
        <li>
          <a href="#!">LinkedIn</a>
        </li>
        <li>
          <a href="#!">Gmail</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer --> 
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
  </script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>
  <script src="details.js"></script>

</body>

</html>