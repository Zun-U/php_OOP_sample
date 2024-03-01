<?php

require_once "../vendor/autoload.php";
require_once "../11_refactoring_result_display/provider.php";
require_once "../11_refactoring_result_display/display.php";
require_once "../11_refactoring_result_display/persistence.php";

// use refactoringResultDisplay;
// use refactoringResultPersistence;
// use refactoringResultJunken;

$display = new refactoringResultDisplay\JapaneseDisplay();
$resultGateWay = new refactoringResultPersistence\DebugReultGateWay();
$game = new refactoringResultJunken\JankenGame($display, $resultGateWay);
$game->play(1, 2);

$display = new refactoringResultDisplay\EnglishDisplay();
$resultGateWay = new refactoringResultPersistence\DebugReultGateWay();
$game = new refactoringResultJunken\JankenGame($display, $resultGateWay);
$game->play(1, 2);
