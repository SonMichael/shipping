<?php


namespace HomeTest\Modules\ShippingModule\Product;


use HomeTest\Modules\Common\IdMySQL;
use HomeTest\Modules\ShippingModule\ShippingModule;

class ProductId extends IdMySQL implements ProductIdInterface
{
    public function getProductionId(): ProductIdInterface
    {
        return $this;
    }

    public function getProduction(): ?ProductInterface
    {
        return ShippingModule::getInstance()->getProductionRepository()->getByProductionId($this);
    }
}