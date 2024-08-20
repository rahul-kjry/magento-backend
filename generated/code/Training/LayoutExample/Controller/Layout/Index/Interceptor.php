<?php
namespace Training\LayoutExample\Controller\Layout\Index;

/**
 * Interceptor class for @see \Training\LayoutExample\Controller\Layout\Index
 */
class Interceptor extends \Training\LayoutExample\Controller\Layout\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Result\PageFactory $resultFactory)
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
