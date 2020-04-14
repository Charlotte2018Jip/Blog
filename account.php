<?php
require "config.php";


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    ?>
    <title>Account</title>
</head>
<body>
<?php
require 'userHeader.php';
?>
<main>
    <div class="welkom">
        <h1>Welkom</h1>
        <p>Personaliseer je dashboard</p>
    </div>

    <div class="liked_stories">
        <h2>Gelikte verhalen</h2>
        <p>Bekijk hier de verhalen die je hebt geliked</p>
    </div>

    <div class="read_stories">
        <h2>Leesgeschiedenis</h2>
        <p>Bekijk hier de verhalen die je gelezen hebt</p>
    </div>
</main>
<footer>
    <?php
    require 'footer.php';
    ?>
</footer>
</body>
</html>


