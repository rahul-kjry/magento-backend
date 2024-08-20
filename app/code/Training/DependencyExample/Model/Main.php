<?php declare (strict_types=1);

namespace Training\DependencyExample\Model;

use Training\DependencyExample\Model\VirtualType\DefaultName;
use Magento\Framework\DataObject ;
class Main
{

    protected Injectable $injectable ;
    protected array $data ;
    protected AbstractUtil $util ;
    protected NonInjectableInterfaceFactory $nonInjectableFactory ;
    protected DefaultName $defaultName ;
    protected ?Optional $optional ;
    protected HeavyOperation $heavyOperation ;
    protected MethodInjection $methodInjection ;
    public function __construct(
        InjectableInterface $injectable ,
        NonInjectableInterfaceFactory $nonInjectableFactory ,
        DefaultName $defaultName ,
        AbstractUtil $util ,
        HeavyOperation $heavyOperation ,
        MethodInjection $methodInjection ,
        Optional $optional = null ,
        array $data = [] 
    ) {
        $this->injectable = $injectable ;
        $this->data = $data ;
        $this->util = $util ;
        $this->defaultName= $defaultName;
        $this->heavyOperation= $heavyOperation; 
        $this->methodInjection = $methodInjection ;
        $this->optional = $optional ;
        $this->nonInjectableFactory = $nonInjectableFactory ;
    }

    public function getId() : string {
        return  $this->data['id']  ; 
    }

    public function getInjectable() : Injectable {
        return $this->injectable ;
    }

    public function getNonInjectable() : NonInjectable {
        return $this->nonInjectableFactory->create() ;
    }

    public function getUtil() : AbstractUtil {
        return $this->util ;
    }

    public function getHeavyOperation() : HeavyOperation {
        return $this->heavyOperation ;
    }

    public function getDefaultName() : DefaultName {
        return $this->defaultName ;
    }

    public function getOptional() : Optional {
        return $this->optional ;
    }
    public function getMethodInjectionName() : string {
        $dataObject = new DataObject(['name'=>'Method Injection']) ;
        return $this->methodInjection->getName($dataObject) ; 
    }
}