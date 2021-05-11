<?php

namespace SoureCode\Component\Common\Model;

use DateTimeInterface;

interface CreatedAtInterface
{
    public function getCreatedAt(): ?DateTimeInterface;

    public function setCreatedAt(?DateTimeInterface $createdAt): void;
}
