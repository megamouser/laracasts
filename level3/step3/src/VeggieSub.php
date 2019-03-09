<?php
namespace App;
class VeggieSub extends Sub
{
    public function make()
    {
        return $this
                ->layBread()
                ->addLettuce()
                ->addVeggies()
                ->addSauces();
    }

    public function addVeggies()
    {
        var_dump('add: veggies');
        return $this;
    }
}