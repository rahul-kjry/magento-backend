<?php

declare(strict_types=1);

namespace Training\DispatchEventExample\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    protected PageFactory $pageFactory;
    protected ManagerInterface $eventManager;
    public function __construct(PageFactory $pageFactory, ManagerInterface $eventManager)
    {
        $this->pageFactory = $pageFactory;
        $this->eventManager = $eventManager;
    }

    public function execute()
    {
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set('Dispatch Event Example');

        $this->eventManager->dispatch('dispatch_event_example', ['page' => $page]);
        return $page;
    }
}