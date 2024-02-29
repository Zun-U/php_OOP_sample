<?php

// じゃんけん
function play(int $left_hand, int $right_hand)
{
  $result = judge($left_hand, $right_hand);
  show_result($result);
}

function judge(int $left_hand, int $right_hand)
{

  if ($left_hand === 0) {
    if ($right_hand === 0) {
      return 0;
    } elseif ($right_hand === 1) {
      return 1;
    } else {
      return -1;
    }
  } elseif ($left_hand === 1) {
    if ($right_hand === 0) {
      return -1;
    } elseif ($right_hand === 1) {
      return 0;
    } else {
      return 1;
    }
  } elseif ($left_hand === 2) {
    if ($right_hand === 0) {
      return 1;
    } elseif ($right_hand === 1) {
      return -1;
    } else {
      return 0;
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
