<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Export;
use App\Util\ExportExcel;
use App\Util\ExportPdf;

class ExportServiceProvider extends ServiceProvider
{
    public function register()
    {

        $this->app->bind(Export::class, function($app, $params){
            return new ImageLocalStorage();
        });
    }
}