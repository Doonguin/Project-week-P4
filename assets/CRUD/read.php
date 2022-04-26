<?php

error_reporting(0);

include 'db.php';

$sql = "select * from `donaties`";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    if($row['id'] == $_GET['id']) {
        echo "<tr>";
        echo '<form class="form-inline m-2" action="update.php" method="POST">';
        echo '<td><input type="text" class="form-control" name="naam" value="'. $row['naam'] .'"></td>';
        echo '<td><input type="email" class="form-control" name="email" value="'. $row['email'] .'"></td>';
        echo '<td><input type="tel" class="form-control" name="tel" value="' . $row['telefoon'] . '"</td>';
        echo '<td>
                    <select class="form-control form-select" name="cat">
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
              </td>';
        echo '<td><input type="text" class="form-control" name="cat" value="'. $row['beschrijving'] .'"></td>';
        echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
        echo '<input type="hidden" name="id" value="'. $row['id'] .'">';
        echo '</form>';
        echo "</tr>";
    } else {
        echo "<tr>";
        echo "<td>" . $row['naam'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['telefoon'] . "</td>";
        echo "<td>" . $row['categorie'] . "</td>";
        echo "<td>" . $row['beschrijving'] . "</td>";
        echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['id'] . '" role="button">Update</a></td>';
        echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
        echo "</tr>";   
    }
}

$conn->close();

?>