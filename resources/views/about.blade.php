@extends('layouts_main.master')

@section('content')
    <div class="main_section" id="main">




        <!-- 公司簡介 -->
        <div class="container-fluid px-0 py-5 m-0 position-relative bg-about">

            <div class="container">
                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12">
                        <div class="pg-section-title wm-content mx-auto text-center">
                            <h3>公司簡介</h3>
                            <p class="sub-title">About</p>
                        </div>
                        <p class="text-center">
                            玉山為政府合法立案的優質當舖，嚴格遵守當舖相關營業法規，時刻站在您的立場為您著想，<br>
                            以「誠信經營」和「客戶至上」為核心價值，為您提供便捷的資金周轉方案，<br>
                            無論是黃金珠寶、名錶、汽機車、3C產品，還是不動產等，都能獲得公正的估價與快速放款。
                        </p>
                    </div>

                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-4">
                    <div class="col-lg-3 mb-3">
                        <div class="about-slogn-item">
                            <div class="about-slogn-icon text-center mb-3">
                                <img src="{{asset('assets/images/01/01icon01.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="about-slogn-text text-center">
                                <h4>高額低利</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="about-slogn-item">
                            <div class="about-slogn-icon text-center mb-3">
                                <img src="{{asset('assets/images/01/01icon02.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="about-slogn-text text-center">
                                <h4>審核快速</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="about-slogn-item">
                            <div class="about-slogn-icon text-center mb-3">
                                <img src="{{asset('assets/images/01/01icon03.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="about-slogn-text text-center">
                                <h4>個資保密</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="about-slogn-item">
                            <div class="about-slogn-icon text-center mb-3">
                                <img src="{{asset('assets/images/01/01icon04.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="about-slogn-text text-center">
                                <h4>合法安全</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-4">
                    <div class="col-lg-7 mb-lg-5 mb-3 order-2 order-lg-1">
                        <div class="about-content">
                            <h5>玉山優質當舖 — 雲林頂尖的融資夥伴</h5>
                            <p>
                                自民國51年創立以來，玉山優質當舖不斷地追求進步走在創新的前沿，成立之初即從老式當舖轉型為服務取向、以客為尊的銀行式融資公司。<br>
                                提供靈活的金融服務，承辦包括動產與不動產抵押、汽機車借款、黃金珠寶質押，以及各類企業融資（長短期皆可配合），是<span
                                    class="text-primary">政府合法立案的質押典當業者（統編：63181253）</span>，我們以專業的服務為客戶打造安心的借貸體驗。<br><br>

                                多年來，玉山優質當舖引領雲林鄉親走入新的借貸領域，無需跨縣市奔波，即可在雲林斗六享受便捷、頂級的高品質借款服務。
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-lg-5 mb-3 order-1 order-lg-2">
                        <div class="about-img">
                            <picture class="img-fluid wow fadeInUp" data-wow-delay="0.1s">
                                <source srcset="{{asset('assets/images/01/01pic1_512.jpg')}}" media="(max-width: 768px)" type="image/jpg">
                                <img src="{{asset('assets/images/01/01pic1_960.jpg')}}" class="img-fluid" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-lg-auto mb-3 order-3">
                        <div class="about-img">
                            <picture class="img-fluid wow fadeInUp" data-wow-delay="0.1s">
                                <source srcset="{{asset('assets/images/01/01pic2_640.jpg')}}" media="(max-width: 768px)" type="image/jpg">
                                <img src="{{asset('assets/images/01/01pic2_960.jpg')}}" class="img-fluid" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="col-lg-7 mb-lg-auto mb-3 order-4">
                        <div class="about-content">
                            <h5>政府合法立案，正派經營</h5>
                            <p>
                                我們了解社會對融資與當舖存在一些誤解，常與非法管道混為一談。<br>
                                但事實上，當舖、汽機車借款及動產融資等質押業務，均受到政府合法監管並遵循相關法規；<br>
                                我們以合法性保障借貸雙方的權益，不僅是合法產業，更是金融市場中的關鍵角色。<br>
                                <span class="text-primary">相比傳統銀行，玉山的質押業務以即時核款、快速放款的優勢，幫助企業主靈活掌握資金，快速應對商機。</span><br><br>


                                在玉山，我們不僅提供高效的申辦流程，利息採單利計算，無隱藏手續費，我們亦會根據客戶的財務狀況，量身定制最符合需求的彈性方案，為即期與短期資金需求者提供更具效率、更靈活的解決方案。<br><br>


                                不論您是個人或企業，玉山優質當舖將是您信賴的金融夥伴，讓資金周轉不再成為阻礙您前進的障礙。
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--  -->
        <div class="container-fluid px-0 py-5 m-0 position-relative bg-about2">
            <div class="container">

                <div class="row justify-content-start align-items-center mx-lg-auto mx-2">
                    <div class="col-12">
                        <div class="about-content2">
                            <h5 class="text-primary">扎根雲林多年的玉山，深知每位鄉親的需求</h5>
                            <p>
                                想享受更好的服務、更優惠的利率？雲林鄉親們無需費心跑到其他縣市，玉山優質當舖就在您身邊，提供<br>
                                最優質的客戶服務及多樣化的借貸選擇，我們始終站在客戶的立場，為您的需求著想。<br><br>

                                我們深知，借貸並非只屬於某個群體，借錢只是短期周轉的工具而已。<br>
                                因此，保護您的隱私是我們的責任，我們也將竭力維護每位客戶的信譽與信任。
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid px-0 py-5 m-0 position-relative bg-about3">

            <div class="container position-relative w-100 mt-5 mb-3 py-5 d-md-none d-block"></div>

            <div class="container">

                <div class="row justify-content-end align-items-center mx-lg-auto mx-2">
                    <div class="col-lg-4 col-md-5"></div>
                    <div class="col-lg-8 col-md-7">
                        <div class="about-content3">
                            <h4>斗六玉山優質當舖以專業與誠信打造信任橋樑，成為你資金周轉的首選夥伴</h4>
                            <h4 class="text-primary">不論您面臨什麼樣的財務需求，我們都隨時準備為您提供支持與協助</h4>
                            <p>
                                金飾、名錶、3C產品或其他珍貴物品需要變現，斗六玉山優質當舖都將為您提供公平合理的估價，快速審核，並保證您的隱私與財產安全。
                            </p>
                        </div>
                        <a href="{{ route('process') }}" class="mb-3 ms-4">
                            <div class="d-flex justify-content-between align-items-center btn-outline-main4 py-1 px-3 wm-content"
                                style="min-width: 150px;">
                                <span class="me-3">快速借款流程</span>
                                <span>></span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
