<?php
require 'config.php';

$sql = "SELECT * FROM stories";
$query = $db->query($sql);
$stories = $query->fetchAll(PDO::FETCH_ASSOC);


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Onderwerpen</title>
</head>
<body>
<?php
require 'container.php'
?>

<main>
    <div class="subjects">
        <h2>Onderwerpen</h2>
        <p>Kies hier een onderwerp waar je iets over wilt lezen.</p>
        <?php
        echo '<ul>';
        foreach ($stories as $story) {
            $name = htmlentities($story['name']);
            $description = htmlentities($story['description']);
            echo " <li> <a style='color: black;' href='detail.php?id={$story['id']}'>$name</a> </li>";
        }
        echo '</ul>';

        ?>
    </div>
</main>
<?php
require 'footer.php';
?>
</body>
</html>




