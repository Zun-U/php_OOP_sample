<?php

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

  // 英語も、中国語も、フランス語も.....
  // 言語が増えるにつれて分岐が増える
  // → 複雑
  // → → 複雑さ = 条件分岐
  function show_result(int $result, string $lang)
  {
    if ($lang === "ja") {
      if ($result === "win") {
        echo "勝利";
      } elseif ($result === "draw") {
        echo "引き分け";
      } else {
        echo "敗北";
      }
    } elseif ($lang === "en") {
      if ($result === "win") {
        echo "win";
      } elseif ($result === "draw") {
        echo "draw";
      } else {
        echo "lose";
      }
    } elseif ($lang === "ch") {
      if ($result === "win") {
        echo "胜利";
      } elseif ($result === "draw") {
        echo "画";
      } else {
        echo "打败";
      }
    } elseif ($lang === "fr") {
      if ($result === "win") {
        echo "Vous gagnez";
      } elseif ($result === "draw") {
        echo "Dessiner";
      } else {
        echo "Tu perds";
      }
    } else {
      if ($result === "win") {
        echo "Du gewinnst";
      } elseif ($result === "draw") {
        echo "Zeichnen";
      } else {
        echo "Du verlierst";
      }
    }
  }
}
