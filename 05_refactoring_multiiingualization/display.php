<?php

// 抽象化したものをクラスにする　→ 『結果を表示する』
class JapaneseDisplay
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
