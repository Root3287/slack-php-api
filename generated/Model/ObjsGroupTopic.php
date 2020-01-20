<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsGroupTopic
{
    /**
     * @var string
     */
    protected $creator;
    /**
     * @var int
     */
    protected $lastSet;
    /**
     * @var string
     */
    protected $value;

    public function getCreator(): ?string
    {
        return $this->creator;
    }

    public function setCreator(?string $creator): self
    {
        $this->creator = $creator;

        return $this;
    }

    public function getLastSet(): ?int
    {
        return $this->lastSet;
    }

    public function setLastSet(?int $lastSet): self
    {
        $this->lastSet = $lastSet;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
