<?php
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conjugaison verbe premier groupe</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./conjuguer.php">Conjuguer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Calculer</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <h1>Conjuguer un verbe du premier groupe</h1>
  <h2>Saisir le verbe</h2>
  <div class="select-verb-box flex">
    <form method="post" action="./conjuguer.php">
      <div class="flex verb-label">
        <label class="form-label" for="verbe">Verbe du premier groupe à l'infinitif</label>
      </div>
      <div class="flex verb-input">
        <input class="form-control" type="text" id="verbe" autofocus name="verbe" autocomplete="off">
      </div>
      <div class="flex select">

        <select class="form-select" name="temps">
          <option selected disabled>Merci de choisir le temps</option>
          <option value="present">Présent</option>
          <option value="futur">Futur</option>
          <option value="imparfait">Imparfait</option>
        </select>s
      </div>
      <div class="flex conjug-btn">

        <button class="btn btn-primary">Conjuguer</button>
      </div>
    </form>
  </div>
  <h2>Résultat de la conjugaison</h2>
  <?php
  if (str_contains($_SERVER['HTTP_REFERER'], "index.php")) {
    include "./_liste_resultats.php";
  };
  ?>
</body>

</html>