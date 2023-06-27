<?php
/**
 * @author <mailto:info@18thdigitech.com>
 * @copyright Copyright (c) 2023 18th DigiTech (https://www.18thdigitech.com)
 * @package Eighteentech_HelloWorld
 * @link https://www.18thdigitech.com/
 */
namespace Eighteentech\HelloWorld\Model;

class HelloWorld extends \Magento\Framework\Model\AbstractModel 
{
    protected function _construct()
    {
        $this->_init('Eighteentech\HelloWorld\Model\ResourceModel\HelloWorld');
    }
}