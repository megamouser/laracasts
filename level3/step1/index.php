<?php
interface CarService 
{
    public function getCost();
}

class BasicInspection implements CarService
{
    public function getCost()
    {
        return 25;
    }
}

class OilChange implements CarService {
    protected $catService;

    public function __construct(CarService $carService)
    {
        $this->catService = $carService;
    }

    public function getCost()
    {
        return 29 + $this->catService->getCost();
    }
}

echo (new BasicInspection())->getCost();





