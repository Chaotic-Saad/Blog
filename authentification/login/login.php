<?php
session_start();
/* print_r($_SESSION); */

 //////////////////////////////////////////////////////connexion//////////////////////////////////////////////////
 $con = mysqli_connect('localhost','root','','blog');
 if ($con->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

    if(isset($_POST['submit'])){
        $email=$_POST['emailconnection'];
$requet="SELECT `id` FROM `user` WHERE email= '$email'";

 $query = $con->query($requet);
 $rows=$query->fetch_assoc();


 if($rows){
    $password=$_POST['motDePasseConnect'];
    $query2 = $con->query("SELECT * FROM `user` WHERE email= '$email'");
    $rows2=$query2->fetch_assoc();

    $hash=$rows2['password'];
    print_r($rows2) ;
if(password_verify($password, $hash)) {
 
                 echo "XXXXXXXXXxx";
echo 'vous etes connecter !';
        print_r($password ,$hash);
        
        $_SESSION["id"]=$rows2["id"];
        $_SESSION["age"]=$rows2["age"];
        $_SESSION["email"]=$rows2["email"];
        $_SESSION["password"]=$rows2["password"];
        $_SESSION["firstname"]=$rows2["firstname"];
        $_SESSION["lastname"]=$rows2["lastname"];
        $_SESSION["picture"]=$rows2["picture"];
        $_SESSION["created_date"]=$rows2["created_date"];
        

        header('LOCATION: ../../article/blog.php');


    } else {
        echo"<div class='alert alert-danger' role='alert'>
        informations incorrectes !
        </div>";
       
     
    }

 }else {
    echo"<div class='alert alert-danger' role='alert'>
     This Account is has not been Found in X-BASE !__<a class='link' href='../signup/signup.php'>New User ? Join us by clicking here !</a>
     


     </div>";
 }
}
 

 ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="stylelogin.css" rel="stylesheet">.
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css" rel="stylesheet">

  <title>Login</title>
</head>

<?php
if(!empty($_POST)){
    $errors = array();
    if(empty($_POST['emailconnection']) || !filter_var($_POST['emailconnection'], FILTER_VALIDATE_EMAIL)){
        $errors["email"]="l'email n'est pas valide";
    }
    if(empty($_POST['motDePasseConnect']) ){
        $errors['password'] = "le mot de passe n'est pas valide";
        
    }

}
if(empty($errors)){

}else{
    ?>
<div class="alert alert-danger">
  <p>les informations sont incorrectes </p>
  <ul>
    <?php foreach($errors as $value){?>
    <li><?php echo $value; ?> </li>

    <?php }


    ?>
  </ul>
</div>
<?php }

?>



<body id="body">

  <h1 class="ml11">
    <span class="text-wrapper">
      <span class="line line1"></span>
      <span class="letters">Hello Goodbye</span>
    </span>
  </h1>



  <div class="container">
    <div id="ROW" class="row d-flex justify-content-center align-items-center">
      <div class="row d-flex justify-content-center align-items-center">

        <div class="col-md">
          <div class="form d-flex justify-content-between">

            <div class="image">
              <img src="zte.png">
            </div>

            <form method="post" class="my-form">
              <h4 class="font-weight-bold mb-3">Log in to your account :</h4>
              <p class="mdb-color-text">Just Fill in these text fields and you will be good to go!</p>

              <!-- Email address -->
              <div class="md-form md-outline">
                <i class="fas fa-envelope prefix"></i>
                <input name="emailconnection" value='<?php if(isset($_POST['email'])){ echo $_POST['email'] ;}?>'
                  type="email" id="emailExample" class="form-control">
                <label for="emailExample">E-mail address</label>
              </div>

              <!-- Password -->
              <div class="md-form md-outline">
                <i class="fas fa-lock prefix"></i>
                <input name="motDePasseConnect" type="password" id="passwordExample" class="form-control">
                <label for="passwordExample">Password</label>
              </div>

              <div class="space">
                <div class="float-right">
                  <!-- <button class="btn btn-rounded" type="button">Log in</button> -->
                  <button type="submit" name="submit" class="btn btn-primary">connexion</button>
                </div>
              </div>
              <hr>
              <a class="link" href="#">Forgot password? Click here.</a>
              <br>
              <a class="link" href="../signup/signup.php">New User ? Join us by clicking here !</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  </form>
  </div>
  </div>
  </form>

  </form>
  <script src="three.r95.min.js"></script>
  <script src="vanta.net.min.js"></script>
  <script>
    VANTA.NET({
      el: "#vody",
      mouseControls: true,
      touchControls: true,
      minHeight: 200.00,
      minWidth: 200.00,
      scale: 1.00,
      scaleMobile: 1.00,
      color: 0x8e1272,
      backgroundColor: 0x19102a,
      points: 12.00,
      maxDistance: 24.00
    })
  </script>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="jslogin.js"> </script>

</body>

</html>