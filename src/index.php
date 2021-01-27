<?php


require __DIR__ . '/Autoload.php';


use HomeTest\Modules\ShippingModule\ShippingModule;
use HomeTest\Modules\ShippingModule\Product\ProductId;
use HomeTest\Modules\ShippingModule\Coefficient\CoefficientId;
use HomeTest\Controllers\ShippingController\ShippingController;
use HomeTest\Fixtures\ProductFixture;

$product1 = ProductFixture::getProduct();
$product2 = ProductFixture::getProduct();
$product3 = ShippingModule::getInstance()->getProductionRepository()->getByProductionId(ProductId::fromInt(1));

$anOrder = [$product1, $product2, $product3];

$coefficient = ShippingModule::getInstance()->getCoefficientRepository()->getByCoefficientId(CoefficientId::fromInt(1));
$coefficient->setWeightCoefficient(11);
$coefficient->setDimensionCoefficient(11);

$shippingController = new ShippingController($coefficient);

echo $shippingController->getGrossPrice(...$anOrder);
