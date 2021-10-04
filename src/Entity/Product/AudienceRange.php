<?php

namespace Adimeo\Onix\Entity\Product;

use Adimeo\Onix\Entity\CodeList\CodeList29;

class AudienceRange
{

    /**
     * @var string
     */
    protected $AudienceRangeQualifier;

    /**
     * @var array
     */
    protected $AudienceRangePrecision;

    /**
     * @var array
     */
    protected $AudienceRangeValue;

    /**
     * @return string
     */
    public function getAudienceRangeQualifier(): string
    {
        return $this->AudienceRangeQualifier;
    }

    /**
     * @param string $AudienceRangeQualifier
     * @return AudienceRange
     */
    public function setAudienceRangeQualifier(string $AudienceRangeQualifier): AudienceRange
    {
        $this->AudienceRangeQualifier = $AudienceRangeQualifier;
        return $this;
    }

    /**
     * @return array
     */
    public function getAudienceRangePrecision(): array
    {
        return $this->AudienceRangePrecision;
    }

    /**
     * @param array $AudienceRangePrecision
     * @return AudienceRange
     */
    public function setAudienceRangePrecision(array $AudienceRangePrecision): AudienceRange
    {
        $this->AudienceRangePrecision = $AudienceRangePrecision;
        return $this;
    }

    /**
     * @return array
     */
    public function getAudienceRangeValue(): array
    {
        return $this->AudienceRangeValue;
    }

    /**
     * @param array $AudienceRangeValue
     * @return AudienceRange
     */
    public function setAudienceRangeValue(array $AudienceRangeValue): AudienceRange
    {
        $this->AudienceRangeValue = $AudienceRangeValue;
        return $this;
    }

}
