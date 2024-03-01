<?php

require_once("/06_refacotring_show_method/provider.php");

$game = new JankenGame();
$game->play(1, 2, "ja");