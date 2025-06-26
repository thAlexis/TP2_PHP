<?php
include "./utils.php";
$resultat = "";
$infinitif = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $infinitif = $_POST['infinitif'];
  // Nullish Coallescing
  $temps = $_POST['temps'] ?? "present";
  $resultat = traiter($infinitif, $temps);
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conjugaison</title>
  <?php include "./_dependencies.php" ?>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include "./_menu.php" ?>
  <h1 class="text-primary text-center my-5">Conjugaison des verbes réguliers du premier groupe</h1>
  <form action="./conjugaison.php" method="post" class="container my-5">
    <div class="mb-3 row">
      <label for="infinitif" class="col-sm-2 col-form-label">Verbe à l'infinitif</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="infinitif" name=infinitif value=<?= $infinitif ?>>
      </div>
    </div>
    <div class="mb-3 row">
      <label class="col-sm-2 col-form-label" for="temps">Temps</label>
      <div class="col-sm-10">
        <select id="temps" name=temps class="form-select">
          <option selected disabled>Temps</option>
          <option value="present">Présent</option>
          <option value="futur">Futur</option>
          <option value="imparfait">Imparfait</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <div class="col-sm-10">
        <button class="btn btn-primary">Conjuguer</button>
        <!-- <button type="reset" class="btn btn-danger">Vider</button> -->
      </div>
    </div>
  </form>
  <div>
    <?= $resultat ?>
  </div>
</body>

</html>