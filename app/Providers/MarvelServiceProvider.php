<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MarvelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $apiKey = 'c440ad5c5e3f7025c60eda1be55f77bb';
        $timestamp = time();
        $hash = md5($timestamp . '515d9258478646d6f7ece080e6203894a32f5a67' . $apiKey);

        // Bind the values to the service container
        $this->app->bind('marvel.api.credentials', function () use ($apiKey, $timestamp, $hash) {
            return [
                'apiKey' => $apiKey,
                'timestamp' => $timestamp,
                'hash' => $hash,
            ];
        });
    }
}