<?php

namespace SoureCode\Component\Common\Model;

use DateTimeInterface;

interface UpdatedAtInterface
{
    public function getUpdatedAt(): ?DateTimeInterface;

    public function setUpdatedAt(?DateTimeInterface $updatedAt): void;
}
