<?php
/**
 * @author    <mailto:info@18thdigitech.com>
 * @copyright Copyright (c) 2023 18th DigiTech (https://www.18thdigitech.com)
 * @package   Eighteentech_HelloWorld
 * @link      https://www.18thdigitech.com/
 */
namespace Eighteentech\HelloWorld\Model\ResourceModel\HelloWorld;

/**
 * Collection Model tell us about relation between Model and ResourceModel
 *
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            Eighteentech\HelloWorld\Model\HelloWorld::class,
            Eighteentech\HelloWorld\Model\ResourceModel\HelloWorld::class
        );
    }
}
