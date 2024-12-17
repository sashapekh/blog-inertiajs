<?php

namespace App\Service;

use App\DTO\DefaultSeoParams;

class SeoService
{
    public function getDefaulSeoParams(
        string $h1Header
    ): DefaultSeoParams {

        return new DefaultSeoParams(
            appName: config('app.name'),
            h1Header: $h1Header,
        );
    }
}
