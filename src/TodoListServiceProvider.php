<?php

namespace Koliachev\TodoList;

use Illuminate\Support\ServiceProvider;

class TodoListServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Koliachev\TodoList\TaskController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'todolist');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/koliachev/todolist'),
        ]);

        // $this->publishes([ __DIR__.'/config' => config_path()]);

        $this->mergeConfigFrom(
            __DIR__.'/config/bar.php', 'services.mailgun'
        );
    }
}
