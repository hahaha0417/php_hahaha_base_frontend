<?php

namespace hahaha\view\frontend\component;

use hahaha\function_base as hahaha_function_base;

class author_info
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
<section id="about-glass" class="about_info my-5" style="
    background: url('image/hahaha/橫幅 Logo black.png') center/contain no-repeat;
">
    <div class="container d-flex justify-content-center" >

        <div class="glass-box p-5 mt-4">

            <!-- LOGO -->
            <div class="text-center mb-4">
                <img src="image/hahaha/hahaha.jpg" style="width:222px;height:auto;">
                <h2 class="mt-3 fw-bold text-white">陳傑琪(hahaha)</h2>
                <h5 class="text-white-50">hahaha</h5>

                <!-- <div class="mt-3">
                    <img src="images/contact-phone.svg" width="22" class="me-3">
                    <img src="images/contact-mail.svg" width="22">
                </div> -->
            </div>

            <!-- FORM -->
            <form class="text-white">
                <div class="mb-3 col-4">
                    <label class="form-label">公司名稱 <span class="text-danger"></span></label>
                    <input type="text" class="form-control glass-input" placeholder="輸入公司名稱" value="" readonly>
                </div>

                <div class="mb-3 col-4">
                    <label class="form-label">聯絡人 <span class="text-danger"></span></label>
                    <input type="text" class="form-control glass-input" placeholder="輸入聯絡人" value="hahaha" readonly>
                </div>

                <div class="mb-3 col-4">
                    <label class="form-label">電子信箱 <span class="text-danger"></span></label>
                    <input type="email" class="form-control glass-input" placeholder="輸入電子信箱" value="hahaha0417@hotmail.com" readonly>
                </div>

                <div class="mb-3 col-4">
                    <label class="form-label">手機 <span class="text-danger"></span></label>
                    <input type="phone" class="form-control glass-input" placeholder="輸入電話" value="0916353255" readonly>
                </div>

                <!-- Line -->
                <div class="mb-3 col-4 circle button_qr_code_line" >
                    <img src="/image/hahaha/line_陳傑琪.jpg" style="width:110px;height:auto;">
                </div>
            
            </form>

        </div>

    </div>
</section>



<!-- QR Modal -->
<div class="modal fade" id="modal_qr_code_line" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark border-secondary">
            <div class="modal-body text-center">
            <img id="qrModalImg" src="/image/hahaha/line_陳傑琪.jpg" alt="QR" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>

<script>
    var modal_qr_code_line = new bootstrap.Modal(document.getElementById('modal_qr_code_line'));
    $(`.button_qr_code_line`).click(function() {
        modal_qr_code_line.show();
    });
</script>


<?php
    }
}
