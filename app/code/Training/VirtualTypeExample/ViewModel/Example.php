<?php
declare (strict_types=1) ;

namespace Training\VirtualTypeExample\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\WarehouseManagement\Api\WarehouseRepositoryInterface;
use Magento\Framework\App\RequestInterface ;

class Example implements ArgumentInterface
{
    protected WarehouseRepositoryInterface $warehouseRepository; 
    public function __construct(WarehouseRepositoryInterface $warehouseRepository)
    {
        $this->warehouseRepository = $warehouseRepository;
    }

    public function getWarehouse(RequestInterface $request){
        return $this->warehouseRepository->newWarehouse( (string) $request->getParam('code') ) ;
    }

}