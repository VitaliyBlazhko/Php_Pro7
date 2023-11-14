<?php

require __DIR__ . '/vendor/autoload.php';

use App\valueObject\Date;


$data1 = new Date(2005, 1, 23);
$data2 = new Date(2006, 5, 17);
$data3 = new Date(2000, 9, 13);
$data4 = new Date(2005, 1, 23);
$resultComparison = $data1->comparison($data4);
$dateDiff = $data1->dateDifference($data3);
$format = $data1->formatDataToString();
var_dump($format);
echo '</br>';

var_dump($dateDiff);
echo '</br>';

var_dump($resultComparison);
echo '</br>';

var_dump($data1);
echo '</br>';

var_dump($data2);
echo '</br>';

var_dump($data3);
echo '</br>';

var_dump($data4);