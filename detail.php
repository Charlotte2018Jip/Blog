<?php

require "config.php";
$id = $_GET['id'];
$sql = "SELECT * FROM stories WHERE id = :id";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);
$story = $prepare->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Onderwerp</title>
</head>
<body>

<?php
require 'container.php';
?>
<main>
    <div class="container">
        <div class="welcome">
            <h2>Lees alles over het onderwerp <?php echo $story ['name']?></h2>
            <p><?php echo $story ['description']?> </p>
        </div>

        <?php
        if (isset($_SESSION['AdminID'])) {
            echo "<button><a href='updateSubject.php?id=<?=$id;?>'>Wijzigen</a></button>";
        }

        else {

        }
        ?>
    </div>


</main>
<?php
require 'footer.php'
?>
</body>
</html>

