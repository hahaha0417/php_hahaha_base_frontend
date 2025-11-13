<?php



namespace hahaha;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

class base_ontroller
{
	// 建構子
    public function __construct() {
 
    }
    //

    public function hahaha($view, $file_name) {
 
        // 2️⃣ 存成檔案
        
        File::put($file_name, $view);


    }
}
