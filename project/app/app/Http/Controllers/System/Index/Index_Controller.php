<?php

namespace App\Http\Controllers\System\Index;

class Index_Controller extends \hahaha\base_ontroller
{
    public function Index()
    {
        $parameter = \hahaha\parameter::Instance();

        $parameter->page = new \StdClass;
        $parameter->page->title = "hahaha官網 - 系統";

        $file_name = public_path("../../../public/app/[續桶]_首頁.html"); // 存到 public
        $view = view('system.index.index', [
            'parameter' => $parameter,
        ]);

        $this->hahaha($view, $file_name);

        

        return $view;
    }

    
}
