@extends('frontend.layout')


@section('content')


    <section id="contact_map" class="about_info my-5">
        <div class="container">

            <div class="row justify-content-center align-items-start">

                <!-- 左側：頭像 + 字 -->
                <div class="col-12 col-md-5 text-center mb-4">
                    <img src="/image/hahaha/hahaha.jpg"
                        style="width:222px;height:auto;border-radius:8px;">
                    <h2 class="mt-3 fw-bold text-white">陳傑琪 (hahaha)</h2>
                    <h5 class="text-white-50">hahaha</h5>
                    <div class="text-white-50 text-start mt-2">電話：0916353255</div>
                    <div class="text-white-50 text-start mt-2">信箱：hahaha0417@hotmail.com</div>
                    <div class="text-white-50 text-start mt-2">住址：桃園市中壢區光輝街86號203室</div>
                </div>

                <!-- 右側：地圖 -->
                <div class="col-6 col-md-6">
                    <div id="map" class="rounded border border-secondary"></div>
                </div>

            </div>

        </div>
    </section> 

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>

    
    <style>
        #map 
        {
            width: 100%;
            height: 500px; /* ← 你想要多高自己改 */
        }
    </style>


    <script>
        // Google底圖連接網址：

        // 1. Google道路圖
        // http://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z} 

        // 2. Google地形+道路圖
        // http://mt0.google.com/vt/lyrs=p&hl=en&x={x}&y={y}&z={z}

        // 3. Google道路（白色道路）
        // http://mt0.google.com/vt/lyrs=r&hl=en&x={x}&y={y}&z={z}

        // 4. Google衛星（無道路圖）
        // http://mt0.google.com/vt/lyrs=s&hl=en&x={x}&y={y}&z={z}

        // 5. Google地形
        // http://mt0.google.com/vt/lyrs=t&hl=en&x={x}&y={y}&z={z}

        // 6. Google衛星+道路圖
        // http://mt0.google.com/vt/lyrs=y&hl=en&x={x}&y={y}&z={z}

        // 7 leaflet
        // https://tile.openstreetmap.org/{z}/{x}/{y}.png

        // 8 國土測繪中心
        // https://wmts.nlsc.gov.tw/wmts/EMAP/default/{z}/{x}/{y}.png
        var url_maps = {
            "Google道路圖": L.tileLayer("http://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}", {
                maxZoom: 19,
                attribution: "Google道路圖",
            }),
            "Google地形 + 道路圖": L.tileLayer("http://mt0.google.com/vt/lyrs=p&hl=en&x={x}&y={y}&z={z}", {
                maxZoom: 19,
                attribution: "Google地形 + 道路圖",
            }),
            "Google道路（白色道路）": L.tileLayer("http://mt0.google.com/vt/lyrs=r&hl=en&x={x}&y={y}&z={z}", {
                maxZoom: 19,
                attribution: "Google道路（白色道路）",
            }),
            "Google衛星（無道路圖）": L.tileLayer("http://mt0.google.com/vt/lyrs=s&hl=en&x={x}&y={y}&z={z}", {
                maxZoom: 19,
                attribution: "Google衛星（無道路圖）",
            }),
            "Google地形": L.tileLayer("http://mt0.google.com/vt/lyrs=t&hl=en&x={x}&y={y}&z={z}", {
                maxZoom: 19,
                attribution: "Google地形",
            }),
            "Google衛星 + 道路圖": L.tileLayer("http://mt0.google.com/vt/lyrs=y&hl=en&x={x}&y={y}&z={z}", {
                maxZoom: 19,
                attribution: "Google衛星 + 道路圖",
            }),
            "Leaflet": L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 19,
                attribution: "Leaflet",
            }),
            "國土測繪中心": L.tileLayer("https://wmts.nlsc.gov.tw/wmts/EMAP/default/{z}/{x}/{y}.png", {
                maxZoom: 19,
                attribution: "國土測繪中心",
            }),

        };

        var map_select = "Google道路圖";


        const lat = 24.965567;
        const lng = 121.219000;

        var map = L.map('map', {
            center: [lat, lng], // 台北 101
            zoom: 19,
            layers: [url_maps[map_select]]
        });

 

        // ---4. 加入選單 ---
        L.control.layers(url_maps).addTo(map);

        var green_icon = L.divIcon({
            className: "",
            html: `
                <svg width="36" height="36" viewBox="0 0 24 24">
                    <path fill="#c9ffc9" stroke="#69ff69" stroke-width="2"
                        d="M12 2C8.134 2 5 5.134 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.866-3.134-7-7-7z"/>
                </svg>
            `,
            iconSize: [36, 36],
            iconAnchor: [18, 36]
        });

        L.marker([lat, lng], { icon: green_icon }).addTo(map)
            .bindPopup('hahaha.')
            .openPopup();

    
    </script>

    


    
@endsection