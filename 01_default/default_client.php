<?php

require_once("default_provider.php");

// じゃんけん
function play(int $left_hand, int $right_hand)
{
    $result = judge($left_hand, $right_hand);
    show_result($result);
}