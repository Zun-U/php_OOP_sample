<?php

require_once("provider.php");
require_once("display.php");


$display = new JapaneseDisplay();
$game = new JankenGame($display);
$game->play(1, 2);

$display = new EnglishDisplay();
$game = new JankenGame($display);
$game->play(1, 2);


