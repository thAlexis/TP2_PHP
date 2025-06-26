<?php
if (str_contains($_SERVER['HTTP_REFERER'], "index.php")) {
  include "./calcul.php";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TP Calculatrice</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
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
  <h1>Faire un calcul</h1>
  <form action="index.php" method="post">
    <label for="firstvalue">Valeur 1</label>
    <input value="<?php echo (isset($value1)) ? $value1 : ""; ?>" type="text" id="firstvalue" name="firstvalue">
    <label for="secondvalue">Valeur 2</label>
    <input value="<?php echo (isset($value2)) ? $value2 : ""; ?>" type="text" id="secondvalue" name="secondvalue">
    <select name="operator">
      <option selected disabled>Merci de sélectionner un opérateur</option>
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select>
    <button>Calculer</button>
  </form>

  <h2>Résultat</h2>
  <?php
  if (str_contains($_SERVER['HTTP_REFERER'], "index.php")) {
    echo "<p>$resultat</p>";
  };
  ?>
</body>

</html>