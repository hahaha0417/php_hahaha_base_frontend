<?php

namespace App\Http\Controllers\Backend\Backup\Base;

use hahaha\package\backup\base\define\key as define_key;
use hahaha\package\backup\base\define\statement as define_statement;
use hahaha\package\backup\base\define\api as define_api;
use hahaha\package\backup\base\env\env as define_env;

class Index_Controller extends \hahaha\base_ontroller
{
    public function Index()
    {
        $parameter = \hahaha\parameter::Instance();

        $parameter->page = new \StdClass;
        $parameter->page->title = "hahaha官網 - 後台 - 備份";

        $parameter->is_static = true;
        $file_name = public_path("../../../public/app/[後端]_備份頁.html"); // 存到 public
        $view = view('backend.backup.base.index', [
            'parameter' => $parameter,
        ])->render(); 

        $this->hahaha($view, $file_name);

        $parameter->is_static = false;
        $file_name = public_path("../../../public/app/[後端]_備份頁.html"); // 存到 public
        $view = view('backend.backup.base.index', [
            'parameter' => $parameter,
        ])->render(); 

        return $view;
    }

    
    // ----------------------------------------------------------- 
    // 
    // ----------------------------------------------------------- 





}
