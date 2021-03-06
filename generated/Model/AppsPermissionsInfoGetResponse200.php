<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class AppsPermissionsInfoGetResponse200
{
    /**
     * @var AppsPermissionsInfoGetResponse200Info
     */
    protected $info;
    /**
     * @var bool
     */
    protected $ok;

    public function getInfo(): ?AppsPermissionsInfoGetResponse200Info
    {
        return $this->info;
    }

    public function setInfo(?AppsPermissionsInfoGetResponse200Info $info): self
    {
        $this->info = $info;

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
