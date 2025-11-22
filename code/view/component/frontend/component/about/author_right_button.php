<?php

namespace hahaha\view\frontend\component;

use hahaha\function_base as hahaha_function_base;

class author_right_button
{
    use \hahaha\instance;

    public $Initial_ = false;
	// 建構子
    public function __construct() {
 
    }
    // 計數動畫(到位置才跳)
    public function view()
    {
        $hahaha_function_base = hahaha_function_base::Instance();

        if(!$this->Initial_)
        {
?>

<?php 


            $this->Initial_ = true;
        }
?>
<!-- 右側按鈕 -->
<div id="floatBtnGroup" class="hexSideMenu">

    <a href="#about-glass" class="">
        <div class="hex-btn">
            資訊
        </div>
    </a>
    <a href="#about-link" class="">
        <div class="hex-btn">
            連結
        </div>
    </a>
    <a href="#about-education" class="">
        <div class="hex-btn">
            學歷
        </div>
    </a>
    <a href="#about-experience" class="">
        <div class="hex-btn">
            經歷
        </div>
    </a>
    <a href="#about-skill" class="">
        <div class="hex-btn">
            技能
        </div>
    </a>



</div>


<?php
    }
}
