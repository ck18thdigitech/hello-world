<?php
/**
 * @author    <mailto:info@18thdigitech.com>
 * @copyright Copyright (c) 2023 18th DigiTech (https://www.18thdigitech.com)
 * @package   Eighteentech_HelloWorld
 * @link      https://www.18thdigitech.com/
 */
namespace EighteenTech\HelloWorld\Cron;

/**
 * HelloWorld cron file
 *
 */
class HelloWorld
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
     * Simple example to get response from Logger
     */
    public function execute()
    {
        $isEnable = $this->helper->getIsEnable();
        if ($isEnable) {
            $this->_logger->info('info1234');
            // Write to default log file: var/log/system.log
            //Output: [2017-02-22 04:52:56] main.INFO: info1234 [] []
        }
    }
}
