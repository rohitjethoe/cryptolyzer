<?php

    $api = "https://www.bitstamp.net/api/ticker/";
    $fgc = file_get_contents($api);
    $json = json_decode($fgc, true);

    $lastPrice = $json['last'];

    include "json/chart.php";

    $priceMovement = $lastPrice - $price[0];

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "info@rohit.nl";
        $header = "Message from: " . $email;
        
        mail($to, $header, $message, $email);
    }

    include "lib/views/Frontpage.php";

?>