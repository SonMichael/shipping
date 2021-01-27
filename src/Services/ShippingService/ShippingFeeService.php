<?php


namespace HomeTest\Services\ShippingService;


use HomeTest\Modules\ShippingModule\ShippingFee\DimensionFee\DimensionFee;
use HomeTest\Modules\ShippingModule\ShippingFee\WeightFee\WeightFee;

class ShippingFeeService extends ShippingService implements ShippingFeeServiceInterface
{
    public function getShippingFee(): int
    {
        $weightFee = WeightFee::createFromProductAnCoefficient($this->product, $this->coefficient)->getCost();
        $dimensionFee = DimensionFee::createFromProductAnCoefficient($this->product, $this->coefficient)->getCost();

        return max($weightFee, $dimensionFee);
    }
}