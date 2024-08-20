<?php
namespace Training\Examples\Controller\Index\Redirect;

/**
 * Interceptor class for @see \Training\Examples\Controller\Index\Redirect
 */
class Interceptor extends \Training\Examples\Controller\Index\Redirect implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\Result\RedirectFactory $redirectFactory)
    {
        $this->___init();
        parent::__construct($redirectFactory);
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
