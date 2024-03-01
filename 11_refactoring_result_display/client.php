<?php

require_once __DIR__ . "../vendor/autoload.php";

$display = new refactoringResultDisplay\JapaneseDisplay();
$resultGateWay = new refactoringResultPersistence\DebugReultGateWay();
$game = new refactoringResultJunken\JankenGame($display, $resultGateWay);
$game->play(1, 2);

$display = new refactoringResultDisplay\EnglishDisplay();
$resultGateWay = new refactoringResultPersistence\DebugReultGateWay();
$game = new refactoringResultJunken\JankenGame($display, $resultGateWay);
$game->play(1, 2);
