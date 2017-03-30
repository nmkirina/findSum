<?php
include 'Sum.php';

const MIN_ARRAY_SIZE = 1;
const MAX_ARRAY_SIZE = 10;
const MAX_ITEM_VALUE = 100;
const MIN_ITEM_VALUE = -100;

$arraySize = random_int(MIN_ARRAY_SIZE, MAX_ARRAY_SIZE);
$numArray = array();

for($i = 0; $i < $arraySize; $i++){
    
    $numArray[] = random_int(MIN_ITEM_VALUE, MAX_ITEM_VALUE);
}

$sum = new Sum();

session_start();
session_unset();
$_SESSION['numArray'] = $numArray;
$_SESSION['bigSum'] = $sum->find($numArray);

include 'index.php';