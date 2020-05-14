<?php

namespace App\Providers;

use Illuminate\Database\Schema\Builder;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\{Schema, Blade, View};

use App\Http\ViewComposers\ExpensesFieldsComposer;
use App\Http\ViewComposers\ForeignExchangeComposer;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Builder::defaultStringLength(191);

        View::composer(['Expenses.index', 'Expenses.create'], ExpensesFieldsComposer::class);
        View::composer(['foreign_exchange.index'], ExpensesFieldsComposer::class);

    }
    

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
