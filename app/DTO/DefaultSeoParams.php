<?php

namespace App\DTO;

class DefaultSeoParams
{
    use Arrable;

    public function __construct(
        public readonly string $appName,
        public readonly string $h1Header,
    ) {}
}
