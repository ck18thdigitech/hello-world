<?php declare(strict_types=1);
/**
 * @author <mailto:info@18thdigitech.com>
 * @copyright Copyright (c) 2023 18th DigiTech (https://www.18thdigitech.com)
 * @package Eighteentech_HelloWorld
 * @link https://www.18thdigitech.com/
 */
namespace Eighteentech\HelloWorld\Plugin;

use Psr\Log\LoggerInterface;
use Magento\Framework\App\RequestInterface;

/**
 * Introduces Context information for ActionInterface of Customer Action
 */
class CustomerLoginPostPlugin
{

    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * @var RequestInterface
     */
    private RequestInterface $request;

    /**
     * @param LoggerInterface $logger
     * @param RequestInterface $request
     */
    public function __construct(LoggerInterface $logger, RequestInterface $request)
    {
        $this->logger = $logger;
        $this->request = $request;
    }

    /**
     * Simple example of a before Plugin on a public method in a Controller
     */
    public function beforeExecute()
    {
        $login = $this->request->getParam('login');
        $username = $login['username'];
        $this->logger->notice( "Login Post controller was used for " . $username );
    }
}