<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Balisong\Brand\Domain\Interface\BalisongBrandInterface;
use Src\Balisong\Brand\Infrastructure\Repository\BalisongBrandRepository;

class AppServiceProvider extends ServiceProvider
{
    public array $bindings = [
        BalisongBrandInterface::class => BalisongBrandRepository::class,
    ];
    
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
