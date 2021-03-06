<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class AuthRevokeGetResponse200
{
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var bool
     */
    protected $revoked;

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    public function getRevoked(): ?bool
    {
        return $this->revoked;
    }

    public function setRevoked(?bool $revoked): self
    {
        $this->revoked = $revoked;

        return $this;
    }
}
