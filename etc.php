<?php
include_once('./config.php');

if ($_SERVER['HTTP_HOST'] == "localhost") {
    define('DOMAIN', 'http://localhost/growupnext/site-2/');
} else {
    define('DOMAIN', 'https://growupnext.in/ecommerce-website-development-in-mumbai');
}


function home_path()
{
    return DOMAIN;
}
function current_path()
{
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}



if (isset($_POST['name']) && $_POST['name'] != ""  && isset($_POST['mail']) && $_POST['mail'] != "" && isset($_POST['tel']) && $_POST['tel'] != "") {



    $name = $_POST['name'];
    $email = $_POST['mail'];
    $number = $_POST['tel'];
    $text = $_POST['text'];


    $conn = mysqli_connect($servername, $username, $password, $database);


    $sql =   "INSERT INTO `leads` (`name`, `number`, `mail`, `text`) VALUES ( '$name', '$number', '$email', '$text');
";
    $result = mysqli_query($conn, $sql);
    if ($result) {

        header("Location: " . DOMAIN);
    } else {
        echo "your details not submitted" . mysqli_error($conn);
    }
}
