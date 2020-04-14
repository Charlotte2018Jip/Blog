<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 7-3-2020
 * Time: 14:33
 */

require 'config.php';

if (isset($_POST['add'])) {

    $name           = $_POST['name'];
    $description    = $_POST['description'];

    $sql = "INSERT INTO stories (name, description) 
            VALUES (:name, :description)";

    $prepare = $db->prepare($sql);
    $prepare->execute([

        ':name'         =>$name,
        ':description'  =>$description
    ]);

    echo 'Onderwerp is toegevoegd';
    header("location: subjects.php");
    exit;
}

if ($_POST['type'] === 'edit') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $id = $_GET['id'];

    $sql = "UPDATE stories SET name  = :name, 
            description = :description WHERE id = :id";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':name'             => $name,
        ':description'      => $description
    ]);

    $msg = "Onderwerp succesvol aangepast";
    header("location: subjects.php?msg=$msg");
    exit;
}

?>
