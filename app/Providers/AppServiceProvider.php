<?php
declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider
 * @package App\Providers
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->bootDBLogger();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerIdeHelper();
    }

    /**
     * Log database queries and bindings to the standard log
     * Only when in debug mode and not running unit tests
     */
    protected function bootDBLogger(): void
    {
        if ($this->app['config']['app']['debug'] && !$this->app->runningUnitTests()) {
            $this->app['db.connection']->listen(function ($query) {
                $this->app['log']->info($query->sql, ['bindings' => $query->bindings]);
            });
        }
    }

    /**
     * Register the IDE Helper if this is not production
     */
    protected function registerIdeHelper(): void
    {
        if ($this->app->isLocal()) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
