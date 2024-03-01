<?php

namespace refactoringResultPersistence;

interface ResultGateWayInterface
{
    function save(int $leftHand, int $rightHand, string $result);
}

class DebugReultGateWay implements ResultGateWayInterface
{
    function save(int $leftHand, int $rightHand, string $result)
    {
        echo "leftHand:" . $leftHand
            . ",rightHand:" . $rightHand
            . ",result:" . $result;
    }
}

class ProductionResultGateWay implements ResultGateWayInterface
{
    function save(int $leftHand, int $rightHand, string $result)
    {
        //  ...  save to database
    }
}
