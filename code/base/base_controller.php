<?php

namespace hahaha;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

class base_ontroller
{
    // 建構子
    public function __construct()
    {
    }
    //

    public function hahaha($view, $file_name)
    {
        // 存成檔案
        $dir = dirname($file_name);
		
		// 1. 若資料夾不存在，自動建立（0777 最大權限）
		if (!File::exists($dir)) {
			File::makeDirectory($dir, 0777, true);
		}

		// 2. 若資料夾不可寫→強制調整權限（不安全但強制成功）
		if (!is_writable($dir)) {
			@chmod($dir, 0777);
		}

		// 3. 若既有檔案不可寫→強制允許
		if (File::exists($path) && !is_writable($path)) {
			@chmod($path, 0666);
		}

        File::put($file_name, $view);
    }
}
