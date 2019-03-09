<?php
namespace App;
class TurkeySub extends Sub
{
    public function make()
    {
        return $this
                ->layBread()
                ->addLettuce()
                ->addTurkey()
                ->addSauces();
    }

    public function addTurkey()
    {
        var_dump('add: turkey');
        return $this;
    }
}

