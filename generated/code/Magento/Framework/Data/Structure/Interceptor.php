<?php
namespace Magento\Framework\Data\Structure;

/**
 * Interceptor class for @see \Magento\Framework\Data\Structure
 */
class Interceptor extends \Magento\Framework\Data\Structure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(?array $elements = null)
    {
        $this->___init();
        parent::__construct($elements);
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
