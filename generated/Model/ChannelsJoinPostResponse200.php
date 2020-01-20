<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ChannelsJoinPostResponse200
{
    /**
     * @var bool
     */
    protected $alreadyInChannel;
    /**
     * @var ObjsChannel
     */
    protected $channel;
    /**
     * @var bool
     */
    protected $ok;

    public function getAlreadyInChannel(): ?bool
    {
        return $this->alreadyInChannel;
    }

    public function setAlreadyInChannel(?bool $alreadyInChannel): self
    {
        $this->alreadyInChannel = $alreadyInChannel;

        return $this;
    }

    public function getChannel(): ?ObjsChannel
    {
        return $this->channel;
    }

    public function setChannel(?ObjsChannel $channel): self
    {
        $this->channel = $channel;

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
}
