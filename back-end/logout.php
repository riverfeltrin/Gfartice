<?php  
session_start();

unset( $_SESSION );
unset( $_SESSION['usuarioLog'] );
session_destroy();
header('location:../front-end/home.php');
?>