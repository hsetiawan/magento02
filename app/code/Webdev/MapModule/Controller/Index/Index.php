<?php
namespace Webdev\MapModule\Controller\Index;

use \Magento\Framework\App\Action\Action;

use \Magento\Framework\View\Result\PageFactory;

use \Magento\Framework\View\Result\Page;

use \Magento\Framework\App\Action\Context;

use \Magento\Framework\Exception\LocalizedException;

 
class Index extends Action {

    
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;
    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     *
     * @codeCoverageIgnore
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct(
            $context
        );
        $this->resultPageFactory = $resultPageFactory;
    }
    /**
     * Prints the statement
     * @return Page
     * @throws LocalizedException
     */
    public function execute()
    {
        echo "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253840.478949799!2d106.829518!3d-6.229746499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1707117260490!5m2!1sid!2sid' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
        exit;
    }
}