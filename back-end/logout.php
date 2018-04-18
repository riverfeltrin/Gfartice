<?php  
session_start();

unset( $_SESSION );
unset( $_SESSION['login'] );
unset( $_SESSION['senha'] );
session_destroy();
header('location:../front-end/login.php');
?>