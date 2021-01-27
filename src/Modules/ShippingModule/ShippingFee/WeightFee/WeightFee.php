<?php


namespace HomeTest\Modules\ShippingModule\ShippingFee\WeightFee;


use HomeTest\Modules\ShippingModule\Coefficient\CoefficientInterface;
use HomeTest\Modules\ShippingModule\Product\ProductInterface;

class WeightFee implements WeightFeeInterface
{
    private int $weight;

    private int $coefficient;

    /**
     * @param ProductInterface $product
     * @param CoefficientInterface $coefficient
     * @return WeightFee
     */
    public static function createFromProductAnCoefficient(ProductInterface $product, CoefficientInterface $coefficient)
    {
        return new self($product->getWeight(), $coefficient->getWeightCoefficient());
    }

    public function __construct(int $weight, int $coefficient)
    {
        $this->weight = $weight;
        $this->coefficient = $coefficient;
    }

    /**
     * @return int
     */
    public function getCoefficient(): int
    {
        return $this->coefficient;
    }

    /**
     * @param int $coefficient
     */
    public function setCoefficient(int $coefficient): void
    {
        $this->coefficient = $coefficient;
    }

    public function getCost()
    {
        return $this->getWeight() * $this->getCoefficient();
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }
}