<?php

namespace Solid\SingleResponsibilityPrinciple\Model;

use Magento\Framework\Json\Helper\Data;

class ReportViolation
{
    /**
     * @var Data
     */
    protected $jsonHelper;

    /**
     * @param Data $jsonHelper
     */
    public function __construct(
        Data $jsonHelper
    ) {
        $this->jsonHelper = $jsonHelper;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return 'Single Responsibility';
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return '2022-1-11';
    }

    /**
     * @return string[]
     */
    public function getContents(): array
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }

    /**
     * @return string
     */
    public function formatJson(): string
    {
        return $this->jsonHelper->jsonEncode($this->getContents());
    }
}
