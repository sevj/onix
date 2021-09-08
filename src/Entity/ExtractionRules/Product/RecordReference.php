<?php

namespace Adimeo\Onix\Entity\ExtractionRules\Product;

use Adimeo\Onix\Entity\ExtractionRules\AbstractExtractionRule;
use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Exception\ExtractionException;
use Adimeo\Onix\Exception\ExtractionInvalidException;

class RecordReference extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        if (isset($element->RecordReference)) {
            $this->product->setRecordReference($element->RecordReference);
        }
    }
}
