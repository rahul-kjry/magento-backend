<?php
namespace Magento\Framework\View\Asset\GroupedCollection;

/**
 * Interceptor class for @see \Magento\Framework\View\Asset\GroupedCollection
 */
class Interceptor extends \Magento\Framework\View\Asset\GroupedCollection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Asset\PropertyGroupFactory $propertyFactory)
    {
        $this->___init();
        parent::__construct($propertyFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getFilteredProperties(\Magento\Framework\View\Asset\AssetInterface $asset, $properties = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFilteredProperties');
        return $pluginInfo ? $this->___callPlugins('getFilteredProperties', func_get_args(), $pluginInfo) : parent::getFilteredProperties($asset, $properties);
    }
}
