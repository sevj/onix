<?php

namespace Adimeo\Onix\Entity\ExtractionRules;

use Adimeo\Onix\Entity\ExtractionRules\RelatedMaterial\RelatedProduct;
use Adimeo\Onix\Entity\ExtractionRules\RelatedMaterial\RelatedWork;

class RelatedMaterial extends AbstractExtractionRule implements ExtractionRule
{
    public function proceed(\SimpleXMLElement $element): void
    {
        $toProceed = [
            RelatedWork::class,
            RelatedProduct::class,
        ];

        foreach ($toProceed as $class) {
            (new $class($this->product))->proceed($element);
        }
    }
}
