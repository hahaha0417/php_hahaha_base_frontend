// const lat = 24.965567;
// const lng = 121.219000;

// let map_ = new leaflet_map_test("map", 
//     "Google道路圖", 
//     lat, 
//     lng
// );
class leaflet_map_test
{
    constructor($name, select, lat = 24.965567, lng = 121.219000)
    {
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
        this.url_maps = {
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

        this.select = select;

        this.map = L.map('map', {
            center: [lat, lng], // 台北 101
            zoom: 19,
            layers: [this.url_maps[this.select]]
        });

        // ---4. 加入選單 ---
        L.control.layers(this.url_maps).addTo(this.map);
    }
}