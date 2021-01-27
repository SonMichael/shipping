<?php


namespace HomeTest\Modules\ShippingModule\Coefficient;


class Coefficient extends CoefficientId implements CoefficientInterface
{
    private int $weightCoefficient;

    private int $dimensionCoefficient;

    /**
     * @param int $weightCoefficient
     */
    public function setWeightCoefficient(int $weightCoefficient)
    {
        $this->weightCoefficient = $weightCoefficient;
    }

    /**
     * @return int
     */
    public function getWeightCoefficient(): int
    {
        return $this->weightCoefficient;
    }

    /**
     * @param int $dimensionCoefficient
     */
    public function setDimensionCoefficient(int $dimensionCoefficient)
    {
        $this->dimensionCoefficient = $dimensionCoefficient;
    }

    /**
     * @return int
     */
    public function getDimensionCoefficient(): int
    {
        return $this->dimensionCoefficient;
    }
}