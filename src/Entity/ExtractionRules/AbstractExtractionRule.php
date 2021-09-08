<?php

namespace Adimeo\Onix\Entity\ExtractionRules;

use Adimeo\Onix\Entity\ExtractionRules\ExtractionRule;
use Adimeo\Onix\Entity\Product\Product;

class AbstractExtractionRule implements ExtractionRule
{
    protected Product $product;
    protected string $language = 'fr';

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function proceed(\SimpleXMLElement $element): void
    {
        throw new \Exception('Not implemented proceed method');
    }
}
