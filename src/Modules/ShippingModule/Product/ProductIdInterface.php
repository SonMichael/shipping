<?php


namespace HomeTest\Modules\ShippingModule\Product;


use HomeTest\Modules\Common\IdMySQLInterface;

interface ProductIdInterface extends IdMySQLInterface
{
    public function getProductionId(): ProductIdInterface;

    public function getProduction(): ?ProductInterface;
}