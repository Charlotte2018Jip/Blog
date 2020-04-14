<?php
require 'config.php';

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
    <title>Onderwerp wijzigen</title>
</head>
<body>
<?php
    require 'adminHeader.php';
?>

<main>
    <div class="container">
        <h1>Onderwerp wijzigen</h1>
        <form action="subjectController.php?id=<?=$id?>" method="POST">
            <input type="hidden" name="type" value="edit">
            <div class="form-group">
                <label for="name">Naam van het onderwerp</label>
                <input type="text" name="name" value="<?=$story['name']?>">
            </div>
            <div class="form-group">
                <label for="description">Beschrijving over het onderwerp</label>
                <input type="text" name="description" value="<?=$story['description']?>">
            </div>

            <div class="form-group">
                <input type="submit" value="Update onderwerp/beschrijving">
            </div>
        </form>
    </div>
</main>

<?php
require 'footer.php';
?>
</body>
</html>