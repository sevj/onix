<?php

namespace Adimeo\Onix\Entity\Product;

use Adimeo\Onix\Entity\CodeList\CodeList166;
use Adimeo\Onix\Entity\Date;

class SupplyDate
{
    /**
     * @var CodeList166
     */
    protected $SupplyDateRole;

    /**
     * @var Date
     */
    protected $Date;

    /**
     * @return CodeList166
     */
    public function getSupplyDateRole(): CodeList166
    {
        return $this->SupplyDateRole;
    }

    /**
     * @param CodeList166 $SupplyDateRole
     * @return SupplyDate
     */
    public function setSupplyDateRole(CodeList166 $SupplyDateRole): SupplyDate
    {
        $this->SupplyDateRole = $SupplyDateRole;
        return $this;
    }

    /**
     * @return Date
     */
    public function getDate(): Date
    {
        return $this->Date;
    }

    /**
     * @param Date $Date
     * @return SupplyDate
     */
    public function setDate(Date $Date): SupplyDate
    {
        $this->Date = $Date;
        return $this;
    }
}
