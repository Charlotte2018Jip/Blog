<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 7-3-2020
 * Time: 14:34
 */
require 'config.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Onderwerp Toevoegen</title>
</head>
<body>
<?php
require 'adminHeader.php';
?>
<main>
    <div class="container">
        <h1>Onderwerp toevoegen</h1>
        <form action="subjectController.php" method="post">
            <div class="form-group">
                <label for="name">Naam van het onderwerp</label>
                <input type="text" name="name" id="name">
            </div>
                <div class="form-group">
                    <label for="description">Beschrijving over het onderwerp</label>
                    <input type="text" name="description">
                </div>

            <div class="form-group">
                <input type="submit" name="add" value="Voeg onderwerp toe">
            </div>
        </form>
    </div>
</main>
<?php
require 'footer.php';
?>
</body>
</html>
