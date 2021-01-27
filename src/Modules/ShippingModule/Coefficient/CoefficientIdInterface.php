<?php


namespace HomeTest\Modules\ShippingModule\Coefficient;


use HomeTest\Modules\Common\IdMySQLInterface;

interface CoefficientIdInterface extends IdMySQLInterface
{
    public function getCoefficientId(): CoefficientIdInterface;

    public function getCoefficient(): ?CoefficientInterface;
}