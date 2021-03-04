<?php

namespace SoureCode\Component\Common\Canonicalizer;

use function Symfony\Component\String\u;

class Canonicalizer implements CanonicalizerInterface
{
    public function canonicalize(?string $string): ?string
    {
        if (null === $string) {
            return null;
        }

        return u($string)->lower()->toString();
    }
}
