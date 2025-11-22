@extends('backend.layout')

@php
use hahaha\package\backup\base\define\key as define_key;
use hahaha\package\backup\base\define\statement as define_statement;
use hahaha\package\backup\base\define\api as define_api;
use hahaha\package\backup\base\env\env as define_env;
@endphp

@section('content')
    <div class="layout mb-5">
        <?php \hahaha\view\component\backend\sidebar::Instance()->view(); ?>

        <div class="content">

            <div class="row mb-2">
                <h3 class="mb-4">
                    <span>
                        備份管理
                    </span>

                </h3>

                <!-- 🔹 上排 Select 1 -->
                <div class="col-6">
                    <div class="mb-3">
                        <div class="row justify-content-between mb-2">
                            <div class="col-4">
                                <label class="form-label ">名稱</label>
                            </div>
                            <div class="col-8">
                                <div class="row g-2">
                                    <div class="col-3 ms-auto">
                                        <button class="btn btn-success w-100 {{ define_key::BUTTON_BACKUP }}">
                                            <i class="fa-solid fa-cloud-arrow-up"></i> 備份
                                        </button>
                                    </div>
                                    <div class="col-3">
                                        <button class="btn btn-success w-100 {{ define_key::BUTTON_RESTORE }}">
                                            <i class="fa-solid fa-cloud-arrow-down"></i> 還原
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row justify-content-between mb-1 " style="margin-left:1px;margin-right:1px;">

                            <input type="text" name="{{ define_key::NAME }}" class="form-control {{ define_key::NAME }}">

                        </div>
                    </div>
                    <div class="open-select-container">

                        <div class="open-select-options" id="openList">
                            @php
                                // $name = $row[define_key::NAME];
                                // $state = $row[define_key::STATE];
                                $name = "hahaha";
                                $state = "無";

                                $color = "#c9c9ff";
                                if($state == "備份成功" || $state == "還原成功") $color = "#c9ffc9";
                                if($state == "備份失敗" || $state == "還原失敗") $color = "#ffc9c9";
                            @endphp

                            <div class="open-select-option row"
                                data-value="{{ $name }}"
                                data-name="{{ $name }}"
                                data-state="{{ $state }}"
                                data-color="{{ $color }}">

                                <div class="col-6">hahaha</div>
                                <div class="col-1">|</div>
                                <div class="col-5" style="color:{{ $color }};">hahaha</div>
                            </div>
                            <div class="open-select-option row"
                                data-value="{{ $name }}"
                                data-name="{{ $name }}"
                                data-state="{{ $state }}"
                                data-color="{{ $color }}">

                                <div class="col-6">hehehe</div>
                                <div class="col-1">|</div>
                                <div class="col-5" style="color:{{ $color }};">hehehe</div>
                            </div>
                            <div class="open-select-option row"
                                data-value="{{ $name }}"
                                data-name="{{ $name }}"
                                data-state="{{ $state }}"
                                data-color="{{ $color }}">

                                <div class="col-6">hohoho</div>
                                <div class="col-1">|</div>
                                <div class="col-5" style="color:{{ $color }};">hohoho</div>
                            </div>
                            <div class="open-select-option row"
                                data-value="{{ $name }}"
                                data-name="{{ $name }}"
                                data-state="{{ $state }}"
                                data-color="{{ $color }}">

                                <div class="col-6">hihihi</div>
                                <div class="col-1">|</div>
                                <div class="col-5" style="color:{{ $color }};">hihihi</div>
                            </div>
                            <div class="open-select-option row"
                                data-value="{{ $name }}"
                                data-name="{{ $name }}"
                                data-state="{{ $state }}"
                                data-color="{{ $color }}">

                                <div class="col-6">huhuhu</div>
                                <div class="col-1">|</div>
                                <div class="col-5" style="color:{{ $color }};">huhuhu</div>
                            </div>
                        </div>

                        <input type="hidden" id="openSelectValue">
                    </div>

                    <style>
                        .open-select-container {
                            width: 100%;
                            color: #fff;
                            font-size: 15px;
                        }

                        .open-select-title {
                            padding: 12px;
                            background: #222;
                            border: 1px solid #444;
                            border-radius: 6px;
                            margin-bottom: 6px;
                        }

                        .open-select-options {
                            background: #222;
                            border: 1px solid #444;
                            border-radius: 6px;

                            /* ⭐ 你的需求：固定高度 + 捲軸 */
                            max-height: 220px;
                            overflow-y: auto;
                            /* ⭐ 修正水平捲軸 BUG */
                            min-width: 0;

                            /* 美化捲軸 */
                            scrollbar-width: thin;
                            scrollbar-color: #666 #222;
                        }

                        .open-select-option {
                            padding: 10px 12px;
                            border-bottom: 1px solid #333;
                            cursor: pointer;
                        }

                        .open-select-option.row {
                            margin-left: 0 !important;
                            margin-right: 0 !important;
                        }

                        .open-select-option:hover {
                            background: #333;
                        }

                        /* ⭐選取高亮 */
                        .open-select-option.selected {
                            background: #555;
                            border-left: 4px solid #00ff95;
                        }

                        .open-select-option:last-child {
                            border-bottom: none;
                        }

                        .opt-line1 {
                            font-size: 15px;
                            font-weight: 500;
                        }

                        .opt-line2 {
                            margin-top: 2px;
                            font-size: 14px;
                        }



                    </style>
                    <script>
                        $(".open-select-option").on("click", function () {

                            $(".open-select-option").removeClass("selected");
                            $(this).addClass("selected");

                            let name = $(this).data("name");
                            let state = $(this).data("state");
                            let color = $(this).data("color");

                            $("#selectedText").html(
                                name + "<br><span style='color:"+color+"'>："+state+"</span>"
                            );

                            $("#openSelectValue").val($(this).data("value"));

                            $(".{{ define_key::NAME }}").val($(this).data("value"));
                        });
                    </script>
                    <!-- <select id="category" class="form-control bg-dark text-light border-secondary {{ define_key::LIST }}" style="overflow-y: auto;" size="10" multiple>
                        <option value="hahaha">hahaha</option>
                        <option value="hehehe">hehehe</option>
                        <option value="hohoho">hohoho</option>

                    </select> -->
                    <div class="row ms-1 mt-3">
                        <button class="btn btn-success col-2 me-1 {{ define_key::BUTTON_ADD }}">
                            <i class="fa-solid fa-circle-plus me-1"></i> 新增
                        </button>
                        <button class="btn btn-success col-2 me-1 {{ define_key::BUTTON_UPDATE }}">
                            <i class="fa-solid fa-pen me-1"></i> 更名
                        </button>
                        <button class="btn btn-success col-2 me-1 {{ define_key::BUTTON_DELETE }}">
                            <i class="fa-solid fa-trash me-1"></i> 刪除
                        </button>

                    </div>
                </div>

                <!-- 🔹 上排 Select 2 -->
                <div class="col-6 ">
                    <label class="form-label mb-3">狀態</label>
                    <textarea class="form-control bg-dark text-light border-secondary mb-3 {{ define_key::STATE }}" rows="13" readonly>
