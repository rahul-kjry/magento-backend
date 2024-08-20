<?php 

declare(strict_types=1);

namespace Training\ReplaceConstructorArguments\Controller\Index;

use Magento\Framework\App\ActionInterface;


class Index implements ActionInterface
{
    protected $pageFactory;

    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        $page =  $this->pageFactory->create();
        $page->getConfig()->getTitle()->set('Injectable and Non-Injectable Example');
        return $page;
    }
}