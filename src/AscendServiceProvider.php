<?php

namespace AscendSDK;

use Illuminate\Support\ServiceProvider;

/**
 * Ascend SDK Service Provider for Laravel
 */
class AscendServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        // Merge config
        $this->mergeConfigFrom(__DIR__ . '/../config/ascend.php', 'ascend');

        // Register AscendClient as singleton
        $this->app->singleton(AscendClient::class, function ($app) {
            $config = $app['config']['ascend'];

            return new AscendClient(
                $config['api_key'],
                $config['environment'],
                $config['timeout']
            );
        });

        // Register alias
        $this->app->alias(AscendClient::class, 'ascend');
    }

    /**
     * Bootstrap the service provider.
     */
    public function boot(): void
    {
        // Publish config
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/ascend.php' => config_path('ascend.php'),
            ], 'config');
        }
    }
}
