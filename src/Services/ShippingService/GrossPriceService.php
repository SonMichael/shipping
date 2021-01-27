<?php


namespace HomeTest\Services\ShippingService;


class GrossPriceService extends ShippingService implements GrossPriceServiceInterface
{
    public function getGrossPrice(): int
    {
        //all type of shipping fee here
       $shippingFee = ShippingFeeService::createFromProductWithCoefficient($this->product, $this->coefficient)->getShippingFee();

       //use ShippingFeeWithProductTypeService if you want add new product type fee.
        return $this->product->getPrice() + $shippingFee;
    }
}