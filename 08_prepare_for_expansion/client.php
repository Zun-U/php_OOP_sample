<?php

require_once __DIR__ . "../vendor/autoload.php";

// インスタンスの生成は必要に応じてクライアント側で行う
$display = new expansionDisplay\JapaneseDisplay();
$game = new expansionJunken\JankenGame($display);
$game->play(1, 2);

$display = new expansionDisplay\EnglishDisplay();
$game = new expansionJunken\JankenGame($display);
$game->play(1, 2);

// $display = new ChineseDisplay();
// $game = new JankenGame($display);
// $game->play(1, 2);

// …　ほかの言語も対応できる　→ "実装を変えず"、拡張可能