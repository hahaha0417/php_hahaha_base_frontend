<?php

namespace App\Http\Controllers\Backend\Index;

class Index_Controller extends \hahaha\base_ontroller
{
    public function Index()
    {
        $parameter = \hahaha\parameter::Instance();

        $parameter->page = new \StdClass;
        $parameter->page->title = "hahaha官網 - 後台";

        $parameter->is_static = true;
        $file_name = public_path("../../../public/app/[後端]_首頁.html"); // 存到 public
        $view = view('backend.index.index', [
            'parameter' => $parameter,
        ])->render();

        $this->hahaha($view, $file_name);

        $parameter->is_static = false;
        $file_name = public_path("../../../public/app/[後端]_首頁.html"); // 存到 public
        $view = view('backend.index.index', [
            'parameter' => $parameter,
        ])->render();

        return $view;
    }

    public function Login()
    {
        $parameter = \hahaha\parameter::Instance();

        $parameter->page = new \StdClass;
        $parameter->page->title = "hahaha官網 - 後台";

        $parameter->is_static = true;
        $file_name = public_path("../../../public/app/[後端]_登入.html"); // 存到 public
        $view = view('backend.index.login', [
            'parameter' => $parameter,
        ])->render();

        $this->hahaha($view, $file_name);

        $parameter->is_static = false;
        $file_name = public_path("../../../public/app/[後端]_登入.html"); // 存到 public
        $view = view('backend.index.login', [
            'parameter' => $parameter,
        ])->render();

        return $view;
    }
}
