<?php

namespace Adimeo\Onix\Entity\Product;

use Adimeo\Onix\Entity\CodeList\CodeList148;

class Collection
{

    /**
     * CollectionType
     *
     * @var CodeList
     */
    protected $CollectionType;

    /**
     * TitleDetail
     *
     * @var array TitleDetail[]
     */
    protected $TitleDetail;

    /**
     * Set CollectionType
     *
     * @param string $CollectionType
     * @return void
     */
    public function setCollectionType(CodeList148 $CollectionType)
    {
        $this->CollectionType = $CollectionType;
    }

    /**
     * Set TitleDetail
     *
     * @param array $TitleDetail
     * @return void
     */
    public function setTitleDetail(array $TitleDetail)
    {
        $this->TitleDetail = $TitleDetail;
    }

    /**
     * Get CollectionType
     *
     * @return CodeList
     */
    public function getCollectionType()
    {
        return $this->CollectionType;
    }

    /**
     * Get TitleDetail
     *
     * @return array
     */
    public function getTitleDetail()
    {
        return $this->TitleDetail;
    }

    public function addTitleDetail(TitleDetail $titleDetail)
    {
        $this->TitleDetail[] = $titleDetail;
    }
}