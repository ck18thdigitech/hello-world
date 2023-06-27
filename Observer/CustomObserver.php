<?php
/**
 * @author <mailto:info@18thdigitech.com>
 * @copyright Copyright (c) 2023 18th DigiTech (https://www.18thdigitech.com)
 * @package Eighteentech_HelloWorld
 * @link https://www.18thdigitech.com/
 */
namespace Eighteentech\Helloworld\Observer;

class CustomObserver implements \Magento\Framework\Event\ObserverInterface 
{

   /**
     * @var logger
     */
    protected $logger;

    public function __construct(
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->_logger = $logger;
    }

    public function execute(\Magento\Framework\Event\Observer $observer) {
       $observer_data = $observer->getData('custom_text');
       $this->_logger->info($observer_data);
       return $this;
    }
}