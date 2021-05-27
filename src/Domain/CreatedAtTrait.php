<?php

namespace SoureCode\Component\Common\Domain;

use DateTimeInterface;

trait CreatedAtTrait
{
    protected ?DateTimeInterface $createdAt = null;

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
