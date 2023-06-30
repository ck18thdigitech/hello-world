<?php
/**
 * @author    <mailto:info@18thdigitech.com>
 * @copyright Copyright (c) 2023 18th DigiTech (https://www.18thdigitech.com)
 * @package   Eighteentech_HelloWorld
 * @link      https://www.18thdigitech.com/
 */
namespace Eighteentech\HelloWorld\Model\ResourceModel;

/**
 *  HelloWorld ResourceModel tell table name and Primary Key field
 *
 */
class HelloWorld extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('helloworld_profile_record', 'entity_id');
    }
}
