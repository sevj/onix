<?php

namespace Adimeo\Onix\Entity\ExtractionRules\PublishingDetail;

use Adimeo\Onix\Entity\CodeList\CodeList163;
use Adimeo\Onix\Entity\CodeList\CodeList55;
use Adimeo\Onix\Entity\CodeList\CodeList64;
use Adimeo\Onix\Entity\Date;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;

class PublishingDate extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->PublishingDate)) {
            foreach ($element->PublishingDate as $publishingDateElement) {
                $publishingDate = new \Adimeo\Onix\Entity\Product\PublishingDate();
                $publishingDate->setPublishingDateRole(CodeList163::resolve($publishingDateElement->PublishingDateRole, $this->language));
                $date = new Date();
                $dateFormat = '00';
                if (isset($publishingDateElement->DateFormat)) {
                    $dateFormat = $publishingDateElement->DateFormat;
                }
                $date->setFormatCode(CodeList55::resolve($dateFormat, $this->language));
                $date->parseDate($publishingDateElement->Date);
                $publishingDate->setDate($date);

                $this->product->getPublishingDetail()->addPublishingDate($publishingDate);
            }
        }
    }
}
