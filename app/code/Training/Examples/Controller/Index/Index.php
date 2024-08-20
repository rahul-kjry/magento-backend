<?php 

declare (strict_types=1) ;
namespace Training\Examples\Controller\Index ;
use Magento\Framework\App\ActionInterface;
class Index implements ActionInterface
{

    protected $resultFactory ;
    public function __construct(\Magento\Framework\Controller\Result\RawFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory ;
    }
    public function execute()
    {
        return $this->resultFactory->create()
        ->setHeader('Content-Type' , 'text/xml') 
        ->setContents('<root><name>Yagnesh</name><job>HBWSL</job></root>') ;
    }
}