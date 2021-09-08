<?php

namespace Adimeo\Onix\Entity\Product;

use Adimeo\Onix\Entity\CodeList\CodeList44;

class ImprintIdentifier
{

    /**
     * @var CodeList44
     */
    protected $ImprintIDType;

    /**
     * @var string
     */
    protected $IDValue;

    /**
     * @return CodeList44
     */
    public function getImprintIDType(): CodeList44
    {
        return $this->ImprintIDType;
    }

    /**
     * @param CodeList44 $ImprintIDType
     * @return ImprintIdentifier
     */
    public function setImprintIDType(CodeList44 $ImprintIDType): ImprintIdentifier
    {
        $this->ImprintIDType = $ImprintIDType;
        return $this;
    }

    /**
     * @return string
     */
    public function getIDValue(): string
    {
        return $this->IDValue;
    }

    /**
     * @param string $IDValue
     * @return ImprintIdentifier
     */
    public function setIDValue(string $IDValue): ImprintIdentifier
    {
        $this->IDValue = $IDValue;
        return $this;
    }
}
