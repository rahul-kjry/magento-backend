<?php
namespace Training\DependencyExample\Controller\Index\Index;

/**
 * Interceptor class for @see \Training\DependencyExample\Controller\Index\Index
 */
class Interceptor extends \Training\DependencyExample\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->___init();
        parent::__construct($pageFactory);
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
