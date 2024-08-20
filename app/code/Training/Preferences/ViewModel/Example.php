<?php
declare (strict_types=1) ;

namespace Training\Preferences\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\Preferences\Api\Data\ItemInterface;
use Training\Preferences\Api\ItemRepositoryInterface;
use Magento\Framework\App\RequestInterface ;

class Example implements ArgumentInterface
{
    protected ItemRepositoryInterface $itemRepository;

    public function __construct(ItemRepositoryInterface $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }

    public function getItem(RequestInterface $request): ItemInterface
    {
        return $this->itemRepository->newItem($request->getParam('code'));
    }

}