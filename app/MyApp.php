<?php

namespace App;

use Illuminate\Foundation\Application;

class MyApp extends Application
{
    public function publicPath()
    {
//        dd($this->basePath.'/app/Modeuls');
        return $this->basePath.'/app/Modeuls';
    }
}
