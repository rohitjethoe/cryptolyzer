<?php 

    $api = "https://www.bitstamp.net/api/ticker/";
    $fgc = file_get_contents($api);
    $json = json_decode($fgc, true);
    $json = json_encode($json);

    print_r($json);
?>