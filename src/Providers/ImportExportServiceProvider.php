<?php

namespace Tripteki\ImportExport\Providers;

use Illuminate\Support\ServiceProvider;

class ImportExportServiceProvider extends ServiceProvider
{
    /**
     * @var bool
     */
    public static $loadConfig = true;

    /**
     * @return bool
     */
    public static function shouldLoadConfig()
    {
        return static::$loadConfig;
    }

    /**
     * @return void
     */
    public static function ignoreConfig()
    {
        static::$loadConfig = false;
    }

    /**
     * @return void
     */
    public function boot()
    {
        $this->registerConfigs();
        $this->registerPublishers();
    }

    /**
     * @return void
     */
    protected function registerConfigs()
    {
        if (static::shouldLoadConfig()) {

            $this->app["config"]->set("excel", []);
            $this->app["config"]->set("dompdf", []);
            $this->mergeConfigFrom(__DIR__."/../../config/import-export.php", "excel");
            $this->mergeConfigFrom(__DIR__."/../../config/pdf.php", "dompdf");
        }
    }

    /**
     * @return void
     */
    protected function registerPublishers()
    {
        $this->publishes(
        [
            __DIR__."/../../config/import-export.php" => config_path("excel.php"),
            __DIR__."/../../config/pdf.php" => config_path("dompdf.php"),
        ],

        "tripteki-laravelphp-import-export");
    }
};
