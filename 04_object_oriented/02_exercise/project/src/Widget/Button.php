<?php

namespace Widget;

class Button extends Widget
{
    function draw(): void
    {
        $btn_key = parent::key();
        echo "<input type='button' value=$btn_key>";
    }
}