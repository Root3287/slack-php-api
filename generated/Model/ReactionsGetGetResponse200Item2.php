<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ReactionsGetGetResponse200Item2
{
    /**
     * @var ObjsComment
     */
    protected $comment;
    /**
     * @var ObjsFile
     */
    protected $file;
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var string
     */
    protected $type;

    public function getComment(): ?ObjsComment
    {
        return $this->comment;
    }

    public function setComment(?ObjsComment $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getFile(): ?ObjsFile
    {
        return $this->file;
    }

    public function setFile(?ObjsFile $file): self
    {
        $this->file = $file;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
