<?php
interface CarService 
{
    public function getCost();
    public function getDescription();
}

class BasicInspection implements CarService
{
    public function getCost()
    {
        return 25;
    }

    public function getDescription()
    {
        return 'Basic Inspection';
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



