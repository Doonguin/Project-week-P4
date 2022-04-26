<?php

error_reporting(0);

include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>CRUD vrijwilligers huis</title>
</head>
<body>
    <h1>CRUD vrijwilligers huis</h1>
    <p>Donatie overzicht</p> <br>

    <table class="table">
        <tbody>
            <th>Naam:</th>
            <th>Email:</th>
            <th>Tel:</th>
            <th>Categorie:</th>
            <th>Beschrijving:</th>
            <th colspan="2">Opties:</th>
            <?php include 'read.php'; ?>
        </pbody>
    </table>

    <form class="form-inline m-2" action="create.php" method="POST">
        <label for="naam">Naam:</label>
        <input type="text" class="form-control m-2" id="naam" name="naam">
        <label for="email">Email:</label>
        <input type="email" class="form-control m-2" id="email" name="email">
        <label for="tel">Tel:</label>
        <input type="tel" class="form-control m-2" id="tel" name="tel">
        <label for="cat">Categorie:</label>
        <select class="form-control form-select m-2" id="cat" name="cat">
            <option selected placeholder="Categorie">Selecteer donatie categorie:</option>
            <option value="meubels">Meubels</option>
            <option value="vervoer">Vervoer aanbieden</option>
            <option value="fiets">Fiets doneren</option>
            <option value="Kleding">Kleding</option>
            <option value="speelgoed">Speelgoed doneren</option>
            <option value="verzorging">Verzorgings producten</option>
            <option value="activiteit">Activiteit organiseren</option>
            <option value="vrijwilliger">Ik wil vrijwilliger worden</option>
            <option value="taal">Taal of tolk</option>
        </select>
        <label for="desc">Beschrijving:</label>
        <input type="text" class="form-control m-2" id="desc" name="desc">
        <button type="submit" class="btn btn-primary">Toevoegen</button>
    </form>
</body>
</html>