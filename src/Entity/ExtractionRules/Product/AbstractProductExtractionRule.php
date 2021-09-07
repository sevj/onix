<?php

namespace Adimeo\Onix\Entity\ExtractionRules\Product;

use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product;

class AbstractProductExtractionRule implements ExtractionRule
{
    protected Product $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function proceed(\SimpleXMLElement $element): void
    {
        throw new \Exception('Not implemented proceed method');
    }
}
