<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 27-1-2020
 * Time: 16:04
 */
require "config.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepagina</title>
</head>
<body>

<?php
require 'container.php';
?>

<main>
    <div class="container">
        <div class="welcome_text">
            <h1>Welkom</h1>
            <p>Welkom op mijn blog. Hier plaats ik  een nieuwe verhaal of iets waat me bezighoudt. Via je eigen dashboard kan je zien welke verhalen je hebt gelezen.
            <p>Ook kun je zien welke verhalen je geliked hebt</p>
        </div>
        <div class="suggesties">
            <h3>Suggesties??</h3>
            <p>Laat me vooral weten als je nog suggesties hebt waarover ik moet schrijven. Ideeen zijn altijd welkom</p>
        </div>

        <?php
        if (isset($_SESSION['sId'])) {
        }

        else {
            echo '<div class="login">
        <h3>Inloggen</h3>
        <p>Registreer als je nog geen account heb, of login</p>
        <p>Wil je de onderwerpen zien en lezen, maak dan een account aan of login en leef je uit
        <p>Als je ingelogd heb je de vrijheid om mijn verhalen te liken als je daar zin in hebt.
        <p>Ook kun je je eigen dashboard creeeren</p>
    </div>';
        }


        ?>
    </div>



</main>
<?php
require 'footer.php';
?>
</body>

</html>
