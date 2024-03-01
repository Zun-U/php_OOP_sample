<?php

// じゃんけんの結果を『永続化』する

interface ResultGateWayInterface
{
    function save(int $leftHand, int $rightHand, int $result);
}

// デバック用に結果を出力
class DebugReultGateWay implements ResultGateWayInterface
{
    function save(int $leftHand, int $rightHand, int $result)
    {
        echo "leftHand:" . $leftHand
            . ",rightHand:" . $rightHand
            . ",result:" . $result;
    }
}

// 本番DBに結果を格納
class ProductionResultGateWay implements ResultGateWayInterface
{
    function save(int $leftHand, int $rightHand, int $result)
    {
        //  ...  save to database
    }
}
