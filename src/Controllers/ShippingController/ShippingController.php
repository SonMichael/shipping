<?php


namespace HomeTest\Controllers\ShippingController;


use HomeTest\Controllers\Controller;
use HomeTest\Modules\ShippingModule\Coefficient\CoefficientInterface;
use HomeTest\Modules\ShippingModule\Product\ProductInterface;
use HomeTest\Services\ShippingService\GrossPriceService;

class ShippingController extends Controller implements ShippingControllerInterface
{
    /**
     * Currently coefficient of system
     * @var CoefficientInterface
     */
    private CoefficientInterface $coefficient;

    public function __construct(CoefficientInterface $coefficient)
    {
        $this->coefficient = $coefficient;
    }

    /**
     * @param  ProductInterface ...$products
     * @return int
     */
    public function getGrossPrice(...$products): int
    {
        $total = 0;

        foreach ($products as $product)
            $total += GrossPriceService::createFromProductWithCoefficient($product, $this->coefficient)->getGrossPrice();

        return $total;
    }
}