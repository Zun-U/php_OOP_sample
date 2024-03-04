<?php

namespace App;

interface DisplayInterface
{
    function win();
    function draw();
    function lose();
}

interface ResultGateWayInterface
{
    function save(int $leftHand, int $rightHand, string $result);
}