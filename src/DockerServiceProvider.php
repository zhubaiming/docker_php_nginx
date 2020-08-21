<?php

namespace Toolman\Docker;

use Illuminate\Support\ServiceProvider;
use Toolman\Admin\Console;

class DockerServiceProvider extends ServiceProvider
{
    protected $commands = [
//        Console\DockerCommand::class,
//        Console\InstallCommand::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
//        $this->commands($this->commands);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../docker/docker-compose.yml' => base_path('/'),
            __DIR__ . '/../docker/packages' => base_path('/docker/'),
        ]);
    }
}