<?php 

declare(strict_types=1);

namespace Training\Examples\Controller\Index;

use Magento\Framework\App\ActionInterface;


class Redirect implements ActionInterface
{
    protected $redirectFactory;

    public function __construct(\Magento\Framework\Controller\Result\RedirectFactory $redirectFactory)
    {
        $this->redirectFactory = $redirectFactory;
    }

    public function execute()
    {
        return $this->redirectFactory->create()->setUrl('/example/index/page');
    }
}