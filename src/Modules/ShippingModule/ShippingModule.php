<?php


namespace HomeTest\Modules\ShippingModule;


use HomeTest\Modules\Common\RepositoryInterface;
use HomeTest\Modules\Module;
use HomeTest\Modules\ShippingModule\Coefficient\CoefficientRepository;
use HomeTest\Modules\ShippingModule\Coefficient\CoefficientRepositoryInterface;
use HomeTest\Modules\ShippingModule\Product\ProductRepository;
use HomeTest\Modules\ShippingModule\Product\ProductRepositoryInterface;

class ShippingModule extends Module
{
    private ProductRepositoryInterface $productionRepository;

    private CoefficientRepositoryInterface $coefficientRepository;

    function __construct()
    {
        //this is just a sample, it should be assigned in implement function
        $this->productionRepository = new ProductRepository();
        $this->coefficientRepository = new CoefficientRepository();
    }

    /**
     * @return ProductRepositoryInterface
     */
    public function getProductionRepository()
    {
        return $this->productionRepository;
    }

    /**
     * @return CoefficientRepositoryInterface
     */
    public function getCoefficientRepository()
    {
        return $this->coefficientRepository;
    }

    /**
     * To replace new repository
     * @param RepositoryInterface $repository
     */
    public function implement(RepositoryInterface $repository)
    {
        if ($repository instanceof ProductRepositoryInterface)
            $this->productionRepository = $repository;
    }
}