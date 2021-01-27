<?php


namespace HomeTest\Modules\ShippingModule\ShippingFee\DimensionFee;


use HomeTest\Modules\ShippingModule\Coefficient\CoefficientInterface;
use HomeTest\Modules\ShippingModule\Product\ProductInterface;

class DimensionFee implements DimensionFeeInterface
{
    private int $width;

    private int $height;

    private int $depth;

    private int $coefficient;

    /**
     * @param ProductInterface $product
     * @param CoefficientInterface $coefficient
     * @return DimensionFee
     */
    public static function createFromProductAnCoefficient(ProductInterface $product, CoefficientInterface $coefficient)
    {
        return new self($product->getWidth(), $product->getHeight(), $product->getDepth(), $coefficient->getDimensionCoefficient());
    }

    public function __construct(int $width, int $height, int $depth, int $coefficient)
    {
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->coefficient = $coefficient;
    }

    /**
     * @return int
     */
    public function getCoefficient(): int
    {
        return $this->coefficient;
    }

    /**
     * @param int $coefficient
     */
    public function setCoefficient(int $coefficient): void
    {
        $this->coefficient = $coefficient;
    }

    public function getCost()
    {
        return $this->getWidth() * $this->getHeight() * $this->getDepth() * $this->getCoefficient();
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getDepth(): int
    {
        return $this->depth;
    }

    /**
     * @param int $depth
     */
    public function setDepth(int $depth): void
    {
        $this->depth = $depth;
    }
}