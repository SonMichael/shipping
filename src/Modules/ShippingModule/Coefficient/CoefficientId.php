<?php


namespace HomeTest\Modules\ShippingModule\Coefficient;


use HomeTest\Modules\Common\IdMySQL;
use HomeTest\Modules\ShippingModule\ShippingModule;

class CoefficientId extends IdMySQL implements CoefficientIdInterface
{
    public function getCoefficientId(): CoefficientIdInterface
    {
        return $this;
    }

    public function getCoefficient(): ?CoefficientInterface
    {
        return ShippingModule::getInstance()->getCoefficientRepository()->getByCoefficientId($this);
    }
}