<?php 
if(isset($_POST['submit'])) {
    if(isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['email']) and isset($_POST['password'])and isset($_POST['age'])) {
        include '../../article/config.php';
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $password = password_hash($_POST['password'] , PASSWORD_DEFAULT);
    $date=date("Y-m-d H:i:s");
    $signuprequest="INSERT INTO `user`(`firstname`, `lastname`, `email`, `password`, `created_date` , `age`) VALUES ('$firstname','$lastname','$email','$password','$date' ,'$age')";
    mysqli_query($con , $signuprequest);
    header('Location:../login/login.php');
    }
}else{
   echo "E R R O R !";
}



?>