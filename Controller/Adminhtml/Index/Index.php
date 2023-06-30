<?php
/**
 * @author    <mailto:info@18thdigitech.com>
 * @copyright Copyright (c) 2023 18th DigiTech (https://www.18thdigitech.com)
 * @package   Eighteentech_HelloWorld
 * @link      https://www.18thdigitech.com/
 */
namespace Eighteentech\HelloWorld\Controller\Adminhtml\Index;

/**
 * Index is a Admin controller file
 *
 */
class Index extends \Magento\Backend\App\Action
{
    /**
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        return  '18th DigiTech Team.';
    }

    /**
     * Check Permission.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Eighteentech_HelloWorld::index');
    }
}
