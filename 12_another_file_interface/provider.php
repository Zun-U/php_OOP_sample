<?php

namespace App;

class JankenGame
{

  private $display;
  private $resultGateWay;

  function __construct($display, $resultGateWay)
  {
    $this->display = $display;
    $this->resultGateWay = $resultGateWay; // 結果の保存先
  }

  // じゃんけん
  function play(int $left_hand, int $right_hand)
  {
    $result = $this->judge($left_hand, $right_hand);
    $this->showResult($result);
    $this->resultGateWay->save($left_hand, $right_hand, $result);
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

  function showResult(string $result) {
    if ($result === "win") {
      $this->display->win();
    } elseif ($result === "draw") {
      $this->display->draw();
    } else {
      $this->display->lose();
    }
  }

}
