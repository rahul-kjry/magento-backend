<?php
namespace Magento\Framework\View\Layout\Data\Structure;

/**
 * Interceptor class for @see \Magento\Framework\View\Layout\Data\Structure
 */
class Interceptor extends \Magento\Framework\View\Layout\Data\Structure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Psr\Log\LoggerInterface $logger, \Magento\Framework\App\State $state, ?array $elements = null)
    {
        $this->___init();
        parent::__construct($logger, $state, $elements);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute($elementId, $attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        return $pluginInfo ? $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo) : parent::getAttribute($elementId, $attribute);
    }
}
