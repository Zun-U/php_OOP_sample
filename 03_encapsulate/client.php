<?php

require_once("provider.php");


// 処理はクラスに全て記述されているため、client側では気にする必要が無い
// →『カプセル化』
// → client側では実装を見ない "ふり" をする(実装の中身まで確認しない)
$game = new JankenGame();
$game->play(1, 2);