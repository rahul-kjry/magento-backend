<?php
namespace Training\Examples\Controller\Index\Index;

/**
 * Interceptor class for @see \Training\Examples\Controller\Index\Index
 */
class Interceptor extends \Training\Examples\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\Result\RawFactory $resultFactory)
    {
        $this->___init();
        parent::__construct($resultFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
