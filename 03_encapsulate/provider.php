<?php

// クラス化を行う
// クラス内部にしか依存しない(clientはproviderの中身に依存しない)
class JankenGame
{
  // じゃんけん
  function play(int $left_hand, int $right_hand)
  {
    $result = $this->judge($left_hand, $right_hand);
    $this->show_result($result);
  }

  function judge(int $left_hand, int $right_hand)
  {

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
    if ($result === "win") {
      echo "勝利";
    } elseif ($result === "draw") {
      echo "引き分け";
    } else {
      echo "敗北";
    }
  }
}
