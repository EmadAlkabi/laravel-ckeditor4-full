<?php

namespace EmadAlkabi\Ckeditor;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot()
    {
        $this->publishes(
            [
                __DIR__ . '/ckeditor.js' => public_path('vendor/emadalkabi/laravel-ckeditor4-full/ckeditor.js'),
                __DIR__ . '/config.js' => public_path('vendor/emadalkabi/laravel-ckeditor4-full/config.js'),
                __DIR__ . '/styles.js' => public_path('vendor/emadalkabi/laravel-ckeditor4-full/styles.js'),
                __DIR__ . '/contents.css' => public_path('vendor/emadalkabi/laravel-ckeditor4-full/contents.css'),
                __DIR__ . '/adapters' => public_path('vendor/emadalkabi/laravel-ckeditor4-full/adapters'),
                __DIR__ . '/lang' => public_path('vendor/emadalkabi/laravel-ckeditor4-full/lang'),
                __DIR__ . '/skins' => public_path('vendor/emadalkabi/laravel-ckeditor4-full/skins'),
                __DIR__ . '/plugins' => public_path('vendor/emadalkabi/laravel-ckeditor4-full/plugins'),
            ],
            'ckeditor'
        ); 
    }

    public function register()
    {

    }
}
