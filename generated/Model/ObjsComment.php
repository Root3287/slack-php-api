<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsComment
{
    /**
     * @var string
     */
    protected $comment;
    /**
     * @var int
     */
    protected $created;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var bool
     */
    protected $isIntro;
    /**
     * @var bool
     */
    protected $isStarred;
    /**
     * @var int
     */
    protected $numStars;
    /**
     * @var DefsPinnedInfoItem[]
     */
    protected $pinnedInfo;
    /**
     * @var string[]
     */
    protected $pinnedTo;
    /**
     * @var ObjsReaction[]
     */
    protected $reactions;
    /**
     * @var int
     */
    protected $timestamp;
    /**
     * @var string
     */
    protected $user;

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getCreated(): ?int
    {
        return $this->created;
    }

    public function setCreated(?int $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIsIntro(): ?bool
    {
        return $this->isIntro;
    }

    public function setIsIntro(?bool $isIntro): self
    {
        $this->isIntro = $isIntro;

        return $this;
    }

    public function getIsStarred(): ?bool
    {
        return $this->isStarred;
    }

    public function setIsStarred(?bool $isStarred): self
    {
        $this->isStarred = $isStarred;

        return $this;
    }

    public function getNumStars(): ?int
    {
        return $this->numStars;
    }

    public function setNumStars(?int $numStars): self
    {
        $this->numStars = $numStars;

        return $this;
    }

    /**
     * @return DefsPinnedInfoItem[]|null
     */
    public function getPinnedInfo(): ?\ArrayObject
    {
        return $this->pinnedInfo;
    }

    /**
     * @param DefsPinnedInfoItem[]|null $pinnedInfo
     */
    public function setPinnedInfo(?\ArrayObject $pinnedInfo): self
    {
        $this->pinnedInfo = $pinnedInfo;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPinnedTo(): ?array
    {
        return $this->pinnedTo;
    }

    /**
     * @param string[]|null $pinnedTo
     */
    public function setPinnedTo(?array $pinnedTo): self
    {
        $this->pinnedTo = $pinnedTo;

        return $this;
    }

    /**
     * @return ObjsReaction[]|null
     */
    public function getReactions(): ?array
    {
        return $this->reactions;
    }

    /**
     * @param ObjsReaction[]|null $reactions
     */
    public function setReactions(?array $reactions): self
    {
        $this->reactions = $reactions;

        return $this;
    }

    public function getTimestamp(): ?int
    {
        return $this->timestamp;
    }

    public function setTimestamp(?int $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }
}
