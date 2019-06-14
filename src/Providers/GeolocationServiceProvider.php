<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Railken\Amethyst\Common\CommonServiceProvider;

class GeolocationServiceProvider extends CommonServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        parent::register();
    }

    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();
    }
}
