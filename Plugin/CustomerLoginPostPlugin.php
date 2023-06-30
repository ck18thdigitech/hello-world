<?php declare(strict_types=1);
/**
 * @author    <mailto:info@18thdigitech.com>
 * @copyright Copyright (c) 2023 18th DigiTech (https://www.18thdigitech.com)
 * @package   Eighteentech_HelloWorld
 * @link      https://www.18thdigitech.com/
 */
namespace Eighteentech\HelloWorld\Plugin;

use Psr\Log\LoggerInterface;
use Magento\Framework\App\RequestInterface;
use Eighteentech\HelloWorld\Helper\Data;

/**
 * CustomerLoginPostPlugin file
 *
 */
class CustomerLoginPostPlugin
{
    /**
     * @var helper
     */
    protected Data $helper;

    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * @var RequestInterface
     */
    private RequestInterface $request;

    /**
     * @param Data             $helper
     * @param LoggerInterface  $logger
     * @param RequestInterface $request
     */
    public function __construct(
        Data $helper,
        LoggerInterface $logger,
        RequestInterface $request
    ) {
        $this->helper = $helper;
        $this->logger = $logger;
        $this->request = $request;
    }

    /**
     * Simple example of a before Plugin on a public method in a Controller
     */
    public function beforeExecute()
    {
        $isEnable = $this->helper->getIsEnable();
        if ($isEnable) {
            $login = $this->request->getParam('login');
            $username = $login['username'];
            $this->logger->notice("Login Post controller was used for " . $username);
        }
    }
}
