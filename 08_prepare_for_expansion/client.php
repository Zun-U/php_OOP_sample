<?php

require_once("provider.php");
require_once("display.php");

// インスタンスの生成は必要に応じてクライアント側で行う
$display = new JapaneseDisplay();
$game = new JankenGame($display);
$game->play(1, 2);

$display = new EnglishDisplay();
$game = new JankenGame($display);
$game->play(1, 2);

// $display = new ChineseDisplay();
// $game = new JankenGame($display);
// $game->play(1, 2);

// …　ほかの言語も対応できる　→ "実装を変えず"、拡張可能