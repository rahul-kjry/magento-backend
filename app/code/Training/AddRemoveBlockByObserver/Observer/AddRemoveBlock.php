<?php 

declare (strict_types=1) ;

namespace Training\AddRemoveBlockByObserver\Observer ;

use Magento\Framework\Event\Observer;
use Magento\Framework\View\Element\Template; 
use Magento\Framework\Event\ObserverInterface;

class AddRemoveBlock implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $layout = $observer->getLayout();
        if ($observer->getFullActionName() === 'catalog_product_view') {

            // steps to remove blocks starts
            $block = $layout->getBlock('view.addto.compare');
            if ($block) {
                $layout->unsetElement($block->getNameInLayout());
            }
            // steps to remove block ends
            
            $layout->addBlock(Template::class, 'training.test.block', 'product.info.addto')
                ->setTemplate('Training_AddRemoveBlockByObserver::test.phtml');
        }
    }
    
}