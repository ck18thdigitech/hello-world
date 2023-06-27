<?php
/**
 * @author <mailto:info@18thdigitech.com>
 * @copyright Copyright (c) 2023 18th DigiTech (https://www.18thdigitech.com)
 * @package Eighteentech_HelloWorld
 * @link https://www.18thdigitech.com/
 */
namespace Eighteentech\HelloWorld\Model\ResourceModel;

class HelloWorld extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }
    
    protected function _construct()
    {
        $this->_init('helloworld_profile_record', 'entity_id');
    }
    
}