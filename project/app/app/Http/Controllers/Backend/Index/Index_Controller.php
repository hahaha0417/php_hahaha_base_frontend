<?php

namespace App\Http\Controllers\Backend\Index;

class Index_Controller extends \hahaha\base_ontroller
{
    public function Index()
    {
        $parameter = \hahaha\parameter::instance();

        $parameter->page = new \StdClass;
        $parameter->page->title = "hahaha官網 - 後台";

        $file_name = public_path("../../../public/app/[後端]_首頁.html"); // 存到 public
        $view = view('backend.index.index', [
            'parameter' => $parameter,
        ]);

        $this->hahaha($view, $file_name);

        

        return $view;
    }
}
