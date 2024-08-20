<?php 

declare(strict_types=1);

namespace Training\Examples\Controller\Index;

use Magento\Framework\App\ActionInterface;


class Json implements ActionInterface
{
    protected $jsonFactory;

    public function __construct(\Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        $this->jsonFactory = $jsonFactory;
    }

    public function execute()
    {
        return $this->jsonFactory->create()
        ->setHeader('Content-Type'  ,'application/json')
        ->setData([
            'name' => 'Yagnesh' ,
            'job' => 'HBWSL' 
        ]);
    }
}