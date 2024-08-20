<?php
namespace Training\Examples\Controller\Index\Page;

/**
 * Interceptor class for @see \Training\Examples\Controller\Index\Page
 */
class Interceptor extends \Training\Examples\Controller\Index\Page implements \Magento\Framework\Interception\InterceptorInterface
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
