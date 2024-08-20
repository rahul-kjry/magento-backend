<?php
namespace Magento\RequireJs\Model\FileManager;

/**
 * Interceptor class for @see \Magento\RequireJs\Model\FileManager
 */
class Interceptor extends \Magento\RequireJs\Model\FileManager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\RequireJs\Config $config, \Magento\Framework\Filesystem $appFilesystem, \Magento\Framework\App\State $appState, \Magento\Framework\View\Asset\Repository $assetRepo)
    {
        $this->___init();
        parent::__construct($config, $appFilesystem, $appState, $assetRepo);
    }

    /**
     * {@inheritdoc}
     */
    public function createRequireJsConfigAsset()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createRequireJsConfigAsset');
        return $pluginInfo ? $this->___callPlugins('createRequireJsConfigAsset', func_get_args(), $pluginInfo) : parent::createRequireJsConfigAsset();
    }
}
