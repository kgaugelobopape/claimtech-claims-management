<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $models = array("User", "Claim");

        foreach ($models as $index => $model) {
            $this->app->bind("App\Repositories\Interfaces\\{$model}RepositoryInterface", "App\Repositories\Eloquent\\{$model}Repository");
        }
    }
}
