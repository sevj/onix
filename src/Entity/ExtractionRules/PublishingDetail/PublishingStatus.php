<?php

namespace Adimeo\Onix\Entity\ExtractionRules\PublishingDetail;

use Adimeo\Onix\Entity\CodeList\CodeList64;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;

class PublishingStatus extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->PublishingStatus)) {
            $this->product->getPublishingDetail()->setPublishingStatus(CodeList64::resolve($element->PublishingStatus, $this->language));
        }
    }
}
