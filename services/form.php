<?php

include_once('../config.php');



// $domain = "https://growupnext.in/ecommerce-website-development-in-mumbai/";


if (isset($_POST['redirectto'])) {
    $domain = $_POST['redirectto'];
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

        header("Location: " . 'https://growupnext.in/ecommerce-website-development-in-mumbai/');
    } else {
        echo "your details not submitted" . mysqli_error($conn);
    }
}
?>

<!-- 
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         header("Location: " . $domain . "?error=Invalid email");
//     }


//     if (!validate_mobile($tel)) {
//         header("Location: " . $domain . "?error=Invalid number");
//     }


//     // $to = "info@growupnext.com";
//     // $subject = "Query From Website";
//     // $txt = "Name : " . $name .  "\r\n";
//     // $txt .= "Email : " . $email  . "\r\n";
//     // $txt .= "Number : " . $number . "\r\n";





//     // $headers = "From: noreply.growupnext.com" . "\r\n" .
//     //     "CC: info@growupnext.com";

//     // if (mail($to, $subject, $txt, $headers)) {
//     //     header("Location: " . $domain);
//     // } else {
//     //     header("Location: " . $domain . "?error=Failed to submit the request. Try again");
//     // }
// } else {
//     header("Location: " . $domain . "?error=Please fill all fields");
// }





// function validate_mobile($mobile)
// {
//     return preg_match('/^[0-9]{10}+$/', $mobile);
// } -->