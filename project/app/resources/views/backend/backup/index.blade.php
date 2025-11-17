@extends('backend.layout')


@section('content')
    <div class="layout mb-5">
        <?php \hahaha\view\component\backend\sidebar::instance()->view(); ?>

        <div class="content">

            <div class="row mb-2">
                <h3 class="mb-4">
                    <span>
                        編輯資料
                    </span>
                    <button id="btnRefresh" class="btn btn-success col-1">
                        <i class="fa-solid fa-rotate-right me-1"></i> 刷新
                    </button>
                </h3>
                
                <!-- 🔹 上排 Select 1 -->
                <div class="col-6">
                    <div class="mb-3">
                        <div class="row justify-content-between mb-1">
                            <div class="col-4">
                                <label class="form-label ">名稱</label>
                            </div>
                            <div class="col-8">
                                <div class="row g-2">
                                    <div class="col-3 ms-auto">
                                        <button id="btnBackup" class="btn btn-success w-100">
                                            <i class="fa-solid fa-cloud-arrow-up me-1"></i> 備份
                                        </button>
                                    </div>
                                    <div class="col-3">
                                        <button id="btnRestore" class="btn btn-success w-100">
                                            <i class="fa-solid fa-cloud-arrow-down me-1"></i> 還原
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <select id="category" class="form-control bg-dark text-light border-secondary" size="10" multiple>
                        <option value="A" data-state="">hahaha</option>
                        <option value="B">hehehe</option>
                        <option value="C">hohoho</option>
                    </select>
                    <div class="row ms-1 mt-3">
                        <button id="btnAdd" class="btn btn-success col-2 me-1">
                            <i class="fa-solid fa-circle-plus me-1"></i> 新增
                        </button>
                        <button id="btnRename" class="btn btn-success col-2 me-1">
                            <i class="fa-solid fa-pen me-1"></i> 更名
                        </button>
                        <button id="btnDelete" class="btn btn-success col-2 me-1">
                            <i class="fa-solid fa-trash me-1"></i> 刪除
                        </button>
                        
                    </div>
                </div>

                <!-- 🔹 上排 Select 2 -->
                <div class="col-6">
                    <label class="form-label mb-3">執行</label>
                    <textarea class="form-control bg-dark text-light border-secondary mb-3" rows="11" readonly>
名稱：hahaha
狀態：閒置
日期：2025/11/17 07:54:00

訊息：匯出database

錯誤：無
                    </textarea>

                    
                </div>

                <div class="col-6 mt-3">
                    <label class="form-label mb-3">資訊</label>
                    <textarea class="form-control bg-dark text-light border-secondary" rows="11" readonly>
名稱：hahaha
狀態：無
日期：2025/11/17 07:54:00

訊息：成功

錯誤：無
                    </textarea>
                    

                </div>

                <div class="col-6 mt-3">
                    <label class="form-label mb-3">排程</label>
                    <textarea class="form-control bg-dark text-light border-secondary" rows="11" readonly>
hahaha 備份
hehehe 還原
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