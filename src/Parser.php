<?php

namespace Adimeo\Onix;

use Adimeo\Onix\Entity\ExtractionRules\Product\Barcode;
use Adimeo\Onix\Entity\ExtractionRules\Product\ProductComposition;
use Adimeo\Onix\Entity\ExtractionRules\Product\ProductIdentifier;
use Adimeo\Onix\Entity\Product;

class Parser
{
    protected $xml;
    protected $products;

    public function __construct(string $xml)
    {
        $this->xml = $xml;
    }

    public function parse()
    {
        $xml = simplexml_load_file($this->xml);

        $rules = [
            ProductIdentifier::class,
            Barcode::class,
            ProductComposition::class
        ];


        foreach ($xml->Product as $xmlProduct) {
            $product = new Product();

            foreach ($rules as $rule) {
                (new $rule($product))->proceed($xmlProduct);
            }
        }
    }
}
