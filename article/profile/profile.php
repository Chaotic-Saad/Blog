<?php

session_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
  header('Location:../../authentification/login/login.php');
}
$con= mysqli_connect('localhost','root','','blog');
?>
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
<link href="profile.css" rel="stylesheet" >

    <title>Profile</title>
</head>
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
          <a class="nav-link" href="../blog.php">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Articles
            </a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
             <a class="dropdown-item" href="../article/article.php">Articles</a>
             <a class="dropdown-item" href="../post_article/postarticle.php">Post a Article</a>

            </div>
          </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Contact
            </a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="#">Email</a>
              <a class="dropdown-item" href="https://www.instagram.com/saad_edd_/">Instagram</a>
              <a class="dropdown-item" href="https://www.facebook.com/KATEVOLVED90">Facebook</a>
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
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <img src="profilepictures/<?php echo $_SESSION['picture']?>" class="rounded-circle z-depth-0"
                alt="avatar image" width="35" height="35">
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
              aria-labelledby="navbarDropdownMenuLink-55">
              
              <form method="post" action="suppression.php" id="form">
              <button class="dropdown-item" name="submit" type="submit">Log Out</button>
            </form>
            
            </div>
          </li>
      </ul>
    </div>  
  </nav>

  <?php
$tab = "SELECT id,firstname,lastname,age,email,country,picture,created_date FROM user WHERE $_SESSION[id] ";
$result = $con->query($tab);
$rows= mysqli_fetch_assoc($result);
?> 


<br>
<h1 class="frame-1 , text-center font-weight-bold mb-4 pb-2">Welcome  to your Profile <?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?> !</h1>
<hr>
<div class="container">
  <div class="row">
    <div class="col"> <img class="img-fluid" src="profilepictures/<?php echo $_SESSION['picture']?>" alt="Card image cap">
<br>
<br>

<form  enctype="multipart/form-data" method="POST" action="pictureupload.php">
<div class="custom-file">
    <input name="avatar" type="file" class="custom-file-input picture" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" required>
    <label  class="custom-file-label picture" for="inputGroupFile01">Upload your Profile Picture</label>
    <hr>
    <button name="submit" class="btn btn-outline-danger btn-block" type="submit"><b>Update</b>  </button>
    
  </div>
  <br>
  <br>
  <br> 
  <br>
</form>
</div>
    <div class="col">
        <B> -Your ID :</B> <?php echo $_SESSION["id"] ?>
        <hr>
        <B>-Your FirstName :</B> <?php echo $_SESSION["firstname"] ?>
        <hr>
        <B>-Your Lastname :</B> <?php echo $_SESSION["lastname"] ?>
        <hr>
        <B>-Your Age :</B> <?php echo $_SESSION["age"] ?>
        <hr>
        <B>-Your E-mail :</B> <?php echo $_SESSION["email"] ?>
        <hr>
        <B>-Your Account Creation Date :</B> <?php echo $_SESSION["created_date"] ?>

</div>
    <div class="w-100"></div>
  </div>
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
<!-- Footer --> 


     <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>
</body>
</html>