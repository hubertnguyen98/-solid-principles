<?php

namespace Solid\SingleResponsibilityPrinciple\Block;

use Magento\Framework\Json\Helper\Data;
use Magento\Framework\View\Element\Template;
use Solid\SingleResponsibilityPrinciple\Model\JsonReportFormatter;

class Principle extends Template
{

    /**
     * @var JsonReportFormatter
     */
    protected $jsonReportFormatter;

    /**
     * @param Template\Context $context
     * @param Data $jsonHelper
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        JsonReportFormatter $jsonReportFormatter,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->jsonReportFormatter = $jsonReportFormatter;
    }

    public function getJsonReportFormatter()
    {
        return $this->jsonReportFormatter->formatJson();
    }
}
