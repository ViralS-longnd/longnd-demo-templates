<?php
/**
 * Created by PhpStorm.
 * User: tuanlv
 * Date: 1/21/20
 * Time: 9:40 AM
 */
namespace infyomlabs\LongNdDemoTemplates;

use Illuminate\Support\ServiceProvider;

class LongNdDemoTemplatesServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'adminlte-templates');

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/viralsoft-templates'),
        ], 'public');
    }
    public function register()
    {

    }
}
