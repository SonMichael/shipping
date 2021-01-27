<?php


namespace HomeTest\Modules\ShippingModule\Product;


interface ProductInterface extends ProductIdInterface
{
    /**
     * @return int
     */
    public function getPrice(): int;

    /**
     * @param int $price
     */
    public function setPrice(int $price);

    /**
     * @return int
     */
    public function getWeight(): int;

    /**
     * @param int $weight
     */
    public function setWeight(int $weight);

    /**
     * @return int
     */
    public function getWidth(): int;

    /**
     * @param int $width
     */
    public function setWidth(int $width);

    /**
     * @return int
     */
    public function getHeight(): int;

    /**
     * @param int $height
     */
    public function setHeight(int $height);

    /**
     * @return int
     */
    public function getDepth(): int;

    /**
     * @param int $depth
     */
    public function setDepth(int $depth);
}
