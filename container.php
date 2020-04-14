<?php
session_start();

if (isset($_SESSION['AdminID'])) {
    require 'adminHeader.php';
}

else if (isset($_SESSION['sId'])) {
    require 'userHeader.php';
}

else {
    require 'header.php';

}
?>