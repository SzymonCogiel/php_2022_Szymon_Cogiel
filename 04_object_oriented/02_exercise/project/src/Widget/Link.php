<?php

namespace Widget;


class Link extends Widget
{
    function draw(): void
    {
        $link_key = parent::key();
        echo "<a href=''>$link_key</a>";
    }
}