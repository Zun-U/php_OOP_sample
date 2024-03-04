<?php

namespace App;

class JapaneseDisplay
implements DisplayInterface
{
    function win()
    {
        echo "勝ち";
    }

    function draw()
    {
        echo "引き分け";
    }

    function lose()
    {
        echo "負け";
    }
}

class EnglishDisplay
implements DisplayInterface
{
    function win()
    {
        echo "win";
    }

    function draw()
    {
        echo "draw";
    }

    function lose()
    {
        echo "lose";
    }
}
