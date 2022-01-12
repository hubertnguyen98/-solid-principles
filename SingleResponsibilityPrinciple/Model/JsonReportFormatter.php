<?php

namespace Solid\SingleResponsibilityPrinciple\Model;

use Magento\Framework\Json\Helper\Data;

class JsonReportFormatter
{
    /**
     * @var Data
     */
    protected $jsonHelper;

    /**
     * @var Report
     */
    protected $report;

    /**
     * @param Data $jsonHelper
     * @param Report $report
     */
    public function __construct(
        Data $jsonHelper,
        Report $report
    ) {
        $this->jsonHelper = $jsonHelper;
        $this->report = $report;
    }

    /**
     * @return string
     */
    public function formatJson(): string
    {
        return $this->jsonHelper->jsonEncode($this->report->getContents());
    }
}
