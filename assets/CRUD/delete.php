<?php

error_reporting(0);

include 'db.php';

$id = $_GET['id'];
$sql = "delete from `donaties` where ID=$id";

$conn->query($sql);
$conn->close();

header("location: index.php");

?>