<?php

declare(strict_types=1);

namespace Training\PluginExample\Plugin;

use Magento\Catalog\Api\Data\ProductInterface;
use Training\PluginExample\Model\ProductKey;

class ProductKeyPlugin
{

    public function aroundGetKey(ProductKey $subject, callable $proceed, ...$args)
    {
        $result =  $proceed(...$args);
        $result .= ' Item';
        return $result;
    }
}