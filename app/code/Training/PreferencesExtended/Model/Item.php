<?php 

declare (strict_types=1) ;

namespace Training\PreferencesExtended\Model ;

class Item extends \Training\Preferences\Model\Item
{
    protected function getWarehouses(): array
    {
        return array_merge(parent::getWarehouses(), [
            'EDIN',
            'GLSGW'
        ]);
    }
}