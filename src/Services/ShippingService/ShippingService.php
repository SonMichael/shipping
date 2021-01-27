<?php


namespace HomeTest\Services\ShippingService;


use HomeTest\Modules\ShippingModule\Coefficient\CoefficientInterface;
use HomeTest\Modules\ShippingModule\Product\ProductInterface;

abstract class ShippingService
{
    protected ProductInterface $product;

    protected CoefficientInterface $coefficient;

    public static final function createFromProductWithCoefficient(ProductInterface $product, CoefficientInterface $coefficient)
    {
        $self = new static;

        $self->product = $product;
        $self->coefficient = $coefficient;

        return $self;
    }
}