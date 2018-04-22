<?php

namespace Anselmelly\Darajaconnect;

use Illuminate\Support\ServiceProvider;

class DarajaConnectProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $this->publishes([
            __DIR__ . '/config/daraja-connect.php' => config_path('daraja.php')
        ]);
    }

}
