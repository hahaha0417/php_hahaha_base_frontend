<?php

namespace hahaha\view\component\system;

class footer
{
    use \hahaha\instance;

	// 建構子
    public function __construct() {
 
    }
    //
    public function view()
    {
?>
<footer class="bg-dark text-light py-3 fixed-bottom hahaha-footer">
    <div class="container d-flex justify-content-between align-items-center">
        <span>© 2025 hahaha Company</span>

        <div>
            <a href="#">隱私權政策</a>
            <span class="mx-2">|</span>
            <a href="#">使用條款</a>

            <!-- <a href="#" class="text-light me-2">
                <i class="fa-brands fa-facebook fs-5"></i>
            </a>
            <a href="#" class="text-light me-2">
                <i class="fa-brands fa-instagram fs-5"></i>
            </a>
            <a href="#" class="text-light">
                <i class="fa-brands fa-youtube fs-5"></i>
            </a> -->
        </div>
    </div>
</footer>


<?php

    }
}
