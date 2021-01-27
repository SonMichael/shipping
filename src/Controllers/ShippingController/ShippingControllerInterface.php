<?php


namespace HomeTest\Controllers\ShippingController;


use HomeTest\Modules\ShippingModule\Product\ProductInterface;

interface ShippingControllerInterface
{
    /**
     * @param  ProductInterface ...$products
     * @return int
     */
    public function getGrossPrice(...$products): int;
}