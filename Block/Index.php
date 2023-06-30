<?php
/**
 * @author    <mailto:info@18thdigitech.com>
 * @copyright Copyright (c) 2023 18th DigiTech (https://www.18thdigitech.com)
 * @package   Eighteentech_HelloWorld
 * @link      https://www.18thdigitech.com/
 */

namespace Eighteentech\HelloWorld\Block;

/**
 * Index frontend Block file
 *
 */
class Index extends \Magento\Framework\View\Element\Template
{
    /**
     * Return Text
     *
     * @return string
     */
    public function sayHello()
    {
        return __('Message From Block Class');
    }
}
