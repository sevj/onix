<?php

namespace Adimeo\Onix\Entity\ExtractionRules\Product;

use Adimeo\Onix\Entity\CodeList\CodeList1;
use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Exception\ExtractionException;
use Adimeo\Onix\Exception\ExtractionInvalidException;

class NotificationType extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->NotificationType)) {
            $this->product->setNotificationType(CodeList1::resolve($element->NotificationType, $this->language));
        }
    }
}
