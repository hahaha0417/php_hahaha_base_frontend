@extends('frontend.layout')


@section('content')
    <main>
        <section class="bg-gradient-to-br from-indigo-50 to-white dark:from-slate-800 dark:to-slate-900">
            <header style="width:100%; height:650px; overflow:hidden;">
                <img src="image/av/圖.png" alt="Header" style="width:100%; object-fit:contain; background-color:#000;">

            </header>
            <div class="carousel">
                <div class="slides">
                    <div class="slide"><img src="image/av/冬月楓.jpg" alt="image 3"></div>
                    <div class="slide"><img src="image/av/輝月あんり.jpg" alt="image 3"></div>
                    <div class="slide"><img src="image/av/明里紬.jpg" alt="image 3"></div>
                    <div class="slide"><img src="image/av/七沢みあ.jpg" alt="image 3"></div>
                    <div class="slide"><img src="image/av/希咲那奈.jpg" alt="image 2"></div>
                    <div class="slide"><img src="image/av/倉本蓳.jpg" alt="image 3"></div>
                    <div class="slide"><img src="image/av/五十嵐清華.jpg" alt="image 1"></div>
                    <div class="slide"><img src="image/av/白上咲花.jpg" alt="image 3"></div>
                </div>
                <div class="nav">
                    <button id="prev">&#10094;</button>
                    <button id="next">&#10095;</button>
                </div>
            </div>
            <script>
                const slides = document.querySelector('.slides');
                const slideCount = document.querySelectorAll('.slide').length;
                let index = 0;
                
                document.getElementById('next').addEventListener('click', () => {
                index = (index + 1) % slideCount;
                slides.style.transform = `translateX(-${index * 100}%)`;
                });
                
                document.getElementById('prev').addEventListener('click', () => {
                index = (index - 1 + slideCount) % slideCount;
                slides.style.transform = `translateX(-${index * 100}%)`;
                });
                
                // 自動播放
                setInterval(() => {
                index = (index + 1) % slideCount;
                slides.style.transform = `translateX(-${index * 100}%)`;
                }, 4000);
            </script>
        </section>
        <!-- Features -->
        <section id="features" class="features-section">
            <h2 class="section-title">hahaha</h2>

            <div class="features-container">

                <div class="feature-box">
                    <h3>🎨 UI 設計</h3>
                    <p>\ ^ O ^ /</p>
                </div>

                <div class="feature-box">
                    <h3>⚙️ 系統開發</h3>
                    <p>O .O</p>
                </div>

                <div class="feature-box">
                    <h3>🚀 專案整合</h3>
                    <p>^ O &lt;</p>
                </div>

            </div>
        </section>

        <style>
            .features-section {
                max-width: 1200px;
                margin: 0 auto;
                padding: 40px 20px;
            }

            .section-title {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 24px;
            }

            /* ⭐ 讓 3 個方塊水平排列 */
            .features-container {
                display: flex;
                justify-content: space-between;
                gap: 20px;
            }

            /* ⭐ 每個方塊 1/3 寬度 */
            .feature-box {
                background: #fff;
                padding: 24px;
                border-radius: 16px;
                width: calc(33.333% - 14px);
                box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                transition: 0.3s;
            }

            /* hover 陰影 */
            .feature-box:hover {
                box-shadow: 0 6px 20px rgba(0,0,0,0.15);
            }

            /* 文字樣式 */
            .feature-box h3 {
                margin-bottom: 8px;
                font-size: 18px;
                font-weight: bold;
            }
            .feature-box p {
                color: #666;
                font-size: 14px;
            }
        </style>


        
    </main>

    <script>
        // Year
        document.getElementById('year').textContent = new Date().getFullYear();
        
        // Mobile menu
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        menuBtn.addEventListener('click', ()=> mobileMenu.classList.toggle('hidden'));
        
        // Dark mode toggle
        const darkToggle = document.getElementById('darkToggle');
        darkToggle?.addEventListener('click', ()=>{
            document.documentElement.classList.toggle('dark');
            // Persist choice
            const isDark = document.documentElement.classList.contains('dark');
            localStorage.setItem('prefer-dark', isDark ? '1' : '0');
        });
        // Load preference
        if(localStorage.getItem('prefer-dark') === '1') document.documentElement.classList.add('dark');
        
        // Contact form demo (不會真的送出)
        const form = document.getElementById('contactForm');
        const status = document.getElementById('formStatus');
        form.addEventListener('submit', (e)=>{
            e.preventDefault();
            const data = new FormData(form);
            status.textContent = '送出中...';
            setTimeout(()=>{
            status.textContent = '已送出，感謝你的訊息！(此範例不會實際送出)';
            form.reset();
            }, 700);
        });
    </script>

    <style>
    * { box-sizing: border-box; }
    body { font-family: sans-serif; margin: 0; }

    .carousel {
        position: relative;
        width: 600px;
        height: 350px;
        margin: 30px auto;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    .slides {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: 100%;
    }

    .slide {
        min-width: 100%;
        transition: opacity 0.5s;
    }

    .slide img {
        width: 100%;
        height: 350px;
        object-fit: cover;
    }

    .nav {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
    }

    .nav button {
        background-color: rgba(0,0,0,0.5);
        border: none;
        color: #fff;
        font-size: 2em;
        padding: 5px 15px;
        cursor: pointer;
        border-radius: 6px;
    }

    .nav button:hover {
        background-color: rgba(0,0,0,0.8);
    }
    </style>
@endsection