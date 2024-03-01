<?php

namespace expansionJunken;

class JankenGame
{

  private $display;

  function __construct($display)
  {
    $this->display = $display;
  }

  // じゃんけん
  function play(int $left_hand, int $right_hand)
  {
    $result = $this->judge($left_hand, $right_hand);
    $this->display->show($result);
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
