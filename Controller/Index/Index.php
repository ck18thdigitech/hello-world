<?php
/**
 * @author <mailto:info@18thdigitech.com>
 * @copyright Copyright (c) 2023 18th DigiTech (https://www.18thdigitech.com)
 * @package Eighteentech_HelloWorld
 * @link https://www.18thdigitech.com/
 */
namespace Eighteentech\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action

{
    /**
     * @var pageFactory
     */
    protected $_pageFactory;

    public function __construct(
       \Magento\Framework\App\Action\Context $context,
       \Magento\Framework\View\Result\PageFactory $pageFactory
    )
    {
       $this->_pageFactory = $pageFactory;
       return parent::__construct($context);
    }

    public function execute()
    {
       $resultPage = $this->_pageFactory->create();
       $this->_eventManager->dispatch('hw_customobserver_log', ['custom_text' => 'Custom Observer']);
       $resultPage->getConfig()->getTitle()->prepend(__('Welcome to Hello World!'));
       return $resultPage;
    }
}