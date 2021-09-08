<?php

namespace Adimeo\Onix\Entity\ExtractionRules\DescriptiveDetail;

use Adimeo\Onix\Entity\CodeList\CodeList148;
use Adimeo\Onix\Entity\CodeList\CodeList149;
use Adimeo\Onix\Entity\CodeList\CodeList15;
use Adimeo\Onix\Entity\CodeList\CodeList27;
use Adimeo\Onix\Entity\CodeList\CodeList29;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product\TitleDetail;
use Adimeo\Onix\Entity\Product\TitleElement;

class Audience extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        foreach ($element->Audience as $audienceElement) {
            $audience = new \Adimeo\Onix\Entity\Product\Audience();
            $audience->setAudienceCodeType(CodeList29::resolve($audienceElement->AudienceCodeType, $this->language));
            $audience->setAudienceCodeValue($audienceElement->AudienceCodeValue);

            $this->product->getDescriptiveDetail()->addAudience($audience);
        }

    }
}
