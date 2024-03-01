<?php

namespace Janken;

use refactoring;

class JankenGame
{
  // じゃんけん
  function play(int $left_hand, int $right_hand, string $lang)
  {
    $result = $this->judge($left_hand, $right_hand);
    $this->show_result($result, $lang);
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


  function show_result(int $result, string $lang)
  {

    if ($lang === "ja") {
      $display = new refactoring\JapaneseDisplay();
      // $display->show($result); // ←まったく同じ
    } else {
      $display = new refactoring\EnglishDisplay();
      // $display->show($result); // ←まったく同じ
    }
    $display->show($result); // こうできる？
  }
  // メソッド「show_result」は2つのこと(生成とメソッド呼び出し)を同時に実行しているので分ける
  // ※メソッドに多くの責務を負わせてはならず、基本的に一つのことを行うようにする
}
