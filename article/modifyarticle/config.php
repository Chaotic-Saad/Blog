<?php
$con = mysqli_connect('localhost','root','','blog');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    
} 
session_start();
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
<link href="modify.css" rel="stylesheet">

    <title> Modify Article :</title>
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
          <a class="nav-link" href="../profile/profile.php">Profile</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Articles
            </a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
             <a class="dropdown-item" href="../article/article.php">Articles</a>
              <a class="dropdown-item" href="../modifyarticle/modify.php">Modify/Delete</a>

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
              <img src="saad.jpg "class="rounded-circle z-depth-0"
                alt="avatar image" height="35">
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
              aria-labelledby="navbarDropdownMenuLink-55">
              <a class="dropdown-item" href="../profile/profile.php">Profile</a>
              <form method="post" action="suppression.php" id="form">
              <button class="dropdown-item" name="submit" type="submit">Log Out</button>
            </form>
            </div>
          </li>
      </ul>
    </div>  
  </nav>
<div class="container">
<div class="col-lg-10">

<div class="border border-light p-5 modifyarticle" >






<?php
if(isset($_POST['submit'])){
    if( !empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['main']) && !empty($_POST['text'])    ){

        $id = $_POST['id'];
        $title = $_POST['title']; 
        $main = $_POST['main'];
        $text = $_POST['text'];

        //picture upload
        $picture = $_FILES["picture"]["name"]; 
        // detecter le chemin temporaire  
        $fichierTemporaire = $_FILES["picture"]["tmp_name"]; 
        $picture = trim($picture, ' ');
        // uploader le chemin physique de l'image 
        move_uploaded_file($fichierTemporaire,'picture/'.$picture );
        

      $src = $picture;
   echo " <p class='h4 mb-4 text-center'>your article has been modified succesfully :</p> <br> Your modifications :<br> <br>";

        echo  $title . "<br><hr>". $main  ."<br><hr>" .$text."<br><hr>" ;

        echo "<img src=picture/$picture>";  
        
        $sql_update ="UPDATE articles SET  title='$title', main='$main', text='$text' , picture='$picture' WHERE id = $id ";
      
         /* echo $sql_update. '<br />';  */

        mysqli_query($con,$sql_update) or die(mysqli_error($con));

    }
}

        if(isset($_GET['selective'])){
         $id=$_GET["val"];
         $sql_select= "  SELECT id,title,main,text,picture
                         FROM articles
                         WHERE id= $id ";

        $result = mysqli_query ($con, $sql_select)  ;
        while($rows = $result-> fetch_assoc()) {
              /* echo $rows['title'].$rows['main'].$rows['text'].$rows['picture'];  */

           echo "
           
           <H2 class='h4 mb-4 text-center'>Modify your Article :</H2>

           <form enctype='multipart/form-data' method='post'  action='config.php'>

           
           <input type='hidden' value='$rows[id]' name='id'><br><br>

           <label for='textInput'>Title :</label>
           <input name='title' type='text' id='textInput' class='form-control mb-4' value='$rows[title]'>

           <label for='textInput'>Article Description :</label>
           <input name='main' type='text' id='textInput' class='form-control mb-4' value='$rows[main]'>


           <label for='text'>Article</label>
           <textarea name='text' type='text' id id='textInput' class='form-control mb-4' >$rows[text]</textarea>

           
          
           <div class='input-group mb-4'>
           <div class='input-group-prepend'>
               <span class='input-group-text'>Upload</span>
           </div>
           <div class='custom-file'>
               <input name='picture' type='file' class='custom-file-input' id='fileInput' aria-describedby='fileInput'>
               <label class='custom-file-label' for='fileInput'>Update your Article Cover Here </label>
           </div>
       </div>
       
       <div class='custom-control custom-checkbox mb-4'>
           <input type='checkbox' class='custom-control-input' id='defaultContactFormCopy'>
           <label class='custom-control-label' for='defaultContactFormCopy'>Send me a copy of this message via E-mail</label>
       </div>
    
       <button name='submit' class='btn btn-outline-danger btn-block' value='submit' type='submit' >Modify</button>
       <hr>
      </form>
      
      ";
        }
    }
   ?>

</div>
</div>
</div>
<div  id="background" >
</div>


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
</div>

  <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>
<!-- JS CORE -->
<script src="modify.js"></script>
</body>
</html>