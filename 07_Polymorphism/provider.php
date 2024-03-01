<?php

namespace polymorphismJunken;

use polymorphismDisplay;

class JankenGame
{
  // じゃんけん
  function play(int $left_hand, int $right_hand, string $lang)
  {
    $result = $this->judge($left_hand, $right_hand);

    // 異なるものを同じように扱うこと = ポリモーフィズム
    $display = $this->getDisplay($lang); // 「$diaplay」の中には「JapaneseDisplay」か「EnglishDisplay」のインスタンスのどちらかが入る
    $display->show($result);             // どちらのインスタンスでも「show」メソッドを呼び出せる → 異なるものを同じように扱っている

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

  // インスタンスの生成をメソッドにまとめる
  // (クラスのインスタンス化の責務 "のみ" を負うメソッド)
  function getDisplay(string $lang)
  {
    if ($lang === "ja") {
      return new polymorphismDisplay\JapaneseDisplay();
    } else {
      return new polymorphismDisplay\EnglishDisplay();
    }
  }
}
