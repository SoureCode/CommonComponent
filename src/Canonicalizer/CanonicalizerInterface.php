<?php

namespace SoureCode\Component\Common\Canonicalizer;

interface CanonicalizerInterface
{
    public function canonicalize(?string $string): ?string;
}
