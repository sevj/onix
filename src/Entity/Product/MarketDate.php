<?php

namespace Adimeo\Onix\Entity\Product;

use Adimeo\Onix\Entity\CodeList\CodeList163;
use Adimeo\Onix\Entity\Date;

class MarketDate
{

    /**
     * MarketDateRole
     *
     * @var CodeList
     */
    protected $MarketDateRole;

    /**
     * Date
     *
     * @var Date
     */
    protected $Date;

    /**
     * Set MarketDateRole
     *
     * @param CodeList163 $MarketDateRole
     * @return void
     */
    public function setMarketDateRole(CodeList163 $MarketDateRole)
    {
        $this->MarketDateRole = $MarketDateRole;
    }

    /**
     * Set Date
     *
     * @param Date $Date
     * @return void
     */
    public function setDate(Date $Date)
    {
        $this->Date = $Date;
    }

    /**
     * Get MarketDateRole
     *
     * @return CodeList
     */
    public function getMarketDateRole()
    {
        return $this->MarketDateRole;
    }

    /**
     * Get Date
     *
     * @return Date
     */
    public function getDate()
    {
        return $this->Date;
    }

}