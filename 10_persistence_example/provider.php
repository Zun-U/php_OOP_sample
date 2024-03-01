<?php

require_once("display.php");
require_once("persistence.php");

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
  function play(int $left_hand, int $right_hand, string $lang)
  {
    $result = $this->judge($left_hand, $right_hand);
    $this->display->show($result);
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

}
