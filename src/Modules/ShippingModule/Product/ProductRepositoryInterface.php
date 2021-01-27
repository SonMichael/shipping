<?php


namespace HomeTest\Modules\ShippingModule\Product;


use HomeTest\Modules\Common\RepositoryInterface;

interface ProductRepositoryInterface extends RepositoryInterface
{
    public function getByProductionId(ProductIdInterface $productId): ?ProductInterface;
}