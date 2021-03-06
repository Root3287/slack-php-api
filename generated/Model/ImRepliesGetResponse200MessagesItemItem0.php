<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ImRepliesGetResponse200MessagesItemItem0
{
    /**
     * @var string
     */
    protected $lastRead;
    /**
     * @var string
     */
    protected $latestReply;
    /**
     * @var ImRepliesGetResponse200MessagesItemItem0RepliesItem[]
     */
    protected $replies;
    /**
     * @var int
     */
    protected $replyCount;
    /**
     * @var string[]
     */
    protected $replyUsers;
    /**
     * @var int
     */
    protected $replyUsersCount;
    /**
     * @var string
     */
    protected $sourceTeam;
    /**
     * @var bool
     */
    protected $subscribed;
    /**
     * @var string
     */
    protected $team;
    /**
     * @var string
     */
    protected $text;
    /**
     * @var string
     */
    protected $threadTs;
    /**
     * @var string
     */
    protected $ts;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var int
     */
    protected $unreadCount;
    /**
     * @var string
     */
    protected $user;
    /**
     * @var ObjsUserProfileShort
     */
    protected $userProfile;
    /**
     * @var string
     */
    protected $userTeam;

    public function getLastRead(): ?string
    {
        return $this->lastRead;
    }

    public function setLastRead(?string $lastRead): self
    {
        $this->lastRead = $lastRead;

        return $this;
    }

    public function getLatestReply(): ?string
    {
        return $this->latestReply;
    }

    public function setLatestReply(?string $latestReply): self
    {
        $this->latestReply = $latestReply;

        return $this;
    }

    /**
     * @return ImRepliesGetResponse200MessagesItemItem0RepliesItem[]|null
     */
    public function getReplies(): ?array
    {
        return $this->replies;
    }

    /**
     * @param ImRepliesGetResponse200MessagesItemItem0RepliesItem[]|null $replies
     */
    public function setReplies(?array $replies): self
    {
        $this->replies = $replies;

        return $this;
    }

    public function getReplyCount(): ?int
    {
        return $this->replyCount;
    }

    public function setReplyCount(?int $replyCount): self
    {
        $this->replyCount = $replyCount;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getReplyUsers(): ?array
    {
        return $this->replyUsers;
    }

    /**
     * @param string[]|null $replyUsers
     */
    public function setReplyUsers(?array $replyUsers): self
    {
        $this->replyUsers = $replyUsers;

        return $this;
    }

    public function getReplyUsersCount(): ?int
    {
        return $this->replyUsersCount;
    }

    public function setReplyUsersCount(?int $replyUsersCount): self
    {
        $this->replyUsersCount = $replyUsersCount;

        return $this;
    }

    public function getSourceTeam(): ?string
    {
        return $this->sourceTeam;
    }

    public function setSourceTeam(?string $sourceTeam): self
    {
        $this->sourceTeam = $sourceTeam;

        return $this;
    }

    public function getSubscribed(): ?bool
    {
        return $this->subscribed;
    }

    public function setSubscribed(?bool $subscribed): self
    {
        $this->subscribed = $subscribed;

        return $this;
    }

    public function getTeam(): ?string
    {
        return $this->team;
    }

    public function setTeam(?string $team): self
    {
        $this->team = $team;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getThreadTs(): ?string
    {
        return $this->threadTs;
    }

    public function setThreadTs(?string $threadTs): self
    {
        $this->threadTs = $threadTs;

        return $this;
    }

    public function getTs(): ?string
    {
        return $this->ts;
    }

    public function setTs(?string $ts): self
    {
        $this->ts = $ts;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getUserProfile(): ?ObjsUserProfileShort
    {
        return $this->userProfile;
    }

    public function setUserProfile(?ObjsUserProfileShort $userProfile): self
    {
        $this->userProfile = $userProfile;

        return $this;
    }

    public function getUserTeam(): ?string
    {
        return $this->userTeam;
    }

    public function setUserTeam(?string $userTeam): self
    {
        $this->userTeam = $userTeam;

        return $this;
    }
}
