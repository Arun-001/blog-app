<?php
include 'functions.php';

$id = $_GET['id'];
delete_post($id);
header('Location: index.php');
?>
