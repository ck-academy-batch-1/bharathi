<?php
class sport{
    public $game;
    public $player;

    function __construct($g,$p) {
    $this->game=$g;
    $this->player=$p;
    }

    function __destruct() {
        echo "$this->player is well played in last $this->game match";

    }
}


$sport1=new sport('kabbadi','bharathi');

?>