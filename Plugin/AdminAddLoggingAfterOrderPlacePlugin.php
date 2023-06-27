<?php declare(strict_types=1);
/**
 * @author <mailto:info@18thdigitech.com>
 * @copyright Copyright (c) 2023 18th DigiTech (https://www.18thdigitech.com)
 * @package Eighteentech_HelloWorld
 * @link https://www.18thdigitech.com/
 */
namespace Eighteentech\HelloWorld\Plugin;

use Magento\Sales\Model\Order;
use Psr\Log\LoggerInterface;

/**
 *
 */
class AdminAddLoggingAfterOrderPlacePlugin
{

    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(
        LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    /**
     * Add log after an order is placed
     *
     * @param Order $subject
     * @param Order $result
     * @return Order
     */
    public function afterPlace(Order $subject, Order $result): Order
    {
        // Log this admin area order
        $this->logger->notice('An ADMIN User placed an Order - $' . $subject->getBaseTotalDue());
        return $result;
    }
}