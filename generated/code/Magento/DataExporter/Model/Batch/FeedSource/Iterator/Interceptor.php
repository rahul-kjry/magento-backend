<?php
namespace Magento\DataExporter\Model\Batch\FeedSource\Iterator;

/**
 * Interceptor class for @see \Magento\DataExporter\Model\Batch\FeedSource\Iterator
 */
class Interceptor extends \Magento\DataExporter\Model\Batch\FeedSource\Iterator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resourceConnection, \Magento\DataExporter\Model\Batch\BatchLocator $batchLocator, \Magento\DataExporter\Model\Batch\BatchTable $batchTable, string $sourceTableKeyColumn)
    {
        $this->___init();
        parent::__construct($resourceConnection, $batchLocator, $batchTable, $sourceTableKeyColumn);
    }

    /**
     * {@inheritdoc}
     */
    public function current() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'current');
        return $pluginInfo ? $this->___callPlugins('current', func_get_args(), $pluginInfo) : parent::current();
    }

    /**
     * {@inheritdoc}
     */
    public function next() : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'next');
        $pluginInfo ? $this->___callPlugins('next', func_get_args(), $pluginInfo) : parent::next();
    }

    /**
     * {@inheritdoc}
     */
    public function key() : mixed
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'key');
        return $pluginInfo ? $this->___callPlugins('key', func_get_args(), $pluginInfo) : parent::key();
    }

    /**
     * {@inheritdoc}
     */
    public function valid() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'valid');
        return $pluginInfo ? $this->___callPlugins('valid', func_get_args(), $pluginInfo) : parent::valid();
    }

    /**
     * {@inheritdoc}
     */
    public function rewind() : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'rewind');
        $pluginInfo ? $this->___callPlugins('rewind', func_get_args(), $pluginInfo) : parent::rewind();
    }

    /**
     * {@inheritdoc}
     */
    public function count() : int
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'count');
        return $pluginInfo ? $this->___callPlugins('count', func_get_args(), $pluginInfo) : parent::count();
    }

    /**
     * {@inheritdoc}
     */
    public function markBatchForRetry() : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'markBatchForRetry');
        $pluginInfo ? $this->___callPlugins('markBatchForRetry', func_get_args(), $pluginInfo) : parent::markBatchForRetry();
    }
}
