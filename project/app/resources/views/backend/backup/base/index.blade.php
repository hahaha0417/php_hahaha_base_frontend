@extends('backend.layout')

@php
use hahaha\package\backup\base\define\key as define_key;
use hahaha\package\backup\base\define\statement as define_statement;
use hahaha\package\backup\base\define\api as define_api;
use hahaha\package\backup\base\env\env as define_env;
@endphp

@section('content')
    <div class="layout mb-5">
        <?php \hahaha\view\component\backend\sidebar::instance()->view(); ?>

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
                    <select id="category" class="form-control bg-dark text-light border-secondary {{ define_key::LIST }}" style="overflow-y: auto;" size="10" multiple>
                        <option value="hahaha">hahaha</option>
                        <option value="hehehe">hehehe</option>
                        <option value="hohoho">hohoho</option>

                    </select>
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