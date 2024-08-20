<?php
namespace Training\Examples\Controller\Index\Json;

/**
 * Interceptor class for @see \Training\Examples\Controller\Index\Json
 */
class Interceptor extends \Training\Examples\Controller\Index\Json implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        $this->___init();
        parent::__construct($jsonFactory);
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
