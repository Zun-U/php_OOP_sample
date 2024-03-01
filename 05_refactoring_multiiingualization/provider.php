<?php

namespace RefactoringMultilingualization;

use RefactoringMultilingualizationDisplay;

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

  // ======================================================
  // 『循環的複雑度』
  // プログラムの複雑さを測る指標
  // ざっくりいうと、分岐(繰り返しも含む)の数を数えて、多ければ多いほど複雑
  //
  // 複雑さ            = 条件分岐
  //
  // わかりやすくする   = 条件分岐を減らす
  // (複雑さを減らす)
  // ======================================================
  function show_result(int $result, string $lang)
  {
    // 何をしているか
    // ・勝利を表示
    // ・引き分けを表示
    // ・敗北を表示
    // 　　↓↓↓
    // 抽象化すると...
    // 『結果を表示』

    if ($lang === "ja") {
      $display = new RefactoringMultilingualizationDisplay\JapaneseDisplay();
      $display->show($result);
    } else {
      $display = new RefactoringMultilingualizationDisplay\EnglishDisplay();
      $display->show($result);
    }
  }
}
