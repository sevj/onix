<?php

namespace Adimeo\Onix\Entity\Product;

class Imprint
{

    /**
     * ImprintName
     *
     * @var string
     */
    protected $ImprintName;

    /**
     * @var array
     */
    protected $ImprintIdentifier;

    /**
     * Set ImprintName
     *
     * @param string $ImprintName
     * @return void
     */
    public function setImprintName(string $ImprintName)
    {
        $this->ImprintName = $ImprintName;
    }

    /**
     * Get ImprintName
     *
     * @return string
     */
    public function getImprintName()
    {
        return $this->ImprintName;
    }

    /**
     * @return array
     */
    public function getImprintIdentifier(): array
    {
        return $this->ImprintIdentifier;
    }

    /**
     * @param array $ImprintIdentifier
     * @return Imprint
     */
    public function setImprintIdentifier(array $ImprintIdentifier): Imprint
    {
        $this->ImprintIdentifier = $ImprintIdentifier;
        return $this;
    }

    public function addImprintIdentifier(ImprintIdentifier $imprintIdentifier)
    {
        $this->ImprintIdentifier[] = $imprintIdentifier;
    }
}