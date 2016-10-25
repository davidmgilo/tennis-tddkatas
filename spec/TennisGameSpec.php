<?php

namespace spec;

use TennisGame;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TennisGameSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TennisGame::class);
    }
}
