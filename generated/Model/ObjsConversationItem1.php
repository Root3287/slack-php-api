<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsConversationItem1
{
    /**
     * @var string
     */
    protected $acceptedUser;
    /**
     * @var string[]
     */
    protected $connectedTeamIds;
    /**
     * @var string
     */
    protected $conversationHostId;
    /**
     * @var int
     */
    protected $created;
    /**
     * @var string
     */
    protected $creator;
    /**
     * @var ObjsConversationItem1DisplayCounts
     */
    protected $displayCounts;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string[]
     */
    protected $internalTeamIds;
    /**
     * @var bool
     */
    protected $isArchived;
    /**
     * @var bool
     */
    protected $isChannel;
    /**
     * @var bool
     */
    protected $isExtShared;
    /**
     * @var bool
     */
    protected $isGeneral;
    /**
     * @var bool
     */
    protected $isGroup;
    /**
     * @var bool
     */
    protected $isIm;
    /**
     * @var bool
     */
    protected $isMember;
    /**
     * @var int
     */
    protected $isMoved;
    /**
     * @var bool
     */
    protected $isMpim;
    /**
     * @var bool
     */
    protected $isOpen;
    /**
     * @var bool
     */
    protected $isOrgShared;
    /**
     * @var bool
     */
    protected $isPendingExtShared;
    /**
     * @var bool
     */
    protected $isPrivate;
    /**
     * @var bool
     */
    protected $isReadOnly;
    /**
     * @var bool
     */
    protected $isShared;
    /**
     * @var bool
     */
    protected $isStarred;
    /**
     * @var string
     */
    protected $lastRead;
    /**
     * @var mixed
     */
    protected $latest;
    /**
     * @var string[]
     */
    protected $members;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $nameNormalized;
    /**
     * @var int
     */
    protected $numMembers;
    /**
     * @var mixed
     */
    protected $parentConversation;
    /**
     * @var string[]
     */
    protected $pendingConnectedTeamIds;
    /**
     * @var string[]
     */
    protected $pendingShared;
    /**
     * @var int
     */
    protected $pinCount;
    /**
     * @var string[]
     */
    protected $previousNames;
    /**
     * @var float
     */
    protected $priority;
    /**
     * @var ObjsConversationItem1Purpose
     */
    protected $purpose;
    /**
     * @var string[]
     */
    protected $sharedTeamIds;
    /**
     * @var ObjsConversationItem1SharesItem[]
     */
    protected $shares;
    /**
     * @var int
     */
    protected $timezoneCount;
    /**
     * @var ObjsConversationItem1Topic
     */
    protected $topic;
    /**
     * @var int
     */
    protected $unlinked;
    /**
     * @var int
     */
    protected $unreadCount;
    /**
     * @var int
     */
    protected $unreadCountDisplay;
    /**
     * @var string
     */
    protected $user;
    /**
     * @var int
     */
    protected $version;

    public function getAcceptedUser(): ?string
    {
        return $this->acceptedUser;
    }

    public function setAcceptedUser(?string $acceptedUser): self
    {
        $this->acceptedUser = $acceptedUser;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getConnectedTeamIds(): ?array
    {
        return $this->connectedTeamIds;
    }

    /**
     * @param string[]|null $connectedTeamIds
     */
    public function setConnectedTeamIds(?array $connectedTeamIds): self
    {
        $this->connectedTeamIds = $connectedTeamIds;

        return $this;
    }

    public function getConversationHostId(): ?string
    {
        return $this->conversationHostId;
    }

    public function setConversationHostId(?string $conversationHostId): self
    {
        $this->conversationHostId = $conversationHostId;

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

    public function getCreator(): ?string
    {
        return $this->creator;
    }

    public function setCreator(?string $creator): self
    {
        $this->creator = $creator;

        return $this;
    }

    public function getDisplayCounts(): ?ObjsConversationItem1DisplayCounts
    {
        return $this->displayCounts;
    }

    public function setDisplayCounts(?ObjsConversationItem1DisplayCounts $displayCounts): self
    {
        $this->displayCounts = $displayCounts;

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

    /**
     * @return string[]|null
     */
    public function getInternalTeamIds(): ?array
    {
        return $this->internalTeamIds;
    }

    /**
     * @param string[]|null $internalTeamIds
     */
    public function setInternalTeamIds(?array $internalTeamIds): self
    {
        $this->internalTeamIds = $internalTeamIds;

        return $this;
    }

    public function getIsArchived(): ?bool
    {
        return $this->isArchived;
    }

    public function setIsArchived(?bool $isArchived): self
    {
        $this->isArchived = $isArchived;

        return $this;
    }

    public function getIsChannel(): ?bool
    {
        return $this->isChannel;
    }

    public function setIsChannel(?bool $isChannel): self
    {
        $this->isChannel = $isChannel;

        return $this;
    }

    public function getIsExtShared(): ?bool
    {
        return $this->isExtShared;
    }

    public function setIsExtShared(?bool $isExtShared): self
    {
        $this->isExtShared = $isExtShared;

        return $this;
    }

    public function getIsGeneral(): ?bool
    {
        return $this->isGeneral;
    }

    public function setIsGeneral(?bool $isGeneral): self
    {
        $this->isGeneral = $isGeneral;

        return $this;
    }

    public function getIsGroup(): ?bool
    {
        return $this->isGroup;
    }

    public function setIsGroup(?bool $isGroup): self
    {
        $this->isGroup = $isGroup;

        return $this;
    }

    public function getIsIm(): ?bool
    {
        return $this->isIm;
    }

    public function setIsIm(?bool $isIm): self
    {
        $this->isIm = $isIm;

        return $this;
    }

    public function getIsMember(): ?bool
    {
        return $this->isMember;
    }

    public function setIsMember(?bool $isMember): self
    {
        $this->isMember = $isMember;

        return $this;
    }

    public function getIsMoved(): ?int
    {
        return $this->isMoved;
    }

    public function setIsMoved(?int $isMoved): self
    {
        $this->isMoved = $isMoved;

        return $this;
    }

    public function getIsMpim(): ?bool
    {
        return $this->isMpim;
    }

    public function setIsMpim(?bool $isMpim): self
    {
        $this->isMpim = $isMpim;

        return $this;
    }

    public function getIsOpen(): ?bool
    {
        return $this->isOpen;
    }

    public function setIsOpen(?bool $isOpen): self
    {
        $this->isOpen = $isOpen;

        return $this;
    }

    public function getIsOrgShared(): ?bool
    {
        return $this->isOrgShared;
    }

    public function setIsOrgShared(?bool $isOrgShared): self
    {
        $this->isOrgShared = $isOrgShared;

        return $this;
    }

    public function getIsPendingExtShared(): ?bool
    {
        return $this->isPendingExtShared;
    }

    public function setIsPendingExtShared(?bool $isPendingExtShared): self
    {
        $this->isPendingExtShared = $isPendingExtShared;

        return $this;
    }

    public function getIsPrivate(): ?bool
    {
        return $this->isPrivate;
    }

    public function setIsPrivate(?bool $isPrivate): self
    {
        $this->isPrivate = $isPrivate;

        return $this;
    }

    public function getIsReadOnly(): ?bool
    {
        return $this->isReadOnly;
    }

    public function setIsReadOnly(?bool $isReadOnly): self
    {
        $this->isReadOnly = $isReadOnly;

        return $this;
    }

    public function getIsShared(): ?bool
    {
        return $this->isShared;
    }

    public function setIsShared(?bool $isShared): self
    {
        $this->isShared = $isShared;

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

    public function getLastRead(): ?string
    {
        return $this->lastRead;
    }

    public function setLastRead(?string $lastRead): self
    {
        $this->lastRead = $lastRead;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLatest()
    {
        return $this->latest;
    }

    /**
     * @param mixed $latest
     */
    public function setLatest($latest): self
    {
        $this->latest = $latest;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getMembers(): ?array
    {
        return $this->members;
    }

    /**
     * @param string[]|null $members
     */
    public function setMembers(?array $members): self
    {
        $this->members = $members;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNameNormalized(): ?string
    {
        return $this->nameNormalized;
    }

    public function setNameNormalized(?string $nameNormalized): self
    {
        $this->nameNormalized = $nameNormalized;

        return $this;
    }

    public function getNumMembers(): ?int
    {
        return $this->numMembers;
    }

    public function setNumMembers(?int $numMembers): self
    {
        $this->numMembers = $numMembers;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getParentConversation()
    {
        return $this->parentConversation;
    }

    /**
     * @param mixed $parentConversation
     */
    public function setParentConversation($parentConversation): self
    {
        $this->parentConversation = $parentConversation;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPendingConnectedTeamIds(): ?array
    {
        return $this->pendingConnectedTeamIds;
    }

    /**
     * @param string[]|null $pendingConnectedTeamIds
     */
    public function setPendingConnectedTeamIds(?array $pendingConnectedTeamIds): self
    {
        $this->pendingConnectedTeamIds = $pendingConnectedTeamIds;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPendingShared(): ?array
    {
        return $this->pendingShared;
    }

    /**
     * @param string[]|null $pendingShared
     */
    public function setPendingShared(?array $pendingShared): self
    {
        $this->pendingShared = $pendingShared;

        return $this;
    }

    public function getPinCount(): ?int
    {
        return $this->pinCount;
    }

    public function setPinCount(?int $pinCount): self
    {
        $this->pinCount = $pinCount;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPreviousNames(): ?array
    {
        return $this->previousNames;
    }

    /**
     * @param string[]|null $previousNames
     */
    public function setPreviousNames(?array $previousNames): self
    {
        $this->previousNames = $previousNames;

        return $this;
    }

    public function getPriority(): ?float
    {
        return $this->priority;
    }

    public function setPriority(?float $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getPurpose(): ?ObjsConversationItem1Purpose
    {
        return $this->purpose;
    }

    public function setPurpose(?ObjsConversationItem1Purpose $purpose): self
    {
        $this->purpose = $purpose;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getSharedTeamIds(): ?array
    {
        return $this->sharedTeamIds;
    }

    /**
     * @param string[]|null $sharedTeamIds
     */
    public function setSharedTeamIds(?array $sharedTeamIds): self
    {
        $this->sharedTeamIds = $sharedTeamIds;

        return $this;
    }

    /**
     * @return ObjsConversationItem1SharesItem[]|null
     */
    public function getShares(): ?array
    {
        return $this->shares;
    }

    /**
     * @param ObjsConversationItem1SharesItem[]|null $shares
     */
    public function setShares(?array $shares): self
    {
        $this->shares = $shares;

        return $this;
    }

    public function getTimezoneCount(): ?int
    {
        return $this->timezoneCount;
    }

    public function setTimezoneCount(?int $timezoneCount): self
    {
        $this->timezoneCount = $timezoneCount;

        return $this;
    }

    public function getTopic(): ?ObjsConversationItem1Topic
    {
        return $this->topic;
    }

    public function setTopic(?ObjsConversationItem1Topic $topic): self
    {
        $this->topic = $topic;

        return $this;
    }

    public function getUnlinked(): ?int
    {
        return $this->unlinked;
    }

    public function setUnlinked(?int $unlinked): self
    {
        $this->unlinked = $unlinked;

        return $this;
    }

    public function getUnreadCount(): ?int
    {
        return $this->unreadCount;
    }

    public function setUnreadCount(?int $unreadCount): self
    {
        $this->unreadCount = $unreadCount;

        return $this;
    }

    public function getUnreadCountDisplay(): ?int
    {
        return $this->unreadCountDisplay;
    }

    public function setUnreadCountDisplay(?int $unreadCountDisplay): self
    {
        $this->unreadCountDisplay = $unreadCountDisplay;

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

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(?int $version): self
    {
        $this->version = $version;

        return $this;
    }
}
