<?php
/**
 * @author <mailto:info@18thdigitech.com>
 * @copyright Copyright (c) 2023 18th DigiTech (https://www.18thdigitech.com)
 * @package Eighteentech_HelloWorld
 * @link https://www.18thdigitech.com/
 */
namespace Eighteentech\HelloWorld\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;
use \Magento\Framework\App\Helper\Context;
use \Magento\Store\Model\ScopeInterface;
use \Magento\Framework\App\Config\ScopeConfigInterface;

class Data extends AbstractHelper
{
    const XML_IS_ENABLE = 'eighteentech/general/enable';

    /**
     * @var scopeConfig
     */
    protected $_scopeConfig;

    /**
     * @param  Context $context
     * @param  ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    public function getConfigValue($field, $storeId = null)
    {
        return $this->_scopeConfig->getValue($field,ScopeInterface::SCOPE_STORE,$storeId);
    }

    public function getIsEnable($code, $storeId = null)
    {
        return $this->getConfigValue(self::XML_IS_ENABLE, $storeId);
    }
}