名稱：hahaha
狀態：無
日期：2025/11/17 07:54:00

訊息：成功

錯誤：無

</textarea>


                </div>

                <div class="col-6 mt-4" style="height:300px; display:flex; justify-content:center; align-items:center;">
                    <img src="/image/php.png"
                        style="max-width:100%; max-height:100%; object-fit:contain; object-position:center;">
                </div>






                <div class="col-6 mt-3">
                    <label class="form-label mb-3">排程</label>
                    <textarea class="form-control bg-dark text-light border-secondary" rows="11" readonly>
hahaha 備份
hehehe 還原
hohoho 備份

</textarea>


                </div>

            </div>

            <!-- 🔥 左右兩顆按鈕 -->
            <!-- <div class="d-flex justify-content-between mb-3">
                <div>
                    <button id="btnAdd" class="btn btn-success">
                        <i class="fa-solid fa-plus me-1"></i> 新增
                    </button>
                    <button id="btnAdd" class="btn btn-success">
                        <i class="fa-solid fa-plus me-1"></i> 更名
                    </button>
                    <button id="btnAdd" class="btn btn-success">
                        <i class="fa-solid fa-plus me-1"></i> 刪除
                    </button>
                    <button id="btnAdd" class="btn btn-success">
                        <i class="fa-solid fa-plus me-1"></i> 刷新
                    </button>
                </div>
                <div>
                    <button id="btnExport" class="btn btn-warning">
                        <i class="fa-solid fa-file-export me-1"></i> 匯出
                    </button>
                </div>
            </div> -->

        </div>
    </div>   
@endsection