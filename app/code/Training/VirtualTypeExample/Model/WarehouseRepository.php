<?php 

declare (strict_types=1) ;

namespace Training\VirtualTypeExample\Model ;

class WarehouseRepository extends \Training\WarehouseManagement\Model\WarehouseRepository
{
    public function __construct(WarehouseManagementExtended $warehouseManagement)
    {
        parent::__construct($warehouseManagement) ;
    }
}