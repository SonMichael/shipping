<?php


namespace HomeTest\Modules\ShippingModule\Product;


use HomeTest\Fixtures\ProductFixture;

class ProductRepository implements ProductRepositoryInterface
{
    public function getByProductionId(ProductIdInterface $productId): ?ProductInterface
    {
        //todo query by id
        $productId->getProductionId()->getValue();

        return ProductFixture::getProduct();
    }
}