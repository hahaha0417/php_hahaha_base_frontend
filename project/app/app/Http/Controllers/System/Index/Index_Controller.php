<?php

namespace App\Http\Controllers\System\Index;

class Index_Controller extends \hahaha\base_ontroller
{
    public function Index()
    {
        $parameter = \hahaha\parameter::Instance();

        $parameter->page = new \StdClass;
        $parameter->page->title = "hahaha官網 - 系統";

        $parameter->is_static = true;
        $file_name = public_path("../../../public/app/[系統]_首頁.html"); // 存到 public
        $view = view('system.index.index', [
            'parameter' => $parameter,
        ])->render();

        $this->hahaha($view, $file_name);

        $parameter->is_static = false;
        $file_name = public_path("../../../public/app/[系統]_首頁.html"); // 存到 public
        $view = view('system.index.index', [
            'parameter' => $parameter,
        ])->render();

        return $view;
    }

    
}
