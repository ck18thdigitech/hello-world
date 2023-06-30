<?php
/**
 * @author    <mailto:info@18thdigitech.com>
 * @copyright Copyright (c) 2023 18th DigiTech (https://www.18thdigitech.com)
 * @package   Eighteentech_HelloWorld
 * @link      https://www.18thdigitech.com/
 */
namespace Eighteentech\Helloworld\Observer;

/**
 * CustomObserver is a Observer
 *
 */
class CustomObserver implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var helper
     */
    protected $helper;

    /**
     * @var logger
     */
    protected $logger;

    /**
     * @param Data            $helper
     * @param LoggerInterface $logger
     */
    public function __construct(
        \Eighteentech\HelloWorld\Helper\Data $helper,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->helper = $helper;
        $this->_logger = $logger;
    }

    /**
     * @return this
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $isEnable = $this->helper->getIsEnable();
        if ($isEnable) {
            $observer_data = $observer->getData('custom_text');
            $this->_logger->info($observer_data);
            return $this;
        }
    }
}
