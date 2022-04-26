<?php

if (!isset($_SESSION['user'])) {
    header('Location: ../../adminLogin.php');
}

?>