<?php

require_once "../vendor/autoload.php";
require_once "../12_another_file_interface/interface.php";
require_once "../12_another_file_interface/provider.php";
require_once "../12_another_file_interface/display.php";
require_once "../12_another_file_interface/persistence.php";

$display = new App\JapaneseDisplay();
$resultGateWay = new App\DebugReultGateWay();
$game = new App\JankenGame($display, $resultGateWay);
$game->play(1, 2);

$display = new App\EnglishDisplay();
$resultGateWay = new App\DebugReultGateWay();
$game = new App\JankenGame($display, $resultGateWay);
$game->play(1, 2);
