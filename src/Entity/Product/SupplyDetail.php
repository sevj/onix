<?php

namespace Adimeo\Onix\Entity\Product;

use Adimeo\Onix\Entity\CodeList\CodeList65;

class SupplyDetail
{

    /**
     * Supplier
     *
     * @var Supplier
     */
    protected $Supplier;

    /**
     * ReturnsConditions
     *
     * @var ReturnsConditions
     */
    protected $ReturnsConditions;

    /**
     * ProductAvailability
     *
     * @var CodeList
     */
    protected $ProductAvailability;

    /**
     * PackQuantity
     *
     * @var int
     */
    protected $PackQuantity;

    /**
     * Array of Price
     *
     * @var Price[]
     */
    protected $Price = [];

    /**
     * @var array
     */
    protected $supplyDate = [];

    /**
     * Set Supplier
     *
     * @param Supplier $Supplier
     * @return void
     */
    public function setSupplier(Supplier $Supplier)
    {
        $this->Supplier = $Supplier;
    }

    /**
     * Set ReturnsConditions
     *
     * @param ReturnsConditions $ReturnsConditions
     * @return void
     */
    public function setReturnsConditions(ReturnsConditions $ReturnsConditions)
    {
        $this->ReturnsConditions = $ReturnsConditions;
    }

    /**
     * Set ProductAvailability
     *
     * @param CodeList65 $ProductAvailability
     * @return void
     */
    public function setProductAvailability(CodeList65 $ProductAvailability)
    {
        $this->ProductAvailability = $ProductAvailability;
    }

    /**
     * Set PackQuantity
     *
     * @param integer $PackQuantity
     * @return void
     */
    public function setPackQuantity(string $PackQuantity)
    {
        $this->PackQuantity = $PackQuantity;
    }

    /**
     * Add a new Price
     *
     * @param Price $Price
     * @return void
     */
    public function setPrice($Price)
    {
        if (!is_array($Price)) return;

        foreach ($Price as $p) {
            if ($p instanceof Price) {
                $this->Price[] = $p;
            }
        }
    }

    /**
     * Add Price
     *
     * @param Price $Price
     * @return void
     */
    public function addPrice(Price $Price)
    {
        $this->Price[] = $Price;
    }

    /**
     * Get Supplier
     *
     * @return Supplier
     */
    public function getSupplier()
    {
        return $this->Supplier;
    }

    /**
     * Get ReturnsConditions
     *
     * @return ReturnsConditions
     */
    public function getReturnsConditions()
    {
        return $this->ReturnsConditions;
    }

    /**
     * Get ProductAvailability
     *
     * @return CodeList
     */
    public function getProductAvailability()
    {
        return $this->ProductAvailability;
    }

    /**
     * Get PackQuantity
     *
     * @return integer
     */
    public function getPackQuantity()
    {
        return $this->PackQuantity;
    }

    /**
     * Get Price
     *
     * @return Price[]
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Remove Price
     *
     * @param Price $Price
     * @return void
     */
    public function removePrice(Price $Price)
    {
    }

    /**
     * @return array
     */
    public function getSupplyDate(): array
    {
        return $this->supplyDate;
    }

    /**
     * @param array $supplyDate
     * @return SupplyDetail
     */
    public function setSupplyDate(array $supplyDate): SupplyDetail
    {
        $this->supplyDate = $supplyDate;
        return $this;
    }

    public function addSupplyDate(SupplyDate $supplyDate)
    {
        $this->supplyDate[] = $supplyDate;
    }
}
