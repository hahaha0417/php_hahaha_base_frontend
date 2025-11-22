<?php

namespace App\Http\Controllers\System\Env\Hahaha;

use hahaha\define\api as define_api;
use Illuminate\Http\Request;

class Other_Controller extends \hahaha\base_ontroller
{
    public function Update(Request $request)
    {
        $post = $request->post();

        $parameter = \hahaha\parameter::Instance();

        $data = [];

        $reflect = new \ReflectionClass(\hahaha\env\hahaha\other::class);
        $constants = $reflect->getConstants();

        $constants["COUNT_CODE_NAME"] = $post["count_code_name"];
        $constants["COUNT_WORK"] = $post["count_work"];
        $constants["COUNT_ADDITIONAL"] = $post["count_additional"];

        $file_name = ROOT . "/env/setting/hahaha/other.php";
        $file_name_temp = ROOT . "/temp/other_temp.php";
        $file_name_lock = ROOT . "/lock/lock.lock";

        $dir = dirname($file_name);

        if (!is_dir($dir)) 
        {
            mkdir($dir, 0777, true);
        }

        $dir = dirname($file_name_temp);

        if (!is_dir($dir)) 
        {
            mkdir($dir, 0777, true);
        }


        $dir = dirname($file_name_lock);

        if (!is_dir($dir)) 
        {
            mkdir($dir, 0777, true);
        }

        
        
        $lock = \hahahalib\Lock::Instance()->Initial_Lock($file_name_lock, 
            $retry_time = 500000
        );

        $lock->Lock();
        
        if(file_exists($file_name_temp))
        {
            unlink($file_name_temp);

        }

        $namespace = "hahaha\\env\\hahaha";
        \hahaha\function\env\hahaha\function_other::Instance()->Generate($file_name_temp, $constants, $namespace);
        if(file_exists($file_name))
        {
            unlink($file_name);

        }
        rename($file_name_temp, $file_name);

        opcache_invalidate($file_name, true);
        $lock->Un_Lock();

        return json_encode([
            define_api::RESULT => define_api::SUCCESS,
            define_api::DATA => $data,
            define_api::MESSAGE => "更新成功",
        ], JSON_PRETTY_PRINT |
            JSON_UNESCAPED_UNICODE |
            JSON_UNESCAPED_SLASHES
        );
    }

    
}
