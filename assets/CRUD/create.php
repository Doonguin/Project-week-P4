<?php

error_reporting(0);

include 'db.php';

$naam = $_POST["naam"];
$Email = $_POST["email"];
$tel = $_POST["tel"];
$cat = $_POST["cat"];
$desc = $_POST["desc"];

$sql = "insert into `donaties` (naam, email, telefoon, categorie, beschrijving) values ('$naam', '$Email', '$tel', '$cat', '$desc')";

$conn->query($sql);
$conn->close();

header("location: index.php");

?>