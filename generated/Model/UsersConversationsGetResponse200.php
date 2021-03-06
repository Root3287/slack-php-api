<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class UsersConversationsGetResponse200 extends \ArrayObject
{
    /**
     * @var mixed[]
     */
    protected $channels;
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var UsersConversationsGetResponse200ResponseMetadata
     */
    protected $responseMetadata;

    /**
     * @return mixed[]|null
     */
    public function getChannels(): ?array
    {
        return $this->channels;
    }

    /**
     * @param mixed[]|null $channels
     */
    public function setChannels(?array $channels): self
    {
        $this->channels = $channels;

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

    public function getResponseMetadata(): ?UsersConversationsGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }

    public function setResponseMetadata(?UsersConversationsGetResponse200ResponseMetadata $responseMetadata): self
    {
        $this->responseMetadata = $responseMetadata;

        return $this;
    }
}
