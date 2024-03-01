<?php

namespace refactoringResultPersistence;

interface ResultGateWayInterface
{
    function save(int $leftHand, int $rightHand, int $result);
}

class DebugReultGateWay implements ResultGateWayInterface
{
    function save(int $leftHand, int $rightHand, int $result)
    {
        echo "leftHand:" . $leftHand
            . ",rightHand:" . $rightHand
            . ",result:" . $result;
    }
}

class ProductionResultGateWay implements ResultGateWayInterface
{
    function save(int $leftHand, int $rightHand, int $result)
    {
        //  ...  save to database
    }
}
