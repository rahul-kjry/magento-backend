<?php
namespace Training\Examples\Controller\Index\Forward;

/**
 * Interceptor class for @see \Training\Examples\Controller\Index\Forward
 */
class Interceptor extends \Training\Examples\Controller\Index\Forward implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\Result\ForwardFactory $forwardFactory)
    {
        $this->___init();
        parent::__construct($forwardFactory);
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
