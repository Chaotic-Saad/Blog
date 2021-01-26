<?php

$conn= mysqli_connect('localhost','root','','blog');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$id=$_SESSION ["id"];

if(isset($_POST['submit']))
{
        $avatar = $_FILES["avatar"]["name"]; 
        // detecter le chemin temporaire  
        $fichierTemporaire = $_FILES["avatar"]["tmp_name"]; 
        // uploader le chemin physique de l'image 
        move_uploaded_file($fichierTemporaire,'profilepictures/'.$avatar );

        $sql_insert = "UPDATE user SET picture='$avatar' WHERE id = $id ";

        mysqli_query($conn,$sql_insert) or die(mysqli_error($conn));
        $_SESSION['picture'] = $avatar;

          header("location:profile.php");  

    }



?>