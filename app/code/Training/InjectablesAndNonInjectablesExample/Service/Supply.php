<?php 

declare (strict_types=1) ;

namespace Training\InjectablesAndNonInjectablesExample\Service ;
use Training\InjectablesAndNonInjectablesExample\Model\Item;
use Training\InjectablesAndNonInjectablesExample\Model\ItemFactory;
use Training\InjectablesAndNonInjectablesExample\Model\Supplier;

class Supply
{
    protected Supplier $supplier ;
    protected ItemFactory $itemFactory ;
    public function __construct(Supplier $supplier , ItemFactory $itemFactory){
        $this->supplier = $supplier ;
        $this->itemFactory = $itemFactory; 
    }

    public function getSupplier() : Supplier
    {
        $this->supplier->setCode('123') ;
        return $this->supplier; 
    }

    public function getItem() : Item
    {
        $item = $this->itemFactory->create() ;
        $item->setCode('Item : 434' ) ;
        return $item ;
    }
}