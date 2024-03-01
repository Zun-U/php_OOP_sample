<?php

require_once("provider.php");
require_once("display.php");


$display = new JapaneseDisplay();
$resultGateWay = new DebugReultGateWay();
$game = new JankenGame($display, $resultGateWay);
$game->play(1, 2);

$display = new EnglishDisplay();
$resultGateWay = new DebugReultGateWay();
$game = new JankenGame($display, $resultGateWay);
$game->play(1, 2);



