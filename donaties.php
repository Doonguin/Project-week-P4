<?php

include "./assets/database/database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/styleDonations.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Vrijwilligershuis donaties</title>
</head>
<body>
  <div id="container">
    <header>
      <img src="./assets/img/logo.png">
    </header>
    <nav>
      <ul>
        <a href="index.php"><li>Home</li></a>
        <a href="#"><li>Over ons</li></a>
        <a href="#"><li>Doneren</li></a>
        <a href="#"><li class="rightAlignment">Contact</li></a>
      </ul>
    </nav>
    <main>
        <div id="formDonations">
            <h2 style="color: white;">Doneren</h2>
            <form>
                <div class="form-floating mb-3" style="width: 40%;">
                    <input type="text" class="form-control" id="inputNaam" placeholder="Naam">
                    <label for="inputNaam">Naam</label>
                </div>
                <div class="form-floating mb-3" style="width: 40%; float: left;">
                    <input type="email" class="form-control" id="inputMail" placeholder="email">
                    <label for="inputMail">Email</label>
                </div>
                <div class="form-floating mb-3" style="width: 40%; float: left; margin-left: 10px;">
                    <input type="tel" class="form-control" id="inputTel" placeholder="telefoon">
                    <label for="inputTel">Telefoon</label>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Categorie</label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option value="meubels">Meubels</option>
                        <option value="Kleding">Kleding</option>
                        <option value="geld">Geld</option>
                    </select>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Beschrijving" id="floatingTextarea2" style="height: 100px; resize: none;"></textarea>
                    <label for="floatingTextarea2">Beschrijving van de donatie</label>
                </div>
            </form>
        </div>
    </main>
    <footer>

    </footer>
  </div>
</body>
</html>

<?php



?>
