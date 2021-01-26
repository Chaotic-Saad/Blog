<?php

$conn= mysqli_connect('localhost','root','','blog');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$id=$_SESSION ["id"];

if(isset($_POST['submit']))
{
        $title = strip_tags ($_POST['title']);
        $id_categorie= strip_tags ($_POST['id_categorie']);
        $editor = strip_tags($_POST['editor']);
        $main= strip_tags($_POST['main']);
        
        $avatar = $_FILES["avatar"]["name"]; 
        // detecter le chemin temporaire  
        $fichierTemporaire = $_FILES["avatar"]["tmp_name"]; 
        // uploader le chemin physique de l'image 
        move_uploaded_file($fichierTemporaire,'../picture/'.$avatar );



        $sql_insert = "INSERT INTO `articles` (`title`, `text` ,`id_categorie`,`id_user`,`main`,`picture` ) VALUES ('$title','$editor','$id_categorie','$id','$main','$avatar')";

        mysqli_query($conn,$sql_insert) or die(mysqli_error($conn));

         header("location:../blog.php"); 

    }



?>