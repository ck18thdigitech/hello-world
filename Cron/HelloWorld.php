<?php
/**
 * @author <mailto:info@18thdigitech.com>
 * @copyright Copyright (c) 2023 18th DigiTech (https://www.18thdigitech.com)
 * @package Eighteentech_HelloWorld
 * @link https://www.18thdigitech.com/
 */
namespace EighteenTech\HelloWorld\Cron;

class HelloWorld
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

    public function execute()
    {
        $this->_logger->info('info1234'); 
        // Write to default log file: var/log/system.log
        //Output: [2017-02-22 04:52:56] main.INFO: info1234 [] []
    }
}