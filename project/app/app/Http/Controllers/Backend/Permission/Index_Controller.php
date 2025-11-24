<?php

namespace App\Http\Controllers\Backend\Permission;

class Index_Controller extends \hahaha\base_ontroller
{
    public function Index()
    {
        $parameter = \hahaha\parameter::Instance();

        $parameter->page = new \StdClass;
        $parameter->page->title = "hahaha官網 - 後台 - 權限";

        $parameter->is_static = true;
        $file_name = public_path("../../../public/app/[後端]_權限頁.html"); // 存到 public
        $view = view('backend.permission.index', [
            'parameter' => $parameter,
        ])->render(); 

        $this->hahaha($view, $file_name);

        $parameter->is_static = false;
        $file_name = public_path("../../../public/app/[後端]_權限頁.html"); // 存到 public
        $view = view('backend.permission.index', [
            'parameter' => $parameter,
        ])->render(); 

        return $view;
    }

    
    // ----------------------------------------------------------- 
    // 
    // ----------------------------------------------------------- 





}
