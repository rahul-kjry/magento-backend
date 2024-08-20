<?php
namespace Training\LoggerTesting\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action
{
    protected $_logger;

    public function __construct(
        Context $context,
        \Training\LoggerTesting\Logger\Logger $logger
    ) {
        $this->_logger = $logger;
        parent::__construct($context);
    }

    public function execute()
    {
        $data = $this->getRequest()->getParams();
        $this->_logger->info(print_r($data));
        $this->_logger->info("Some text string data"); 
        return $this->resultRedirectFactory->create()->setPath('*/*/*');
    }
}