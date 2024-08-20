<?php 

declare (strict_types=1) ;
namespace Training\WidgetExample\Controller\Index ;

use Magento\Widget\Block\BlockInterface;

class Title extends \Magento\Framework\View\Element\Template implements BlockInterface
{
    protected $_template = 'widget/title.phtml' ;

}