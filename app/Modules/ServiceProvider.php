<?php
/**
 * Created by PhpStorm.
 * User: lauda
 * Date: 7/26/2018
 * Time: 8:59 AM
 */
namespace App\Modules;
use File;

class ServiceProvider extends \Illuminate\Support\ServiceProvider{
    public function boot(){
        $listModules = array_map('basename',File::directories(__DIR__));
        foreach ($listModules as $module){
            if(file_exists(__DIR__ .'/'. $module . '/route.php')){
                include __DIR__ .'/'. $module . '/route.php';
            }
            if(is_dir(__DIR__ . '/'. $module . '/Views')){
                $this->loadViewsFrom(__DIR__ . '/' . $module . '/Views/', $module);
            }
        }
    }
    public function register(){
    }
}



