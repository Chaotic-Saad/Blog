<?php require "config.php";

session_start();
?>
<?php 
if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
  header('Location:../../authentification/login/login.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Krona+One|Open+Sans|Michroma|Righteous&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link href="postarticle.css" rel="stylesheet">
<link rel="stylesheet" href="navbar/navbar.css">
    <title>Post Article :</title>
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
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <img src="saad.jpg "class="rounded-circle z-depth-0"
                alt="avatar image" height="35">
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




<br>
  <form class="border border-light p-5" enctype="multipart/form-data" method="POST" action="result.php">
  
<div class="container">
<div class="col-lg-10">


<p id="postarticle" class="h4 mb-5 text-center">Post Article :</p>

<hr>
<label id="titles" for="textInput">Title :</label>
<input required name="title" type="text" id="textInput" class="form-control mb-4" placeholder="Write your Article Title here">

<label id="titles" for="textInput">Article Description :</label>
<input required name="main" type="text" id="textInput" class="form-control mb-4" placeholder="Write your Article description here">

<label  id="titles" for="defaultSelect">Category :</label>
<select name="id_categorie" id="defaultSelect" class="browser-default custom-select mb-4">

    <option  value="" disabled="">Choose a Category </option>
    
    <?php 
    $tab="SELECT id, name FROM category";
    echo $tab;
   $result=$con->query($tab);
   if($result->num_rows > 0):
   while($rows=$result->fetch_assoc()):?>
    <option value="<?php echo $rows['id']?>" > <?php echo $rows['name']; ?> </option>
 
    <?php   
endwhile;
endif;
?>
</select>

<label id="titles" for="textarea">Article :</label>
<textarea required name="editor" id="textarea" class="form-control mb-4" placeholder="Here you can start your Article redaction"></textarea>


<div class="custom-file">
    <input name="avatar" type="file" class="custom-file-input picture" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" required>
    <label  class="custom-file-label picture" for="inputGroupFile01">Choose file</label>
  </div>
<br>
<br>
<div class="custom-control custom-checkbox mb-4">
    <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
    <label id="titles"   class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message via E-mail</label>
</div>
<HR>
<button name="submit" class="btn btn-outline-danger btn-block" type="submit"><b>Post</b>  </button>

</div>
</div>
</div>
  </form>
<div  id="background" >



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
</div>

  <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>7
<!-- JS CORE -->


<script src="postarticle.js"></script>
</body>
</html>