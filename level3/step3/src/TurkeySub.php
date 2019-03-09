<?php
namespace App;
class TurkeySub extends Sub
{
    public function make()
    {
        return $this
                ->layBread()
                ->addLettuce()
                ->addPrimaryToppings()
                ->addSauces();
    }

    public function addPrimaryToppings()
    {
        var_dump('add: turkey');
        return $this;
    }
}

