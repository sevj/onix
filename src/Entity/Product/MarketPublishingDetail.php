<?php

namespace Adimeo\Onix\Entity\Product;

use Adimeo\Onix\Entity\CodeList\CodeList68;

class MarketPublishingDetail
{

    /**
     * MarketPublishingStatus
     *
     * @var CodeList
     */
    protected $MarketPublishingStatus;

    /**
     * MarketDate
     *
     * @var MarketDate
     */
    protected $MarketDate;

    /**
     * @var array
     */
    protected $publisherRepresentative;

    /**
     * Set MarketPublishingStatus
     *
     * @param CodeList68 $MarketPublishingStatus
     * @return void
     */
    public function setMarketPublishingStatus(CodeList68 $MarketPublishingStatus)
    {
        $this->MarketPublishingStatus = $MarketPublishingStatus;
    }

    /**
     * Set MarketDate
     *
     * @param MarketDate $MarketDate
     * @return void
     */
    public function setMarketDate(MarketDate $MarketDate)
    {
        $this->MarketDate = $MarketDate;
    }

    /**
     * Get MarketPublishingStatus
     *
     * @return CodeList
     */
    public function getMarketPublishingStatus()
    {
        return $this->MarketPublishingStatus;
    }

    /**
     * Get MarketDate
     *
     * @return MarketDate
     */
    public function getMarketDate()
    {
        return $this->MarketDate;
    }

    /**
     * @return array
     */
    public function getPublisherRepresentative(): array
    {
        return $this->publisherRepresentative;
    }

    /**
     * @param array $publisherRepresentative
     * @return MarketPublishingDetail
     */
    public function setPublisherRepresentative(array $publisherRepresentative): MarketPublishingDetail
    {
        $this->publisherRepresentative = $publisherRepresentative;
        return $this;
    }

    public function addPublisherRepresentative(PublisherRepresentative $publisherRepresentative)
    {
        $this->publisherRepresentative[] = $publisherRepresentative;
    }
}