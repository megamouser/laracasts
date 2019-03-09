<?php
namespace App;
abstract class Sub
{

//    protected function make()
//    {
//        return $this
//            ->layBread()
//            ->addLettuce()
//            ->addPrimaryToppings()
//            ->addSauces();
//    }

    protected function layBread()
    {
        var_dump('add: bread');
        return $this;
    }

    protected function addLettuce()
    {
        var_dump('add: lettuce');
        return $this;
    }

    protected function addSauces()
    {
        var_dump('add: sauces');
        return $this;
    }

//    protected abstract function addPrimaryToppings();
}
