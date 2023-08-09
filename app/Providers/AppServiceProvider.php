<?php

namespace App\Providers;

use App\Models\Students;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\View as FacadesView;
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
        //
        FacadesView::share('title', 'Student Admin');
        FacadesView::composer('students.index', function($view){
            $view->with('students', Students::all());
        });
    }
}
