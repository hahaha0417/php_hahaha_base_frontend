<?php

namespace hahaha\view\component\frontend;

class nav
{
    use \hahaha\instance;

	// 建構子
    public function __construct() {
 
    }
    //

    public function view()
    {
?>
<!-- ASUS FULL HEADER -->
<header id="asus-header">

   

    <!-- 主導覽列 -->
    <nav class="navbar navbar-expand-lg asus-navbar px-3 px-lg-4">
        <div class="container-fluid">

            <!-- ASUS logo -->
            <a href="https://www.asus.com/" class="asus-main-logo">
                <span class="asus-logo-text"></span>
            </a>

            <!-- 手機漢堡 -->
            <button class="navbar-toggler border-0" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#asusOffcanvas"
                    aria-controls="asusOffcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- 桌機主選單 -->
            <div class="collapse navbar-collapse" id="asusMainNav">
                <ul class="navbar-nav mx-auto asus-main-nav">

                    <!-- 1. Mobile / Handhelds -->
                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link dropdown-toggle" href="#" role="button">
                            Mobile / Handhelds
                        </a>
                        <div class="dropdown-menu asus-megamenu">
                            <div class="container py-4">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">PHONES</h6>
                                        <a href="#" class="asus-menu-item">ROG Phone</a>
                                        <a href="#" class="asus-menu-item">Zenfone</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">ACCESSORIES</h6>
                                        <a href="#" class="asus-menu-item">Controllers</a>
                                        <a href="#" class="asus-menu-item">Chargers &amp; Cables</a>
                                        <a href="#" class="asus-menu-item">Covers &amp; Cases</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">BY USAGE</h6>
                                        <a href="#" class="asus-menu-item">Gaming</a>
                                        <a href="#" class="asus-menu-item">Photography</a>
                                        <a href="#" class="asus-menu-item">Everyday</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="asus-menu-product mb-3">
                                            <img src="https://dlcdnwebimgs.asus.com/gain/64f61a74-4322-4c7f-a836-29b65832274b/"
                                                 class="img-fluid" alt="">
                                            <div class="asus-menu-product-title">ROG Phone Series</div>
                                        </div>
                                        <div class="asus-menu-product">
                                            <img src="https://dlcdnwebimgs.asus.com/gain/2fbf6218-fffb-4c79-b199-7b82bd5d70ee/"
                                                 class="img-fluid" alt="">
                                            <div class="asus-menu-product-title">Zenfone Series</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- 2. Laptops -->
                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link dropdown-toggle" href="#" role="button">
                            Laptops
                        </a>
                        <div class="dropdown-menu asus-megamenu">
                            <div class="container py-4">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">FOR HOME</h6>
                                        <a href="#" class="asus-menu-item">Vivobook</a>
                                        <a href="#" class="asus-menu-item">Zenbook</a>
                                        <a href="#" class="asus-menu-item">Everyday Laptops</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">FOR WORK</h6>
                                        <a href="#" class="asus-menu-item">ExpertBook</a>
                                        <a href="#" class="asus-menu-item">ProArt Studiobook</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">GAMING</h6>
                                        <a href="#" class="asus-menu-item">ROG Laptops</a>
                                        <a href="#" class="asus-menu-item">TUF Gaming</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="asus-menu-product mb-3">
                                            <img src="https://dlcdnwebimgs.asus.com/gain/9e0abdea-3f61-44a3-861b-e800392b9ad2/"
                                                 class="img-fluid" alt="">
                                            <div class="asus-menu-product-title">ASUS Zenbook</div>
                                        </div>
                                        <div class="asus-menu-product">
                                            <img src="https://dlcdnwebimgs.asus.com/gain/cc24a2ff-063b-4a07-8d4a-6297c39d85c2/"
                                                 class="img-fluid" alt="">
                                            <div class="asus-menu-product-title">ROG Strix Series</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- 3. Displays / Desktops -->
                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link dropdown-toggle" href="#" role="button">
                            Displays / Desktops
                        </a>
                        <div class="dropdown-menu asus-megamenu">
                            <div class="container py-4">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">MONITORS</h6>
                                        <a href="#" class="asus-menu-item">ROG Gaming Monitors</a>
                                        <a href="#" class="asus-menu-item">TUF Gaming Monitors</a>
                                        <a href="#" class="asus-menu-item">ProArt Monitors</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">DESKTOPS</h6>
                                        <a href="#" class="asus-menu-item">ROG Desktops</a>
                                        <a href="#" class="asus-menu-item">Everyday Desktops</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">ALL-IN-ONE</h6>
                                        <a href="#" class="asus-menu-item">All-in-One PCs</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="asus-menu-product mb-3">
                                            <img src="https://dlcdnwebimgs.asus.com/gain/fbfcf9a0-71f9-4ab2-868c-0461853fe032/"
                                                 class="img-fluid" alt="">
                                            <div class="asus-menu-product-title">ROG Gaming Monitor</div>
                                        </div>
                                        <div class="asus-menu-product">
                                            <img src="https://dlcdnwebimgs.asus.com/gain/9bfb368d-c06e-43de-b5a7-7a68ab40d7b9/"
                                                 class="img-fluid" alt="">
                                            <div class="asus-menu-product-title">ASUS Desktop PC</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- 4. Motherboards / Components（你截圖那個） -->
                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link dropdown-toggle" href="#" role="button">
                            Motherboards / Components
                        </a>
                        <div class="dropdown-menu asus-megamenu">
                            <div class="container py-4">
                                <div class="row g-4">

                                    <!-- Categories -->
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">COMPONENTS</h6>
                                        <a href="#" class="asus-menu-item">Motherboards</a>
                                        <a href="#" class="asus-menu-item">Graphics Cards</a>
                                        <a href="#" class="asus-menu-item">Cases</a>
                                        <a href="#" class="asus-menu-item">Cooling</a>
                                        <a href="#" class="asus-menu-item">Power Supply Units</a>
                                        <a href="#" class="asus-menu-item">Sound Cards</a>
                                        <a href="#" class="asus-menu-item">Optical Drives</a>
                                        <a href="#" class="asus-menu-item">Data Storage</a>
                                        <a href="#" class="asus-menu-item">External Graphics Docks</a>
                                        <a href="#" class="asus-menu-item">Single Board Computers</a>
                                        <a href="#" class="asus-menu-item">Software</a>
                                    </div>

                                    <!-- Brand / Chipset -->
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">BY CHIPSET BRAND</h6>
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <img src="https://www.asus.com/media/Odin/images/global/Icon/intel.png" height="18" alt="Intel">
                                            <a href="#" class="asus-menu-item d-inline-block mb-0">Intel</a>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="https://www.asus.com/media/Odin/images/global/Icon/amd.png" height="18" alt="AMD">
                                            <a href="#" class="asus-menu-item d-inline-block mb-0">AMD</a>
                                        </div>
                                    </div>

                                    <!-- Series -->
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">BY BRAND / SERIES</h6>
                                        <a href="#" class="asus-menu-item">All series</a>
                                        <a href="#" class="asus-menu-item">ROG - Republic of Gamers</a>
                                        <a href="#" class="asus-menu-item">TUF Gaming</a>
                                        <a href="#" class="asus-menu-item">PRIME</a>
                                        <a href="#" class="asus-menu-item">ProArt</a>
                                        <a href="#" class="asus-menu-item">BTF Hidden-Connector</a>
                                        <a href="#" class="asus-menu-item">Workstation</a>
                                        <a href="#" class="asus-menu-item">CSM</a>
                                        <a href="#" class="asus-menu-item">Business</a>
                                        <a href="#" class="asus-menu-item">Expedition</a>
                                        <a href="#" class="asus-menu-item">Others</a>
                                        <a href="#" class="asus-menu-item">Accessories</a>
                                    </div>

                                    <!-- Product cards -->
                                    <div class="col-lg-3">
                                        <div class="asus-menu-product mb-3">
                                            <img src="https://dlcdnwebimgs.asus.com/gain/6a509aee-e930-4032-a0ec-4548932e8def/"
                                                 class="img-fluid" alt="">
                                            <div class="asus-menu-product-title">ROG CROSSHAIR X870E HERO</div>
                                        </div>
                                        <div class="asus-menu-product">
                                            <img src="https://dlcdnwebimgs.asus.com/gain/23ceb49a-e6a5-4222-b9f4-bae637e69944/"
                                                 class="img-fluid" alt="">
                                            <div class="asus-menu-product-title">ROG MAXIMUS Z890 EXTREME</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- 5. Networking / IoT / Servers -->
                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link dropdown-toggle" href="#" role="button">
                            Networking / IoT / Servers
                        </a>
                        <div class="dropdown-menu asus-megamenu">
                            <div class="container py-4">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">NETWORKING</h6>
                                        <a href="#" class="asus-menu-item">WiFi Routers</a>
                                        <a href="#" class="asus-menu-item">Mesh WiFi Systems</a>
                                        <a href="#" class="asus-menu-item">Modem Routers</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">SMART / IoT</h6>
                                        <a href="#" class="asus-menu-item">Smart Home</a>
                                        <a href="#" class="asus-menu-item">IoT Solutions</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">SERVERS</h6>
                                        <a href="#" class="asus-menu-item">Server Motherboards</a>
                                        <a href="#" class="asus-menu-item">Servers &amp; Workstations</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="asus-menu-product mb-3">
                                            <img src="https://dlcdnwebimgs.asus.com/gain/108c9010-7dc8-4c63-8c73-93fd99df4b77/"
                                                 class="img-fluid" alt="">
                                            <div class="asus-menu-product-title">ASUS WiFi Router</div>
                                        </div>
                                        <div class="asus-menu-product">
                                            <img src="https://dlcdnwebimgs.asus.com/gain/9b60ffff-6edd-42db-ad96-2bfc6fe53142/"
                                                 class="img-fluid" alt="">
                                            <div class="asus-menu-product-title">Server &amp; Workstation</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- 6. Accessories -->
                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link dropdown-toggle" href="#" role="button">
                            Accessories
                        </a>
                        <div class="dropdown-menu asus-megamenu">
                            <div class="container py-4">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">GAMING GEAR</h6>
                                        <a href="#" class="asus-menu-item">Mice</a>
                                        <a href="#" class="asus-menu-item">Keyboards</a>
                                        <a href="#" class="asus-menu-item">Headsets</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">CASES &amp; BAGS</h6>
                                        <a href="#" class="asus-menu-item">Backpacks</a>
                                        <a href="#" class="asus-menu-item">Sleeves</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="asus-menu-title">ADAPTERS &amp; CABLES</h6>
                                        <a href="#" class="asus-menu-item">USB Hubs</a>
                                        <a href="#" class="asus-menu-item">Chargers</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="asus-menu-product mb-3">
                                            <img src="https://dlcdnwebimgs.asus.com/gain/ef1a487c-2a1f-4bb1-9848-92e18284d888/"
                                                 class="img-fluid" alt="">
                                            <div class="asus-menu-product-title">ROG Gaming Mouse</div>
                                        </div>
                                        <div class="asus-menu-product">
                                            <img src="https://dlcdnwebimgs.asus.com/gain/c9c32bb2-7058-44cc-8ff0-dc95135406d3/"
                                                 class="img-fluid" alt="">
                                            <div class="asus-menu-product-title">ASUS Backpack</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- 7. Support：單純連結 -->
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.asus.com/support/">Support</a>
                    </li>

                </ul>

                <!-- 右邊搜尋＋帳號（桌機） -->
                <div class="d-none d-lg-flex gap-3 ms-auto">
                    <button class="btn asus-icon-btn" id="asus-search-toggle"><i class="fa fa-search"></i></button>
                    <button class="btn asus-icon-btn"><i class="fa fa-user-o"></i></button>
                </div>

            </div>

        </div>
    </nav>

    <!-- 搜尋列 -->
    <div class="asus-search-bar" id="asus-searchbar">
        <div class="container px-3 px-lg-4 py-2">
            <form class="d-flex">
                <input class="form-control rounded-pill" type="search" placeholder="Search ASUS.com">
                <button class="btn ms-2 rounded-pill asus-search-btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <!-- 手機版 OFFCANVAS -->
    <div class="offcanvas offcanvas-start asus-offcanvas" tabindex="-1" id="asusOffcanvas">
        <div class="offcanvas-header">
            <span class="asus-logo-text"></span>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body asus-mobile-menu">

            <!-- 手機版上方 logo 列 -->
            <div class="d-flex gap-3 mb-3">
                <img src="https://www.asus.com/media/Odin/images/header/ROG_hover.svg" height="20" alt="">
                <img src="https://www.asus.com/media/Odin/images/header/ProArt_hover.svg" height="20" alt="">
                <img src="https://www.asus.com/media/Odin/images/header/IoT_hover.svg" height="20" alt="">
            </div>

            <!-- 每一個主分類：多層 collapse -->
            <!-- Mobile / Handhelds -->
            <div class="asus-mobile-item">
                <button class="asus-mobile-toggle" data-bs-toggle="collapse" data-bs-target="#mMobile">
                    Mobile / Handhelds <span class="arrow"></span>
                </button>
                <div class="collapse" id="mMobile">
                    <div class="asus-mobile-subitem">
                        <button class="asus-mobile-toggle2" data-bs-toggle="collapse" data-bs-target="#mMobilePhones">
                            Phones <span class="arrow"></span>
                        </button>
                        <div class="collapse" id="mMobilePhones">
                            <a class="asus-mobile-link">ROG Phone</a>
                            <a class="asus-mobile-link">Zenfone</a>
                        </div>
                    </div>
                    <div class="asus-mobile-subitem">
                        <button class="asus-mobile-toggle2" data-bs-toggle="collapse" data-bs-target="#mMobileAcc">
                            Accessories <span class="arrow"></span>
                        </button>
                        <div class="collapse" id="mMobileAcc">
                            <a class="asus-mobile-link">Controllers</a>
                            <a class="asus-mobile-link">Chargers &amp; Cables</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Laptops -->
            <div class="asus-mobile-item">
                <button class="asus-mobile-toggle" data-bs-toggle="collapse" data-bs-target="#mLaptops">
                    Laptops <span class="arrow"></span>
                </button>
                <div class="collapse" id="mLaptops">
                    <div class="asus-mobile-subitem">
                        <button class="asus-mobile-toggle2" data-bs-toggle="collapse" data-bs-target="#mLapHome">
                            For Home <span class="arrow"></span>
                        </button>
                        <div class="collapse" id="mLapHome">
                            <a class="asus-mobile-link">Vivobook</a>
                            <a class="asus-mobile-link">Zenbook</a>
                        </div>
                    </div>
                    <div class="asus-mobile-subitem">
                        <button class="asus-mobile-toggle2" data-bs-toggle="collapse" data-bs-target="#mLapWork">
                            For Work <span class="arrow"></span>
                        </button>
                        <div class="collapse" id="mLapWork">
                            <a class="asus-mobile-link">ExpertBook</a>
                            <a class="asus-mobile-link">ProArt Studiobook</a>
                        </div>
                    </div>
                    <div class="asus-mobile-subitem">
                        <button class="asus-mobile-toggle2" data-bs-toggle="collapse" data-bs-target="#mLapGaming">
                            Gaming <span class="arrow"></span>
                        </button>
                        <div class="collapse" id="mLapGaming">
                            <a class="asus-mobile-link">ROG Laptops</a>
                            <a class="asus-mobile-link">TUF Gaming</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Displays / Desktops -->
            <div class="asus-mobile-item">
                <button class="asus-mobile-toggle" data-bs-toggle="collapse" data-bs-target="#mDisplays">
                    Displays / Desktops <span class="arrow"></span>
                </button>
                <div class="collapse" id="mDisplays">
                    <a class="asus-mobile-link">Gaming Monitors</a>
                    <a class="asus-mobile-link">ProArt Monitors</a>
                    <a class="asus-mobile-link">Desktops</a>
                </div>
            </div>

            <!-- Motherboards / Components -->
            <div class="asus-mobile-item">
                <button class="asus-mobile-toggle" data-bs-toggle="collapse" data-bs-target="#mMB">
                    Motherboards / Components <span class="arrow"></span>
                </button>
                <div class="collapse" id="mMB">
                    <a class="asus-mobile-link">Motherboards</a>
                    <a class="asus-mobile-link">Graphics Cards</a>
                    <a class="asus-mobile-link">Cases</a>
                    <a class="asus-mobile-link">Cooling</a>
                    <a class="asus-mobile-link">Power Supply Units</a>
                    <a class="asus-mobile-link">Sound Cards</a>
                </div>
            </div>

            <!-- Networking / IoT / Servers -->
            <div class="asus-mobile-item">
                <button class="asus-mobile-toggle" data-bs-toggle="collapse" data-bs-target="#mNet">
                    Networking / IoT / Servers <span class="arrow"></span>
                </button>
                <div class="collapse" id="mNet">
                    <a class="asus-mobile-link">WiFi Routers</a>
                    <a class="asus-mobile-link">Mesh WiFi Systems</a>
                    <a class="asus-mobile-link">Servers</a>
                </div>
            </div>

            <!-- Accessories -->
            <div class="asus-mobile-item">
                <button class="asus-mobile-toggle" data-bs-toggle="collapse" data-bs-target="#mAcc">
                    Accessories <span class="arrow"></span>
                </button>
                <div class="collapse" id="mAcc">
                    <a class="asus-mobile-link">Mice</a>
                    <a class="asus-mobile-link">Keyboards</a>
                    <a class="asus-mobile-link">Headsets</a>
                </div>
            </div>

            <!-- Support -->
            <a class="asus-mobile-link" href="https://www.asus.com/support/">Support</a>

        </div>
    </div>

</header>

<?php

    }
}
