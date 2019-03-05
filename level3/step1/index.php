<?php
class BasicInspection 
{
    public function getCost()
    {
        return 19;
    }
}

class BasicInspectionAndOilChange
{
    public function getCost()
    {
        return 19 + 19;
    }
}

class BasicInspectionAndOilChangeAndTiredRotation
{
    public function getCost()
    {
        return 19 + 19 + 10;
    }
}

var_dump((new BasicInspection())->getCost());
var_dump((new BasicInspectionAndOilChange())->getCost());
var_dump((new BasicInspectionAndOilChangeAndTiredRotation())->getCost());


