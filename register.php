<?php
require "config.php";
require 'header.php';
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registreren</title>
</head>
<body>
<main>
  <div class="container">
      <h2>Registreren</h2>
      <p>Let op als je registreert word je doorgestuurd naar de inlogpagina</p>
      <form action="accountController.php" method="POST">
          <div class="form-group">
              <label for="username">Vul hier je Gebruikersnaam in</label>
              <input type="text" name="username" id="username">
          </div>

          <div class="form-group">
              <label for="email">Vul hier je email in</label>
              <input type="email" name="email" id="email">
          </div>

          <div class="form-group">
              <label for="password">Voer hier je wachtwoord in</label>
              <input type="password" name="password"  id="password">
          </div>

          <div class="form-group">
              <input type="submit" name="register" value="Registreren">
          </div>
      </form>
  </div>



</main>

<?php
require 'footer.php'
?>
</body>
</html>

