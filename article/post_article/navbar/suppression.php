<?php

if(isset($_POST['submit'])) {
   session_destroy();
   header('Location: http://www.GOOGLE.com/');
}
?>