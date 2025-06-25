<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TP Calculatrice</title>
</head>

<body>
  <h1>Faire un calcul</h1>
  <form action="index.php" method="post">
    <label for="firstvalue">Valeur 1</label>
    <input type="text" id="firstvalue" name="firstvalue">
    <label for="secondvalue">Valeur 2</label>
    <input type="text" id="secondvalue" name="secondvalue">
    <select name="operator">
      <option selected disabled>Merci de sélectionner un opérateur</option>
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select>
    <button>Calculer</button>
  </form>
</body>

</html>