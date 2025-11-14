<?php

namespace App\Http\Controllers\Backend\Table;

class Index_Controller extends \hahaha\base_ontroller
{
    public function Base()
    {
        $parameter = \hahaha\parameter::instance();

        $parameter->page = new \StdClass;
        $parameter->page->title = "hahaha官網 - 後台 - Table - Base";

        $file_name = public_path("../../../public/app/[後端]_Table.html"); // 存到 public
        $view = view('backend.table.base', [
            'parameter' => $parameter,
        ]);

        $this->hahaha($view, $file_name);

        

        return $view;
    }

    public function Edit($id)
    {
        $parameter = \hahaha\parameter::instance();

        $parameter->page = new \StdClass;
        $parameter->page->title = "hahaha官網 - 後台 - Table - Base - 編輯";

        $file_name = public_path("../../../public/app/[後端]_Table_編輯.html"); // 存到 public
        $view = view('backend.table.edit', [
            'parameter' => $parameter,
        ]);

        $this->hahaha($view, $file_name);

        

        return $view;
    }

    // ----------------------------------------------------------- 
    // 
    // ----------------------------------------------------------- 
    public function Modal()
    {
        $parameter = \hahaha\parameter::instance();

        $parameter->page = new \StdClass;
        $parameter->page->title = "hahaha官網 - 後台 - Table - Modal";

        $file_name = public_path("../../../public/app/[後端]_Table_Modal.html"); // 存到 public
        $view = view('backend.table.modal', [
            'parameter' => $parameter,
        ]);

        $this->hahaha($view, $file_name);

        

        return $view;
    }
    // ----------------------------------------------------------- 
    // 
    // ----------------------------------------------------------- 





}
