<?php

namespace App\Http\Controllers\Backend\Permission;

class Index_Controller extends \hahaha\base_ontroller
{
    public function Index()
    {
        $parameter = \hahaha\parameter::instance();

        $parameter->page = new \StdClass;
        $parameter->page->title = "hahaha官網 - 後台 - 權限";

        $file_name = public_path("../../../public/app/[後端]_權限頁.html"); // 存到 public
        $view = view('backend.permission.index', [
            'parameter' => $parameter,
        ]);

        $this->hahaha($view, $file_name);

        

        return $view;
    }

    
    // ----------------------------------------------------------- 
    // 
    // ----------------------------------------------------------- 





}
