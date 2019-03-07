<?php
//interface CarService
//{
//    public function getCost();
//    public function getDescription();
//}

class CarService
{
    protected $cost;

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost()
    {
        $this->cost = $cost;
    }

    public function getDescription()
    {
        return 'Basic Inspection';
    }

    public function withOilChange()
    {
        $this->cost += 29;
    }

    public function withTireRotation()
    {
        return $this->cost += 15;
    }
}

class OilChange implements CarService {
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 29 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', and Oil Change';
    }
}

class TireRotation implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 15 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', and Tire Rotation';
    }
}

var_dump((new TireRotation(new OilChange(new BasicInspection())))->getCost());
var_dump((new TireRotation(new OilChange(new BasicInspection())))->getDescription());



