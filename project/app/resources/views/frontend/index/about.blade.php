@extends('frontend.layout')


@section('content')
    <section id="about-glass" class="py-5" style="
        background: url('image/hahaha/橫幅 Logo black.png') center/contain no-repeat;
    ">
        <div class="container d-flex justify-content-center" >

            <div class="glass-box p-5 mt-4">

                <!-- LOGO -->
                <div class="text-center mb-4">
                    <img src="image/hahaha/hahaha.jpg" style="width:222px;height:auto;">
                    <h2 class="mt-3 fw-bold text-white">陳傑琪(hahaha)</h2>
                    <h5 class="text-white-50">hahaha有限公司</h5>

                    <div class="mt-3">
                        <img src="images/contact-phone.svg" width="22" class="me-3">
                        <img src="images/contact-mail.svg" width="22">
                    </div>
                </div>

                <!-- FORM -->
                <form class="text-white">
                    <div class="mb-3 col-4">
                        <label class="form-label">公司名稱 <span class="text-danger"></span></label>
                        <input type="text" class="form-control glass-input" placeholder="輸入公司名稱" value="hahaha" readonly>
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
                        <label class="form-label">電子信箱 <span class="text-danger"></span></label>
                        <input type="phone" class="form-control glass-input" placeholder="輸入電話" value="0916353255" readonly>
                    </div>
                </form>

            </div>

        </div>
    </section>


@endsection