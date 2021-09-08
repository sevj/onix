<?php

namespace Adimeo\Onix\Entity\Product;

use Adimeo\Onix\Entity\CodeList\CodeList16;
use Adimeo\Onix\Entity\CodeList\CodeList92;

class AgentIdentifier
{

    /**
     * AgentIDType
     *
     * @var CodeList
     */
    protected $AgentIDType;
    
    /**
     * IDValue
     *
     * @var string
     */
    protected $IDValue;

    /**
     * Set AgentIDType
     *
     * @param CodeList92 $AgentIDType
     * @return void
     */
    public function setAgentIDType(CodeList92 $AgentIDType)
    {
        $this->AgentIDType = $AgentIDType;
    }

    /**
     * Set IDValue
     *
     * @param string $IDValue
     * @return void
     */
    public function setIDValue(string $IDValue)
    {
        $this->IDValue = $IDValue;
    }

    /**
     * Get AgentIDType
     *
     * @return void
     */
    public function getAgentIDType()
    {
        return $this->AgentIDType;
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

}