<?php 

declare (strict_types=1) ;
namespace Training\InjectablesAndNonInjectablesExample\ViewModel ;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\InjectablesAndNonInjectablesExample\Service\Supply ;
use Training\InjectablesAndNonInjectablesExample\Service\Demand ; 
class Example implements ArgumentInterface
{
    protected Supply $supply ;
    protected Demand $demand ;
    public function __construct(Supply $supply , Demand $demand)
    {
        $this->supply = $supply ;
        $this->demand = $demand ;
    }

    public function getSupply() : Supply
    {
        return $this->supply ;
    }

    public function getDemand() : Demand
    {
        return $this->demand ;
    }

}