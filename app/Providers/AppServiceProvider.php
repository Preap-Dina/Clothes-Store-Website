<?php

namespace App\Providers;

use App\Models\Logo;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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
        PaginationPaginator::useBootstrap();
        $logo = Logo::query()->orderBy('id', 'DESC')->first();
        View::share('logo', $logo);
    }
}
