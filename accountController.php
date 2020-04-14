<?php

require 'config.php';

if (isset($_POST['register'])) {

    $username      = $_POST['username'];
    $email         = $_POST['email'];
    $password      = $_POST['password'];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (id, username, email, password)
            VALUES (NULL, :username, :email, :password)";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':username'     =>$username,
        ':email'        =>$email,
        ':password'     =>$password
    ]);

    echo 'Account is aangemaakt';
    header("location: login.php");
    exit;
}
?>

<?php
require 'config.php';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $connect = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    $sql = "SELECT * FROM users WHERE username = '" . $username . "'";
    $query = mysqli_query($connect, $sql);
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        $passwordUnhash = $row['password'];
        if (password_verify($password, $passwordUnhash)) {
            $message = "Welkom $username !";
            session_start();
            $_SESSION['sId'] = $row['id'];
            if ($row['id'] == 1) {
                $_SESSION['AdminID'] = true;
                header("location: admin.php");
                exit;
            }
            else {
                header("location: account.php");
                exit;
            }
        }
        else {
            $message = "wachtwoord of gebruikersnaam komt niet overeen";
            header("location: login.php?msg=$message");
            $connect->close();
            exit;
        }
    }
}

?>
