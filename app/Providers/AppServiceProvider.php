<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        Validator::extend('our_episodes_less_than_total', function ($attribute, $value, $parameters, $validator) {
            $totalEpisodes = $validator->getData()[$parameters[0]]; // Obtem o valor do campo 'episodes'
            return $value <= $totalEpisodes;
        });

        // Builder::macro('whereLike', function (string $attribute, string $searchTerm) {
        //     return $this->where($attribute, 'LIKE', "%{$searchTerm}%");
        // });
    }
}
