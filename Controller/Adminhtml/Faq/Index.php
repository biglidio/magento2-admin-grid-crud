<?php

namespace Biglidio\AnsweredQuestions\Controller\Adminhtml\Faq;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action implements HttpGetActionInterface
{
    const ADMIN_RESOURCE = 'Biglidio_AnsweredQuestions::faq';
    
    /** @var PageFactory */
    protected $pageFactory;

    /**
     * Index constructor
     *
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory
    )
    {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }
    
    /** @return Page */
    public function execute(): Page
    {
        $page = $this->pageFactory->create();
        $page->setActiveMenu('Biglidio_AnsweredQuestions::faq');
        $page->getConfig()->getTitle()->prepend(__('FAQ\'s'));
        return $page;
    }
}
