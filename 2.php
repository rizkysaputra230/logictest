<?php
    $a = [17, 28, 30];
    $b = [99, 16, 8];

    $scoreA = 0;
    $scoreB = 0;

    for ($i=0; $i < count($a); $i++) {
        if ($a[$i] > $b[$i]) {
            $scoreA++;
        } elseif ($b[$i] > $a[$i]) {
            $scoreB++;
        }
    }

    $result = [];
    array_push($result, $scoreA);
    array_push($result, $scoreB);

    print_r($result);
