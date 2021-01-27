<?php


namespace HomeTest\Fixtures;


use HomeTest\Modules\ShippingModule\Product\Product;
use HomeTest\Modules\ShippingModule\Product\ProductInterface;

class ProductFixture
{
    /**
     * get fixture Product
     * @return ProductInterface
     */
    public static function getProduct(): ProductInterface
    {
        $product = new Product();
        $product->setPrice(100);

        $product->setDepth(1);
        $product->setWeight(2);
        $product->setHeight(3);
        $product->setWidth(4);

        return $product;
    }
}