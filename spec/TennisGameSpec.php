<?php

namespace spec;

use Player;
use TennisGame;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TennisGameSpec extends ObjectBehavior
{

    protected $player1;
    protected $player2;

    function let(){

        $this->player1 = new Player("Maria",0);
        $this->player2 = new Player("Pepe",0);
        $this->beConstructedWith($this->player1, $this->player2);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(TennisGame::class);
    }

    function it_score_0_iguals (){
        $this->score()->shouldReturn('0 iguals');
    }

    function it_score_15_0 (){
        $this->player1->winpoint();
        $this->score()->shouldReturn('15 - 0');
    }

    function it_score_15_iguals (){
        $this->player1->winpoint();
        $this->player2->winpoint();
        $this->score()->shouldReturn('15 iguals');
    }
}
