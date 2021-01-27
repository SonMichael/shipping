<?php


namespace HomeTest\Modules\ShippingModule\Coefficient;


interface CoefficientInterface extends CoefficientIdInterface
{
    public function getWeightCoefficient(): int;

    public function getDimensionCoefficient(): int;

    public function setWeightCoefficient(int $weightCoefficient);

    public function setDimensionCoefficient(int $dimensionCoefficient);
}