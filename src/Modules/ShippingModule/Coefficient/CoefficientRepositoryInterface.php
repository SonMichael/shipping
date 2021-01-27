<?php


namespace HomeTest\Modules\ShippingModule\Coefficient;


use HomeTest\Modules\Common\RepositoryInterface;

interface CoefficientRepositoryInterface extends RepositoryInterface
{
    public function getByCoefficientId(CoefficientIdInterface $coefficientId): ?CoefficientInterface;
}