<?php

declare(strict_types=1);

namespace Training\PageTitleExample\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    protected PageFactory $pageFactory;
    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set('Page Title Example');
        // $page->getLayout()->getBlock('page.main.title')->setPageTitle('Magento 2 Training set from Controller');
        return $page;
    }
}