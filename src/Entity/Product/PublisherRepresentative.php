<?php

namespace Adimeo\Onix\Entity\Product;

use Adimeo\Onix\Entity\CodeList\CodeList69;

class PublisherRepresentative
{
    /**
     * @var CodeList69
     */
    protected $AgentRole;

    /**
     * @var string
     */
    protected $AgentName;

    /**
     * @var AgentIdentifier
     */
    protected $AgentIdentifier;

    /**
     * @return CodeList69
     */
    public function getAgentRole(): CodeList69
    {
        return $this->AgentRole;
    }

    /**
     * @param CodeList69 $AgentRole
     * @return PublisherRepresentative
     */
    public function setAgentRole(CodeList69 $AgentRole): PublisherRepresentative
    {
        $this->AgentRole = $AgentRole;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgentName(): string
    {
        return $this->AgentName;
    }

    /**
     * @param string $AgentName
     * @return PublisherRepresentative
     */
    public function setAgentName(string $AgentName): PublisherRepresentative
    {
        $this->AgentName = $AgentName;
        return $this;
    }

    /**
     * @return AgentIdentifier
     */
    public function getAgentIdentifier(): AgentIdentifier
    {
        return $this->AgentIdentifier;
    }

    /**
     * @param AgentIdentifier $AgentIdentifier
     * @return PublisherRepresentative
     */
    public function setAgentIdentifier(AgentIdentifier $AgentIdentifier): PublisherRepresentative
    {
        $this->AgentIdentifier = $AgentIdentifier;
        return $this;
    }
}
