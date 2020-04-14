<?php
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
    <?php
    require "config.php";
    ?>
    <title>Inloggen</title>
</head>
<body>
<main>
    <div class="container">
        <h2>Inloggen</h2>
        <form action="accountController.php" METHOD="post">
            <div class="form-group">
                <label for="username">Voer hier Gebruikersnaam in</label>
                <input type="text" name="username" id="username">
            </div>

            <div class="form-group">
                <label for="email">Voer hier je email in</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="password">Voer hier je wachtwoord in</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="form-group">
                <input type="submit" name="login" value="Inloggen">
            </div>
        </form>

    </div>
</main>
<?php
require 'footer.php'
?>
</body>
</html>


