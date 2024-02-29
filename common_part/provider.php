<?php

// じゃんけん
function play(int $left_hand, int $right_hand)
{
  $result = judge($left_hand, $right_hand);
  show_result($result);
}

function judge(int $left_hand, int $right_hand)
{

  // 結果を「-1,0,1」から「"lose","draw","win"」と分かりやすくリファクタリング
  // ※マジックナンバーを意味のある文字列に書き換えた
  if ($left_hand === 0) {
    if ($right_hand === 0) {
      return "draw";
    } elseif ($right_hand === 1) {
      return "win";
    } else {
      return "lose";
    }
  } elseif ($left_hand === 1) {
    if ($right_hand === 0) {
      return "lose";
    } elseif ($right_hand === 1) {
      return "draw";
    } else {
      return "win";
    }
  } elseif ($left_hand === 2) {
    if ($right_hand === 0) {
      return "win";
    } elseif ($right_hand === 1) {
      return "lose";
    } else {
      return "draw";
    }
  }
}

function show_result(int $result)
{
  if ($result === 1) {
    echo "勝利";
  } elseif ($result === 0) {
    echo "引き分け";
  } else {
    echo "敗北";
  }
}
