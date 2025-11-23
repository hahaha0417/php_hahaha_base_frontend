@php
use hahaha\function_base as hahaha_function_base;
$hahaha_function_base = hahaha_function_base::Instance();
@endphp
@extends('frontend.layout')


@section('content')

    <!-- 沒營養，不打包 -->
    <section id="contact_map" class="about_info my-5">
        <div class="container">

            <div class="row justify-content-center align-items-start">

                <!-- 左側：頭像 + 字 -->
                <div class="col-12 col-md-5 text-center mb-4 mt-5">
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

    
    <!-- 沒營養，不打包 -->
    <section id="contact_chart" class="about_info my-5">
        <div class="container">

            <div class="row justify-content-center align-items-start">
                <div class="chart_gauge" style="width: 600px;height:400px;"></div>
            </div>

        </div>
    </section> 

    <!-- // ----------------------------------------------------------------- -->
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

    <?php echo $hahaha_function_base->Js($hahaha_function_base->Url_Asset('leaflet/leaflet_map_test.js')); ?>
    <script>
        

        const lat = 24.965567;
        const lng = 121.219000;

        let map_ = new leaflet_map_test("map", 
            "Google道路圖", 
            lat, 
            lng
        );
        
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

        L.marker([lat, lng], { icon: green_icon }).addTo(map_.map)
            .bindPopup('hahaha.')
            .openPopup();

    
    </script>
    <!-- // ----------------------------------------------------------------- -->
    
    
    <!-- // ----------------------------------------------------------------- -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/6.0.0/echarts.min.js" 
    integrity="sha512-4/g9GAdOdTpUP2mKClpKsEzaK7FQNgMjq+No0rX8XZlfrCGtbi4r+T/p5fnacsEC3zIAmHKLJUL7sh3/yVA4OQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- 基底 -->
    <?php echo $hahaha_function_base->Js($hahaha_function_base->Url_Asset('echart/gauge/echart_gauge_test.js')); ?>
    
    <script>
        // 物件
        let gauge_v1 = new echart_gauge_test_(".chart_gauge").initial_v1();

        echart_gauge_v1.update(gauge_v1, 0.375);
        
    </script>
    <!-- // ----------------------------------------------------------------- -->




    
    

    
@endsection