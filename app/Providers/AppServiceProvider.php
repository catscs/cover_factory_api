<?php

namespace App\Providers;

use CoverFactory\Manhole\Domain\ManholeRepository;
use CoverFactory\Manhole\Infrastructure\Eloquent\ManholeEloquentRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ManholeRepository::class, ManholeEloquentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
