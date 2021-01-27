<?php


namespace HomeTest\Fixtures;


use HomeTest\Modules\ShippingModule\Coefficient\Coefficient;
use HomeTest\Modules\ShippingModule\Coefficient\CoefficientInterface;

class CoefficientFixture
{
    /**
     * get fixture Coefficient
     * @return CoefficientInterface
     */
    public static function getCoefficient(): CoefficientInterface
    {
        $coefficient = new Coefficient();
        $coefficient->setWeightCoefficient(11);
        $coefficient->setDimensionCoefficient(12);

        return $coefficient;
    }
}