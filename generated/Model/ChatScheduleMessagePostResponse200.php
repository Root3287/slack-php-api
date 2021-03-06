<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ChatScheduleMessagePostResponse200
{
    /**
     * @var string
     */
    protected $channel;
    /**
     * @var ChatScheduleMessagePostResponse200Message
     */
    protected $message;
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var int
     */
    protected $postAt;
    /**
     * @var string
     */
    protected $scheduledMessageId;

    public function getChannel(): ?string
    {
        return $this->channel;
    }

    public function setChannel(?string $channel): self
    {
        $this->channel = $channel;

        return $this;
    }

    public function getMessage(): ?ChatScheduleMessagePostResponse200Message
    {
        return $this->message;
    }

    public function setMessage(?ChatScheduleMessagePostResponse200Message $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    public function getPostAt(): ?int
    {
        return $this->postAt;
    }

    public function setPostAt(?int $postAt): self
    {
        $this->postAt = $postAt;

        return $this;
    }

    public function getScheduledMessageId(): ?string
    {
        return $this->scheduledMessageId;
    }

    public function setScheduledMessageId(?string $scheduledMessageId): self
    {
        $this->scheduledMessageId = $scheduledMessageId;

        return $this;
    }
}
