@php
use hahaha\define\api as define_api;
use hahaha\env\hahaha\other as env_hahaha_other;
@endphp

@extends('system.layout')


@section('content')
<div class="layout mb-5">
    <?php \hahaha\view\component\system\sidebar::Instance()->view(); ?>
        
    <div class="content">
        <h3 class="mb-4">其他</h3>

        <form class="p-4 bg-secondary rounded-3 form_main">

            <input type="hidden" id="id">
            <h3 class="mb-3">備註：首頁跳動數字</h3>
            <div class="row mb-3">
                <div class="col-4">
                    <label class="form-label">代號</label>
                    <input type="text" name="count_code_name" class="form-control" value="{{ env_hahaha_other::COUNT_CODE_NAME }}" required>
                </div>
                <div class="col-4">
                    <label class="form-label">工作</label>
                    <input type="text" name=count_work class="form-control" value="{{ env_hahaha_other::COUNT_WORK }}" required>
                </div>
                <div class="col-4">
                    <label class="form-label">附加</label>
                    <input type="text" name="count_additional" class="form-control" value="{{ env_hahaha_other::COUNT_ADDITIONAL }}" required>
                </div>
            </div>
            

            <div class="d-flex justify-content-between mt-4">
                <a href="/system" class=""></a>
                <button type="submit" class="btn btn-success button_update">更新</button>
            </div>

        </form>
    </div>
    
</div>

<script>
$(".form_main").submit(function() {
    const form_data = new FormData(this);

    // 轉成物件
    const obj = {};
    form_data.forEach((value, key) => obj[key] = value);

    $.ajax({
        type: "POST", //傳送方式
        url: "{{ define_api::SYSTEM_ENV_HAHAHA_OTHER_UPDATE }}", //傳送目的地
        processData: false,      // FormData 必須 false
        contentType: false,      // FormData 必須 false
        dataType: "json", //資料格式
        headers: {
            "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content"),
        },
        data: form_data,
        success: function(data) {
            if (data["{{ define_api::RESULT }}"] == "{{ define_api::SUCCESS }}")
            { //如果後端回傳 json 資料有 nickname
                Swal.fire({
                    title: "成功",
                    text: data["{{ define_api::MESSAGE }}"],
                    icon: "{{ define_api::SUCCESS }}",
                }).then(() => {
                    // console.log("使用者按下 OK");
                });
                
            }
            else
            { //否則讀取後端回傳 json 資料 errorMsg 顯示錯誤訊息
                Swal.fire({
                    title: "錯誤",
                    text: data["{{ define_api::MESSAGE }}"],
                    icon: "{{ define_api::FAILURE }}",
                }).then(() => {
                    // console.log("使用者按下 OK");
                });
            }
        },
        error: function(jqXHR) {
            Swal.fire({
                title: "錯誤",
                text: "出錯!",
                icon: "{{ define_api::FAILURE }}",
            }).then(() => {
                // console.log("使用者按下 OK");
            });
        }
    });

    return false;
});
</script>
@endsection