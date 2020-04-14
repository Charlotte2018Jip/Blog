<?php
require 'config.php'
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
<?php
require 'container.php';
?>
    <main>
        <div class="welkom">
            <h1>Welkom Beheerder</h1>
            <p>U kunt hier verhalen toevoegen, wijzigen en/of verwijderen.</p>
            <div class="form-group">
                <button><a href="addSubject.php">Onderwerp Toevoegen</a></button>
            </div>
        </div>
    </main>
<?php
require 'footer.php';
?>
</body>
</html>

