<?php

namespace Adimeo\Onix\Entity\Product;

use Adimeo\Onix\Entity\CodeList\CodeList142;
use Adimeo\Onix\Entity\CodeList\CodeList174;
use Adimeo\Onix\Entity\CodeList\CodeList58;
use Adimeo\Onix\Entity\CodeList\CodeList61;
use Adimeo\Onix\Entity\CodeList\CodeList96;

class Price
{

    /**
     * PriceType
     *
     * @var CodeList
     */
    protected $PriceType;

    /**
     * PriceStatus
     *
     * @var CodeList
     */
    protected $PriceStatus;

    /**
     * PriceAmount
     *
     * @var float
     */
    protected $PriceAmount;

    /**
     * CurrencyCode
     *
     * @var CodeList
     */
    protected $CurrencyCode;

    /**
     * PrintedOnProduct
     *
     * @var CodeList
     */
    protected $PrintedOnProduct;

    /**
     * PositionOnProduct
     *
     * @var CodeList
     */
    protected $PositionOnProduct;

    /**
     * DiscountCoded
     *
     * @var DiscountCoded
     */
    protected $DiscountCoded;

    /**
     * Discount
     *
     * @var Discount
     */
    protected $Discount;

    /**
     * Tax
     *
     * @var array
     */
    protected $Tax;

    /**
     * Territory
     *
     * @var Territory
     */
    protected $Territory;

    /**
     * Set PriceType
     *
     * @param CodeList58 $PriceType
     * @return void
     */
    public function setPriceType(CodeList58 $PriceType)
    {
        $this->PriceType = $PriceType;
    }

    /**
     * Set PriceStatus
     *
     * @param CodeList61 $PriceStatus
     * @return void
     */
    public function setPriceStatus(CodeList61 $PriceStatus)
    {
        $this->PriceStatus = $PriceStatus;
    }

    /**
     * PriceAmount
     *
     * @param float $PriceAmount
     * @return void
     */
    public function setPriceAmount(string $PriceAmount)
    {
        $this->PriceAmount = (float) $PriceAmount;
    }

    /**
     * Set CurrencyCode
     *
     * @param CodeList96 $CurrencyCode
     * @return void
     */
    public function setCurrencyCode(CodeList96 $CurrencyCode)
    {
        $this->CurrencyCode = $CurrencyCode;
    }

    /**
     * Set PrintedOnProduct
     *
     * @param CodeList174 $PrintedOnProduct
     * @return void
     */
    public function setPrintedOnProduct(CodeList174 $PrintedOnProduct)
    {
        $this->PrintedOnProduct = $PrintedOnProduct;
    }

    /**
     * Set PositionOnProduct
     *
     * @param CodeList142 $PositionOnProduct
     * @return void
     */
    public function setPositionOnProduct(CodeList142 $PositionOnProduct)
    {
        $this->PositionOnProduct = $PositionOnProduct;
    }

    /**
     * Set DiscountCoded
     *
     * @param array $DiscountCoded
     * @return void
     */
    public function setDiscountCoded(array $DiscountCoded)
    {
        $this->DiscountCoded = $DiscountCoded;
    }

    /**
     * Set Discount
     *
     * @param Discount $Discount
     * @return void
     */
    public function setDiscount(Discount $Discount)
    {
        $this->Discount = $Discount;
    }

    /**
     * Set Tax
     *
     * @param array $Tax
     * @return void
     */
    public function setTax(array $Tax)
    {
        $this->Tax = $Tax;
    }

    /**
     * Set Territory
     *
     * @param Territory $Territory
     * @return void
     */
    public function setTerritory(Territory $Territory)
    {
        $this->Territory = $Territory;
    }

    /**
     * Get PriceType
     *
     * @return CodeList
     */
    public function getPriceType()
    {
        return $this->PriceType;
    }

    /**
     * Get PriceStatus
     *
     * @return CodeList
     */
    public function getPriceStatus()
    {
        return $this->PriceStatus;
    }
    
    /**
     * PriceAmount
     *
     * @return float
     */
    public function getPriceAmount()
    {
        return $this->PriceAmount;
    }

    /**
     * Get CurrencyCode
     *
     * @return CodeList
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * Get PrintedOnProduct
     *
     * @return CodeList
     */
    public function getPrintedOnProduct()
    {
        return $this->PrintedOnProduct;
    }

    /**
     * Get PositionOnProduct
     *
     * @return CodeList
     */
    public function getPositionOnProduct()
    {
        return $this->PositionOnProduct;
    }

    /**
     * Get DiscountCoded
     *
     * @return array
     */
    public function getDiscountCoded()
    {
        return $this->DiscountCoded;
    }

    /**
     * Get Tax
     *
     * @return array
     */
    public function getTax()
    {
        return $this->Tax;
    }

    /**
     * Get Territory
     *
     * @return Territory
     */
    public function getTerritory()
    {
        return $this->Territory;
    }

    /**
     * Get Discount
     *
     * @return Discount
     */
    public function getDiscount()
    {
        return $this->Discount;
    }

    public function addTax(Tax $tax)
    {
        $this->Tax[] = $tax;
    }

    public function addDiscountCoded(DiscountCoded $discountCoded)
    {
        $this->DiscountCoded[] = $discountCoded;
    }
}
