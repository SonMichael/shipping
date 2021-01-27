<?php


namespace HomeTest\Modules\ShippingModule\Coefficient;


class CoefficientRepository implements CoefficientRepositoryInterface
{
    public function getByCoefficientId(CoefficientIdInterface $coefficientId): ?CoefficientInterface
    {
        //todo query by id
        $coefficientId->getCoefficientId()->getValue();

        //fake data
        return new Coefficient();
    }
}