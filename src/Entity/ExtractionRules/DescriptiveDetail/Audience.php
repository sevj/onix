<?php

namespace Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail;

use Adimeo\Onix\Entity\CodeList\CodeList148;
use Adimeo\Onix\Entity\CodeList\CodeList149;
use Adimeo\Onix\Entity\CodeList\CodeList15;
use Adimeo\Onix\Entity\CodeList\CodeList27;
use Adimeo\Onix\Entity\CodeList\CodeList28;
use Adimeo\Onix\Entity\CodeList\CodeList29;
use Adimeo\Onix\Entity\CodeList\CodeList30;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product\TitleDetail;
use Adimeo\Onix\Entity\Product\TitleElement;

class Audience extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (!isset($element->Audience)) {
            return;
        }
        foreach ($element->Audience as $audienceElement) {
            $audience = new \Adimeo\Onix\Entity\Product\Audience();
            $audience->setAudienceCodeType(CodeList29::resolve($audienceElement->AudienceCodeType, $this->language));
            $audience->setAudienceCodeValue(CodeList28::resolve($audienceElement->AudienceCodeValue, $this->language));

            $this->product->getDescriptiveDetail()->addAudience($audience);
        }

        if (isset($element->AudienceRange)) {
            $audienceRange = new \Adimeo\Onix\Entity\Product\AudienceRange();
            $audienceRange->setAudienceRangeQualifier($element->AudienceRange->AudienceRangeQualifier);

            $precision = [];
            foreach ($element->AudienceRange->AudienceRangePrecision as $item) {
                $precision[] = (string) $item;
            }

            $value = [];
            foreach ($element->AudienceRange->AudienceRangeValue as $item) {
                $value[] = (int) $item;
            }
            $audienceRange->setAudienceRangePrecision($precision);
            $audienceRange->setAudienceRangeValue($value);

            $this->product->getDescriptiveDetail()->addAudienceRange($audienceRange);
        }
    }
}
