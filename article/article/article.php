<?php

 $con= mysqli_connect('localhost','root','','blog');

    if(isset($_POST['regName'])){
        $id=$_POST["val"];
        $sql_delete = "DELETE from articles where id=$id";
        mysqli_query($con,$sql_delete) ;
}
session_start();
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


<link href="article.css" rel="stylesheet" >

    <title>Articles</title>
</head>
<body>
<!--Navbar -->
<nav id="navb" class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
    <a class="navbar-brand" href="../blog.php"><img src="../Automata.PNG" height="30" alt="Automata"></a>
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
              <img src="../saad.jpg "class="rounded-circle z-depth-0"
                alt="avatar image" height="35">
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
              aria-labelledby="navbarDropdownMenuLink-55">
              <a class="dropdown-item" href="../profile/profile.php">Profile</a>
              <form method="post" action="../suppression.php" id="form">
              <button class="dropdown-item" name="submit" type="submit">Log Out</button>
            </form>
           
            </div>
          </li>
      </ul>
    </div>  
  </nav>
  <br>
  <br>
  <br>
  <br>
  <h2 class="frame-1 , text-center font-weight-bold mb-4 pb-2">Latest Articles</h2>
  <hr>

       <!--  CARD REPLICA CENTER CODE -->
      
  <div class="row">
    <?php
      $id=$_SESSION['id'];
      $tab = "SELECT id,title, main, id_user , picture FROM articles";
      $result = $con->query($tab);
      if($result->num_rows > 0):
      while($rows = $result->fetch_assoc()):
      ?> 
 
      <!-- Card -->
      <div class="col-lg-3">
    <div class="card">
    <!-- Card image -->
    <div class="view overlay">
      <img class="card-img-top" src="../picture/<?php echo $rows ['picture']?>" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!-- Card content -->
    <div class="card-body">

      <!-- Title -->
      <h4 class="card-title"><?php  echo $rows['title'];?></h4>
      <!-- Text --> 
      <p class="card-text"><?php echo $rows['main'];?></p>
      <!-- Button -->
      <form>
      <a href="../details/details.php?id_article=<?php echo $rows['id'];?>" class="btn btn-outline-danger btn-lg btn-block waves-effect" >Read More</a>
      </form>
      <br>

<div class="form-row mb-4">
<?php if($id==$rows ['id_user']) :?>

         <form  method ='post' action='article.php'>
         <input  type='hidden' name='val' value="<?php echo $rows['id'] ?>" />
      <button name='regName' type="submit" class="btn btn-default btn-sm">Delete</button>
         </form>
   
      <form  method ='Get' action='../modifyarticle/config.php'>
      <input  type='hidden' name='val' value="<?php echo $rows['id'] ?>" />
       <button name='selective' type='submit' value='edit' class="btn btn-primary btn-sm">Edit</button>
       </form>
<?php endif;?>
</div>


    </div>
    </div>
    </div>
<!-- Card -->
<?php 
endwhile;
endif;

?>

</div>
  </div>
  
</div>

<?php include '../footer/footer.php';   ?>
  <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>
<script src="article.js"></script>
<script src="article.js"></script>
</body>
</html>