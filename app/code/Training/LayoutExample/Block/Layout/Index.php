<?php 

declare(strict_types=1);

namespace Training\LayoutExample\Block\Layout;


class Index extends \Magento\Framework\View\Element\Template
{
    protected function _prepareLayout()
    {
        parent::_prepareLayout() ;
        $pageMainTitle = $this->getLayout()->getBlock('page.main.title');
        if ($pageMainTitle) {
            $pageMainTitle->setPageTitle('Yagnesh Developer');
        }
    }

    public function getSubTitle(): string
    {
        return 'Learn magento Development' ;
    }
}