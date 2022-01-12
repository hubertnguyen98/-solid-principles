<?php

namespace Solid\SingleResponsibilityPrinciple\Controller\Principle;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class SingleResponsibility extends Action
{
    /**
     * Execute action based on request and return result
     */
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend(__('Single Responsibility Principle'));
        return $resultPage;
    }
}
