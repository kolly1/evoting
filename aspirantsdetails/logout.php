<?php 
session_start();
$name = $_SESSION['votaname'];
session_destroy();
session_unset();
header('Location: index.php');

?>