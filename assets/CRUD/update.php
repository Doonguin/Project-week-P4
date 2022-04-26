<?php

error_reporting(0);

include 'db.php';

$id = $_POST['id'];
$naam = $_POST['naam'];
$Email = $_POST['email'];
$tel = $_POST['tel'];
$cat = $_POST['cat'];
$desc = $_POST['desc'];

$sql = "update `donaties` set naam='$naam', email='$Email', telefoon='$tel', categorie='$cat', beschrijving='$desc' where id=$id";

$result = $conn->query($sql);
$conn->close();

header("location: index.php");

?>