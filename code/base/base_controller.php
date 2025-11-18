<?php

namespace hahaha;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

class base_ontroller
{
    // 建構子
    public function __construct()
    {
    }
    //

    public function hahaha($view, $file_name)
    {
        // render.com不能寫入
        // 存成檔案
        // $dir = dirname($file_name);

        // if (!is_dir($dir)) {
        //     mkdir($dir, 0777, true);
        // }

        // File::put($file_name, $view);
    }
}
