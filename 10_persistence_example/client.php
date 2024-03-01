<?php

require_once __DIR__ . "../vendor/autoload.php";


$display = new persistendeDisplay\JapaneseDisplay();
$resultGateWay = new persistece\DebugReultGateWay();
$game = new persisteceJunken\JankenGame($display, $resultGateWay);
$game->play(1, 2);

$display = new persistendeDisplay\EnglishDisplay();
$resultGateWay = new persistece\DebugReultGateWay();
$game = new persisteceJunken\JankenGame($display, $resultGateWay);
$game->play(1, 2);



