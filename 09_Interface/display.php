<?php

namespace interfaceDisplay;

// じゃんけんをするにあたって、「JapaneseDisplay」「EnglishDisplay」両クラスとも、「show」というメソッドを持つ必要がある

// 「interface」は何を実装するかを定義する
interface DisplayInterface
{
    function show(int $result);
}

// 「implements」は「interface」を実装するの意
class JapaneseDisplay
implements DisplayInterface
{
    function show(int $result)
    {
        if ($result === "win") {
            echo "勝ち";
        } elseif ($result === "draw") {
            echo "引き分け";
        } else {
            echo "負け";
        }
    }
}


class EnglishDisplay
implements DisplayInterface
{
    function show(int $result)
    {
        if ($result === "win") {
            echo "win";
        } elseif ($result === "draw") {
            echo "draw";
        } else {
            echo "lose";
        }
    }
}
