<?php
namespace App;
class VeggieSub
{
    public function make()
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addVeggies()
            ->addSauces();
    }

    public function layBread()
    {
        var_dump('laying down the bread');
        return $this;
    }

    public function addLettuce()
    {
        var_dump('add some lettuce');
        return $this;
    }

    public function addVeggies()
    {
        var_dump('add some veggies');
        return $this;
    }

    public function addSauces()
    {
        var_dump('add oil and vinegar');
        return $this;
    }
}