@extends('backend.layout')


@section('content')
    <div class="layout mb-5">
        <?php \hahaha\view\component\backend\sidebar::Instance()->view(); ?>

        <div class="content">

            <div class="row mb-2">
                <h3 class="mb-4">編輯資料</h3>
                <!-- 🔹 上排 Select 1 -->
                <div class="col-md-6">
                    <label class="form-label">分類</label>
                    <select id="category" class="form-control bg-dark text-light border-secondary">
                        <option value="">請選擇</option>
                        <option value="A">分類 A</option>
                        <option value="B">分類 B</option>
                        <option value="C">分類 C</option>
                    </select>
                </div>

                <!-- 🔹 上排 Select 2 -->
                <div class="col-md-6">
                    <label class="form-label">狀態</label>
                    <select id="status" class="form-control bg-dark text-light border-secondary">
                        <option value="">請選擇</option>
                        <option value="1">啟用</option>
                        <option value="0">停用</option>
                    </select>
                </div>
            </div>

            <!-- 🔥 左右兩顆按鈕 -->
            <div class="d-flex justify-content-between mb-3">
                <button id="btnAdd" class="btn btn-success">
                    <i class="fa-solid fa-plus me-1"></i> 新增
                </button>

                <button id="btnExport" class="btn btn-warning">
                    <i class="fa-solid fa-file-export me-1"></i> 匯出
                </button>
            </div>
            <div class="table-wrapper">
                <table id="myTable" class="table table-dark table-striped dt-responsive nowrap" style="width:100%">

                </table>
                <div id="myPager" class="d-flex justify-content-end mt-3"></div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1">
        <div class="modal-dialog modal-lg"> <!-- ⭐ 加大版 -->
            <div class="modal-content bg-dark text-light">

            <div class="modal-header">
                <h5 class="modal-title">編輯資料</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <input type="hidden" id="id">

                <div class="row g-3">

                <!-- 🔹 第 1 欄 -->
                <div class="col-md-6">
                    <label class="form-label">姓名</label>
                    <input type="text" id="name" class="form-control">
                </div>

                <!-- 🔹 第 2 欄 -->
                <div class="col-md-6">
                    <label class="form-label">職位</label>
                    <input type="text" id="position" class="form-control">
                </div>

                <!-- 🔹 第 3 欄 -->
                <div class="col-md-6">
                    <label class="form-label">Office</label>
                    <input type="text" id="office" class="form-control">
                </div>

                <!-- 🔹 第 4 欄 -->
                <div class="col-md-6">
                    <label class="form-label">年齡</label>
                    <input type="number" id="age" class="form-control">
                </div>

                <!-- 🔹 第 5 欄 -->
                <div class="col-md-6">
                    <label class="form-label">開始日期</label>
                    <input type="date" id="start_date" class="form-control">
                </div>

                <!-- 🔹 第 6 欄 -->
                <div class="col-md-6">
                    <label class="form-label">薪水</label>
                    <input type="text" id="salary" class="form-control">
                </div>

                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                <button type="button" id="btnSave" class="btn btn-primary">儲存</button>
            </div>

            </div>
        </div>
    </div>



    <script>
        function renderPager(json) {

            let length = table.page.len();   // 每頁筆數（如 10）
            let start  = table.page.info().start; // 本頁第一筆 index
            let total  = json.recordsFiltered;    // ⭐ 搜尋後總筆數（後端提供）

            let currentPage = Math.floor(start / length) + 1;
            let totalPages  = Math.ceil(total / length);

            buildPager(currentPage, totalPages);
        }

        function buildPager(current, total) {
            let max = 5; // 一次顯示幾個頁碼
            let html = `<ul class="pagination pagination-sm">`;

            // 上一頁
            html += `
                <li class="page-item ${current === 1 ? "disabled" : ""}">
                    <a class="page-link" data-page="${current - 1}">&laquo;</a>
                </li>
            `;

            // 計算頁碼的起始與結束
            let start = Math.max(1, current - Math.floor(max / 2));
            let end = Math.min(total, start + max - 1);

            if (end - start < max - 1) {
                start = Math.max(1, end - max + 1);
            }

            // 左 ...
            if (start > 1) {
                html += `
                    <li class="page-item">
                        <a class="page-link" data-page="1">1</a>
                    </li>
                    <li class="page-item disabled"><a class="page-link">...</a></li>
                `;
            }

            // 中間頁碼
            for (let i = start; i <= end; i++) {
                html += `
                    <li class="page-item ${current === i ? "active" : ""}">
                        <a class="page-link" data-page="${i}">${i}</a>
                    </li>
                `;
            }

            // 右 ...
            if (end < total) {
                html += `
                    <li class="page-item disabled"><a class="page-link">...</a></li>
                    <li class="page-item">
                        <a class="page-link" data-page="${total}">${total}</a>
                    </li>
                `;
            }

            // 下一頁
            html += `
                <li class="page-item ${current === total ? "disabled" : ""}">
                    <a class="page-link" data-page="${current + 1}">&raquo;</a>
                </li>
            `;

            html += `</ul>`;
            $("#myPager").html(html);
        }


        let table = $('#myTable').DataTable({
            processing: true,
            serverSide: true,

            responsive: {
                details: {
                    type: 'column',
                    target: 0,
                    renderer: function (api, rowIdx, columns) {
                        let hidden = columns.filter(col => col.hidden);

                        if (!hidden.length) return false;

                        return `
                            <table class="table table-sm table-dark mb-0">
                                ${hidden.map(col => `
                                    <tr>
                                        <th style="width:140px">${col.title}</th>
                                        <td>${col.data}</td>
                                    </tr>
                                `).join('')}
                            </table>
                        `;
                    }
                }
            },

            ajax: {
                url: '/asset/json/table/base.json',
                type: 'GET',
                cache: false,
                dataSrc: function (json) {
                    renderPager(json);
                    return json.data;
                }
            },

            columns: [
                {
                    title: "",
                    className: "dtr-control text-center", // ⭐ 修正：官方 control 使用 dtr-control
                    orderable: false,
                    data: null,
                    defaultContent: ""
                },
                { title: "Name", data: "name" },
                { title: "Position", data: "position" },
                { title: "Office", data: "office" },
                { title: "Age", data: "age" },
                { title: "Start date", data: "start_date" },
                { title: "Salary", data: "salary" },

                {
                    title: "操作",
                    data: null,
                    orderable: false,
                    searchable: false,
                    className: "text-center",
                    render: function (data, type, row) {
                        return `
                            <button class="btn btn-sm btn-primary btn-edit me-1" data-id="${row.id}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="btn btn-sm btn-danger btn-delete" data-id="${row.id}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        `;
                    }
                }
            ],

            columnDefs: [
                // ⭐ 左邊控制按鈕 / 右邊操作欄永遠顯示
                { responsivePriority: 1, targets: 0 },
                { responsivePriority: 1, targets: -1 },

                // ⭐ Name 永遠顯示（所有裝置）
                { className: "all", targets: 1 },

                // 📟 平板以上才顯示 Position & Office
                { className: "min-tablet-p", targets: [2, 3] },

                // 🖥 桌機以上才顯示 Age / Start date / Salary
                { className: "min-desktop", targets: [4, 5, 6] },
            ],

            pageLength: 10,
            language: {
                url: "/asset/json/datatables/zh-Hant.json"
            },
        });


        $(document).on("click", "#myPager .page-link", function () {
            let page = $(this).data("page") - 1; // DataTables 的 page 是 0-based
            table.page(page).draw("page");
        });

        $('#myTable tbody').on('click', 'td.dt-control', function () {
            let tr = $(this).closest('tr');
            let row = table.row(tr);

            if (row.child.isShown()) {
                row.child.hide();
                tr.removeClass('shown');
            } else {
                row.child.show();
                tr.addClass('shown');
            }
        });

        const modal = new bootstrap.Modal(document.getElementById('myModal'));
        $(`#btnAdd`).click(function() {
            modal.show();

        })
    </script>
    <style>
        .dataTables_paginate {
            display: none;
        }
    </style>
@endsection