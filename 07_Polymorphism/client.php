<?php

require_once __DIR__ . "../vendor/autoload.php";

$game = new polymorphismJunken\JankenGame();
$game->play(1, 2, "ja");