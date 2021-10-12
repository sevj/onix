<?php

namespace Adimeo\Onix;

use Adimeo\Onix\Entity\Product\Product;

class Parser
{
    protected $xml;
    protected $products;

    protected $rules = [
        \Adimeo\Onix\Entity\ExtractionRules\Product::class
    ];

    public function __construct(string $xml)
    {
        $this->xml = $xml;
    }

    public function parseByBatch($start = 0, $limit = 100)
    {
        $xml = simplexml_load_file($this->xml);
        $xml->registerXPathNamespace('product', 'http://www.editeur.org/onix/3.0/reference');

        $end = $start + $limit;
        $expression = sprintf('product:Product[position()<=%s and position()>%s]', $end, $start);
        $products = $xml->xpath($expression);

        $this->parseProducts($products);
    }

    protected function parseProducts(array $products)
    {
        $this->products = [];
        foreach ($products as $xmlProduct) {
            $product = new Product();

            foreach ($this->rules as $rule) {
                (new $rule($product))->proceed($xmlProduct);
            }

            $this->products[] = $product;
        }
    }

    public function parse()
    {
        $xml = simplexml_load_file($this->xml);

        $xml->registerXPathNamespace('product', 'http://www.editeur.org/onix/3.0/reference');

        $expression = sprintf('product:Product');
        $products = $xml->xpath($expression);

        $this->parseProducts($products);
    }

    public function count(): int
    {
        $xml = simplexml_load_file($this->xml);
        $xml->registerXPathNamespace('product', 'http://www.editeur.org/onix/3.0/reference');

        $expression = 'product:Product';
        $products = $xml->xpath($expression);

        return count($products);
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }
}
