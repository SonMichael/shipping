<?php


namespace HomeTest\Services\ShippingService;


use HomeTest\Modules\ShippingModule\ShippingFee\ShippingFeeInterface;

abstract class ShippingFeeWithProductTypeService extends ShippingService implements ShippingFeeServiceInterface
{
    protected ShippingFeeServiceInterface $shippingFeeService;

    //productTypeFeeInterface
    protected ShippingFeeInterface $productTypeFee;

    public function getShippingFee(): int
    {
        return max($this->productTypeFee->getCost(), $this->shippingFeeService->getShippingFee());
    }
}