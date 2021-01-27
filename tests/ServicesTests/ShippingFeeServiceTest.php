<?php


namespace Tests\ServicesTests;


use HomeTest\Controllers\ShippingController\ShippingController;
use HomeTest\Fixtures\CoefficientFixture;
use HomeTest\Fixtures\ProductFixture;
use HomeTest\Modules\ShippingModule\ShippingFee\DimensionFee\DimensionFee;
use HomeTest\Modules\ShippingModule\ShippingFee\WeightFee\WeightFee;
use HomeTest\Services\ShippingService\GrossPriceService;
use HomeTest\Services\ShippingService\ShippingFeeService;
use PHPUnit\Framework\TestCase;

class ShippingFeeServiceTest extends TestCase
{
    public function testWeightFee()
    {
        $coefficient = CoefficientFixture::getCoefficient();
        $product = ProductFixture::getProduct();
        $weightFee = WeightFee::createFromProductAnCoefficient($product, $coefficient)->getCost();

        $this->assertTrue($weightFee === ($product->getWeight() * $coefficient->getWeightCoefficient()));
    }

    public function testDimensionFee()
    {
        $coefficient = CoefficientFixture::getCoefficient();
        $product = ProductFixture::getProduct();
        $dimensionFee = DimensionFee::createFromProductAnCoefficient($product, $coefficient)->getCost();

        $this->assertTrue($dimensionFee === ($product->getWidth() * $product->getHeight() * $product->getDepth() * $coefficient->getDimensionCoefficient()));
    }

    public function testShippingFee()
    {
        $coefficient = CoefficientFixture::getCoefficient();
        $product = ProductFixture::getProduct();
        $dimensionFee = DimensionFee::createFromProductAnCoefficient($product, $coefficient)->getCost();

        $this->assertTrue(ShippingFeeService::createFromProductWithCoefficient($product, $coefficient)->getShippingFee() === $dimensionFee);

        $product->setWeight(1000);
        $weightFee = WeightFee::createFromProductAnCoefficient($product, $coefficient)->getCost();
        $this->assertTrue(ShippingFeeService::createFromProductWithCoefficient($product, $coefficient)->getShippingFee() === $weightFee);
    }

    public function testGrossPrice()
    {
        $coefficient = CoefficientFixture::getCoefficient();
        $product = ProductFixture::getProduct();

        $this->assertTrue(GrossPriceService::createFromProductWithCoefficient($product, $coefficient)->getGrossPrice() === $product->getPrice() + max(
                WeightFee::createFromProductAnCoefficient($product, $coefficient)->getCost(),
                DimensionFee::createFromProductAnCoefficient($product, $coefficient)->getCost(),
            )
        );
    }

    public function testAnOrderPrice()
    {
        $coefficient = CoefficientFixture::getCoefficient();
        $product1 = ProductFixture::getProduct();
        $product2 = ProductFixture::getProduct();
        $product3 = ProductFixture::getProduct();

        $order = [$product1, $product2, $product3];

        $expectedPrice = GrossPriceService::createFromProductWithCoefficient($product1, $coefficient)->getGrossPrice()
            + GrossPriceService::createFromProductWithCoefficient($product2, $coefficient)->getGrossPrice()
            + GrossPriceService::createFromProductWithCoefficient($product3, $coefficient)->getGrossPrice();

        $shippingController = new ShippingController($coefficient);

        $this->assertTrue($shippingController->getGrossPrice(...$order) === $expectedPrice);
    }
}