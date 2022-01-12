<?php

namespace Solid\SingleResponsibilityPrinciple\Model;

class Report
{
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
}
