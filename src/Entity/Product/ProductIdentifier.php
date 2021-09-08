<?php

namespace Adimeo\Onix\Entity\Product;

use Adimeo\Onix\Entity\CodeList\CodeList5;

class ProductIdentifier
{
    public const INTERNAL    = "01";
    public const ISBN10_TYPE = "02";
    public const GTIN        = "03";
    public const ISBN13_TYPE = "15";

    /**
     * ProductIDType
     *
     * @var CodeListList5
     */
    protected $ProductIDType;

    /**
     * IDValue
     *
     * @var string
     */
    protected $IDValue;

    /**
     * @var string
     */
    protected $IDName;

    /**
     * Set ProductIDType
     *
     * @param string $value
     * @return void
     */
    public function setProductIDType(CodeList5 $ProductIDType)
    {
        $this->ProductIDType = $ProductIDType;
    }

    /**
     * Set IDValue
     *
     * @param string $value
     * @return void
     */
    public function setIDValue(string $value)
    {
        $this->IDValue = $value;
    }

    /**
     * Get IDValue
     *
     * @return string
     */
    public function getIDValue()
    {
        return $this->IDValue;
    }

    /**
     * Determine if idenfitier is ISBN10
     *
     * @return boolean
     */
    public function isISBN10()
    {
        return $this->ProductIDType->getCode() == self::ISBN10_TYPE;
    }

    /**
     * Determine if idenfitier is ISBN13
     *
     * @return boolean
     */
    public function isISBN13()
    {
        return $this->ProductIDType->getCode() == self::ISBN13_TYPE;
    }

    /**
     * @return string
     */
    public function getIDName(): string
    {
        return $this->IDName;
    }

    /**
     * @param string $IDName
     * @return ProductIdentifier
     */
    public function setIDName(string $IDName): ProductIdentifier
    {
        $this->IDName = $IDName;
        return $this;
    }
}