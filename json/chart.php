<?php 

    $date = date("Y-m-d");
    $date2 = date("Y-m-d" , strtotime('-7 days'));

    $api = "https://api.coindesk.com/v1/bpi/historical/close.json?start=$date2&end=$date";
    $fgc = file_get_contents($api);
    $json = json_decode($fgc, true);

    $day = array();
    $day[0] = $date2;
    $day[1] = date("Y-m-d", strtotime('-6 days'));
    $day[2] = date("Y-m-d", strtotime('-5 days'));
    $day[3] = date("Y-m-d", strtotime('-4 days'));
    $day[4] = date("Y-m-d", strtotime('-3 days'));
    $day[5] = date("Y-m-d", strtotime('-2 days'));
    $day[6] = date("Y-m-d", strtotime('-1 days'));

    $price = array();
    for ($i = 0; $i < 7; $i++) {
        $price[$i] = $json['bpi'][$day[$i]];
    }

?>