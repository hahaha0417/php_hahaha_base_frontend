<?php

namespace hahaha\function\env\hahaha;

use hahaha\config\application as config_application;

/*

use hahaha\function_base as function_base;
use hahaha\function_base as hahaha_function_base;

*/


class function_other
{
	use \hahaha\instance;
	
    public function Generate($file, $data, $namespace)
    {
        $content = [];
        
        
        $content[] = "<?php";
            $content[] = "";
            $content[] = "namespace {$namespace};";
            $content[] = "";

            $content[] = "";
            $content[] = "/*";
            $content[] = "";
            $content[] = "use {$namespace}\\other as env_other;";
            $content[] = "use {$namespace}\\other as env_hahaha_other;";
                
            $content[] = "";
            
            $content[] = "*/";
            $content[] = "";
            
            
            $content[] = "class other";
            $content[] = "{";
            $content[] = "\t// --------------------------------------------------- ";
            $content[] = "\t// 主要";
            $content[] = "\t// --------------------------------------------------- ";
            
            $content[] = "\t// --------------------------------------------------- ";
            $content[] = "\t// 其他";
            $content[] = "\t// --------------------------------------------------- ";
            $content[] = "\t// 代號";
            $content[] = "\tconst COUNT_CODE_NAME = \"{$data["COUNT_CODE_NAME"]}\";";
            $content[] = "\t// 工作";
            $content[] = "\tconst COUNT_WORK = \"{$data["COUNT_WORK"]}\";";
            $content[] = "\t// 附加";
            $content[] = "\tconst COUNT_ADDITIONAL = \"{$data["COUNT_ADDITIONAL"]}\";";
            $content[] = "\t// --------------------------------------------------- ";
            $content[] = "\t// ";
            $content[] = "\t// --------------------------------------------------- ";
            $content[] = "";
            $content[] = "}";
            $content[] = "";
            $content[] = "";

            // 其他附加
            $content[] = "";
            $content[] = "/*";
            $content[] = "";
            $content[] = "// 其他附加---------------------------------------------------------- ";
            $content[] = "";
            $content[] = "*/";
            $content[] = "";

            // // ------------------------------------------------------- 
            // // 有需要才附加寫成function
            // // -------------------------------------------------------
            // $this->addition($content, $key_table, $item_table);
            // // -------------------------------------------------------

            $file_table = $file; 
            
            file_put_contents($file, implode("\r\n", $content));
            opcache_invalidate($file, true);



            unset($content);
        
    }
}