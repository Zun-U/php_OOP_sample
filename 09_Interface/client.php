<?php

require_once __DIR__ . "../vendor/autoload.php";

$display = new interfaceDisplay\JapaneseDisplay();
$game = new interfaceJunken\JankenGame($display);
$game->play(1, 2);

$display = new interfaceDisplay\EnglishDisplay();
$game = new interfaceJunken\JankenGame($display);
$game->play(1, 2);


