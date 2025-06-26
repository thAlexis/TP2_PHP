<?php
include "./utils.php";
$resultat = 0;
$valeur1 = "";
$valeur2 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $valeur1 = $_POST['valeur1'];
  $valeur2 = $_POST['valeur2'];
  // Nullish Coallescing
  $operateur = $_POST['operateur'] ?? "+";
  $resultat = calculer($valeur1, $valeur2, $operateur);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculette</title>
  <?php include "./_dependencies.php" ?>
</head>

<body>
  <h1 class="text-primary text-center my-5">Calculette</h1>
  <form action="./calculette.php" method="post" class="container my-5">
    <div class="mb-3 row">
      <label for="valeur1" class="col-sm-2 col-form-label">Valeur 1</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="valeur1" name=valeur1 value=<?= $valeur1 ?>>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="valeur2" class="col-sm-2 col-form-label">Valeur 2</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="valeur2" name=valeur2 value=<?= $valeur2 ?>>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label" for="operateur">Opérateur</label>
      <div class="col-sm-10">
        <select id="operateur" name=operateur class="form-select">
          <option value="+">Addition</option>
          <option value="-">Soustraction</option>
          <option value="*">Multiplication</option>
          <option value="/">Division</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <div class="col-sm-10">
        <button class="btn btn-primary">Calculer</button>
        <!-- <button type="reset" class="btn btn-danger">Vider</button> -->
      </div>
    </div>
  </form>
  <div>
    <?= $resultat ?>
  </div>
</body>

</html>