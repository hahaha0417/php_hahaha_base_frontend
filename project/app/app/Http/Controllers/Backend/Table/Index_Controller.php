<?php

namespace App\Http\Controllers\Backend\Table;

class Index_Controller extends \hahaha\base_ontroller
{
    public function Base()
    {
        $parameter = \hahaha\parameter::Instance();

        $parameter->page = new \StdClass;
        $parameter->page->title = "hahaha官網 - 後台 - Table - Base";

        $parameter->is_static = true;
        $file_name = public_path("../../../public/app/[後端]_Table.html"); // 存到 public
        $view = view('backend.table.base', [
            'parameter' => $parameter,
        ])->render(); 

        $this->hahaha($view, $file_name);

        $parameter->is_static = false;
        $file_name = public_path("../../../public/app/[後端]_Table.html"); // 存到 public
        $view = view('backend.table.base', [
            'parameter' => $parameter,
        ])->render(); 

        return $view;
    }

    public function Edit($id)
    {
        $parameter = \hahaha\parameter::Instance();

        $parameter->page = new \StdClass;
        $parameter->page->title = "hahaha官網 - 後台 - Table - Base - 編輯";

        $parameter->is_static = true;
        $file_name = public_path("../../../public/app/[後端]_Table_編輯.html"); // 存到 public
        $view = view('backend.table.edit', [
            'parameter' => $parameter,
        ])->render(); 

        $this->hahaha($view, $file_name);

        $parameter->is_static = false;
        $file_name = public_path("../../../public/app/[後端]_Table_編輯.html"); // 存到 public
        $view = view('backend.table.edit', [
            'parameter' => $parameter,
        ])->render(); 

        return $view;
    }

    // ----------------------------------------------------------- 
    // 
    // ----------------------------------------------------------- 
    public function Modal()
    {
        $parameter = \hahaha\parameter::Instance();

        $parameter->page = new \StdClass;
        $parameter->page->title = "hahaha官網 - 後台 - Table - Modal";

        $parameter->is_static = true;
        $file_name = public_path("../../../public/app/[後端]_Table_Modal.html"); // 存到 public
        $view = view('backend.table.modal', [
            'parameter' => $parameter,
        ])->render(); 

        $this->hahaha($view, $file_name);

        $parameter->is_static = false;
        $file_name = public_path("../../../public/app/[後端]_Table_Modal.html"); // 存到 public
        $view = view('backend.table.modal', [
            'parameter' => $parameter,
        ])->render(); 

        return $view;
    }
    // ----------------------------------------------------------- 
    // 
    // ----------------------------------------------------------- 





}
