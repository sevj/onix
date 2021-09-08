<?php

namespace Adimeo\Onix\Entity\ExtractionRules;

use Adimeo\Onix\Entity\ExtractionRules\CollateralDetail\SupportingResource;
use Adimeo\Onix\Entity\ExtractionRules\CollateralDetail\TextContent;

class CollateralDetail extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        $toProceed = [
            TextContent::class,
            SupportingResource::class
        ];

        foreach ($toProceed as $class) {
            (new $class($this->product))->proceed($element);
        }
    }
}
