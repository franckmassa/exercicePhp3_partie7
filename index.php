<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice3</title>
</head>
<body>
  <p>
    <!--Envoi des données vers la page user.php avec la methode GET (url)-->
    <form  action="user.php" method="get">
      <label for="firstName">Prénom :</label><input type="text" name="firstName" id="firstName"/>
      <label for="lastName">Nom :</label><input type="text" name="lastName" id="lastName" />
      <input type="submit" />
    </form>
  </p>
</body>
</html>
