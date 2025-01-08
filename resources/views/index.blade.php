@extends('layouts_main.master')

@section('content')
    <div class="main_section">



        <!-- 快速介紹 -->
        <div class="container-fluid px-0 py-5 m-0 bg-slogan">
            <div class="container">
                <div class="row align-items-center mx-lg-auto mx-2" id="slogan">
                    <div class="col-lg-5">
                        <div class="row g-md-auto g-2">
                            <div class="col-4">
                                <div class="card shadow-sm">
                                    <div class="card-body text-center">
                                        <img src="{{asset('assets/images/00-hp/icon01.png')}}" class="img-fluid w-90" alt="">
                                        <h5 class="card-title">合法</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card shadow-sm">
                                    <div class="card-body text-center">
                                        <img src="{{asset('assets/images/00-hp/icon02.png')}}" class="img-fluid w-90" alt="">
                                        <h5 class="card-title">息低</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card shadow-sm">
                                    <div class="card-body text-center">
                                        <img src="{{asset('assets/images/00-hp/icon03.png')}}" class="img-fluid w-90" alt="">
                                        <h5 class="card-title">保密</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 mt-lg-auto mt-4">
                        <h3 class="font-bold" style="color: #cd934a">靈活借款・專業評估・誠信經營</h3>
                        <h4>玉山是您生意周轉的好夥伴！</h4>
                        <p>無論您是短期資金周轉還是長期投資需求，斗六玉山優質當鋪始終是您值得信賴的夥伴。</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 服務項目 -->
        <div class="container-fluid px-0 py-5 m-0 position-relative bg-p1-service-section">
            <div class="container">
                <div class="row justify-content-center align-items-center mx-lg-auto mx-2">
                    <div class="col-12 text-center py-3">
                        <h4>雲林最推薦一玉山優質當鋪，<br class="d-block d-md-none">時刻為您著想<br>多元借貸商品供您選擇</h4>
                    </div>

                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2">
                    <div class="col-lg-3 col-md-6 col-12 text-center py-3">
                        <div class="card shadow-sm services-item">
                            <div class="card-body">
                                <img src="{{asset('assets/images/00-hp/sericon01.svg')}}" class="img-fluid services-item-img-first"
                                    alt="">
                                <h5 class="card-title">汽機車借款</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 text-center py-3">
                        <div class="card shadow-sm services-item">
                            <div class="card-body">
                                <img src="{{asset('assets/images/00-hp/sericon02.svg')}}" class="img-fluid services-item-img" alt="">
                                <h5 class="card-title">支客票貼現</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 text-center py-3">
                        <div class="card shadow-sm services-item">
                            <div class="card-body">
                                <img src="{{asset('assets/images/00-hp/sericon03.svg')}}" class="img-fluid services-item-img" alt="">
                                <h5 class="card-title">房地融資代辦</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-12"></div>

                    <div class="col-lg-3 col-md-6 col-12 text-center py-3">
                        <div class="card shadow-sm services-item">
                            <div class="card-body">
                                <img src="{{asset('assets/images/00-hp/sericon04.svg')}}" class="img-fluid services-item-img" alt="">
                                <h5 class="card-title">黄金/精品/3C產品</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 text-center py-3">
                        <div class="card shadow-sm services-item">
                            <div class="card-body">
                                <img src="{{asset('assets/images/00-hp/sericon05.svg')}}" class="img-fluid services-item-img" alt="">
                                <h5 class="card-title">代償降息專案</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 text-center py-3">
                        <div class="card shadow-sm services-item">
                            <div class="card-body">
                                <img src="{{asset('assets/images/00-hp/sericon06.svg')}}" class="img-fluid services-item-img" alt="">
                                <h5 class="card-title">工商企業融資</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container position-relative w-100 mt-5 py-5">
                <div class="m-ban mx-lg-auto mx-3">
                    <picture class="img-fluid wow fadeInUp" data-wow-delay="0.1s">
                        <source srcset="{{asset('assets/images/00-hp/m_ban_480.jpg')}}" media="(max-width: 768px)" type="image/jpg">
                        <source srcset="{{asset('assets/images/00-hp/m_ban_1024.jpg')}}" media="(max-width: 1024px)" type="image/jpg">
                        <source srcset="{{asset('assets/images/00-hp/m_ban_1280.jpg')}}" media="(max-width: 1280px)" type="image/jpg">
                        <img src="{{asset('assets/images/00-hp/m_ban_1608.jpg')}}" class="img-fluid" alt="">
                    </picture>
                </div>
            </div>

        </div>


        <!-- 關於玉山 -->
        <div class="container-fluid px-0 py-5 m-0 position-relative bg-ab-section">

            <div class="container position-relative w-100 mt-5 py-5"></div>

            <div class="container">
                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12 text-center py-3 ab-section-title">
                        <h4 class="text-white mx-auto mb-3">雲林頂尖的融資夥伴 — <br class="d-block d-lg-none">玉山優質當鋪</h4>
                        <h4 class="text-white line-bottom mx-auto pb-3 wm-content">讓您周轉免煩惱</h4>
                    </div>

                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2">
                    <div class="col-lg-7 ab-section-content mb-lg-auto mb-3">
                        <p>
                            自民國51年創立以來，玉山優質當舖不斷地追求進步走在創新的前沿，成立之初即從老式當舖轉型為服務取向、以客為尊的銀行式融資公司。<br>
                            提供靈活的金融服務，承辦包括動產與不動產抵押、汽機車借款、黃金珠寶質押，以及各類企業融 （長短期皆可配合），是<span
                                class="text-primary">政府合法立案的質押典當業者（統編：63181253）</span>，我們以專業的服務為客戶打造安心的借貸體驗。 <br><br>

                            多年來，玉山優質當舖引領雲林鄉親走入新的借貸領域，無需跨縣市奔波，即可在雲林斗六享受便捷、頂級的高品質借款服務。
                        </p>
                        <a href="{{ route('about') }}">
                            <div class="d-flex justify-content-between align-items-center btn-outline-main py-1 px-4 wm-content"
                                style="min-width: 150px;">
                                <span class="me-3">公司簡介</span>
                                <span>></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-5">
                        <picture class="img-fluid wow fadeInUp" data-wow-delay="0.1s">
                            <source srcset="{{asset('assets/images/00-hp/ab_pic312.jpg')}}" media="(max-width: 768px)" type="image/jpg">
                            <img src="{{asset('assets/images/00-hp/ab_pic624.jpg')}}" class="img-fluid" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>

        <!-- 服務流程 -->
        <div class="container-fluid px-0 py-5 m-0 position-relative bg-step-section">
            <div class="container">
                <div class="row justify-content-center align-items-center mx-lg-auto mx-2">
                    <div class="col-12 text-center py-3 step-section-title">
                        <h4 class="mx-auto mb-3">玉山優質當舖</h4>
                        <h4 class="mx-auto">簡單<span class="text-danger">4</span>步驟，快速核貸超有感！</h4>
                    </div>

                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2">
                    <div class="col-lg-auto">
                        <div class="step-item text-center pb-3 mb-lg-auto mb-3">
                            <h5 class="py-2">Step 01</h5>
                            <img src="{{asset('assets/images/00-hp/steps_icon01.png')}}" class="img-fluid my-3" alt="">
                            <h6 class="text-center mb-3">諮詢/備妥相關資料文件</h6>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{asset('assets/images/00-hp/step-arrow-removebg.png')}}" class="img-fluid step-arrow-img" alt="">
                    </div>
                    <div class="col-lg-auto">
                        <div class="step-item text-center pb-3 mb-lg-auto mb-3">
                            <h5 class="py-2">Step 02</h5>
                            <img src="{{asset('assets/images/00-hp/steps_icon02.png')}}" class="img-fluid my-3" alt="">
                            <h6 class="text-center mb-3">審核借款額度及利率</h6>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{asset('assets/images/00-hp/step-arrow-removebg.png')}}" class="img-fluid step-arrow-img" alt="">
                    </div>
                    <div class="col-lg-auto">
                        <div class="step-item text-center pb-3 mb-lg-auto mb-3">
                            <h5 class="py-2">Step 03</h5>
                            <img src="{{asset('assets/images/00-hp/steps_icon03.png')}}" class="img-fluid my-3" alt="">
                            <h6 class="text-center mb-3">說明利息計算方式及規範</h6>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{asset('assets/images/00-hp/step-arrow-removebg.png')}}" class="img-fluid step-arrow-img" alt="">
                    </div>
                    <div class="col-lg-auto">
                        <div class="step-item text-center pb-3 mb-lg-auto mb-3">
                            <h5 class="py-2">Step 04</h5>
                            <img src="{{asset('assets/images/00-hp/steps_icon04.png')}}" class="img-fluid my-3" alt="">
                            <h6 class="text-center mb-3">火速撥款、順利取得資金</h6>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-lg-5 mt-3 mb-3">
                        <p>不論您面臨什麼樣的財務需求，玉山都隨時準備為您提供支持與協助。</p>
                    </div>

                    <div class="col-12 text-center mt-3 mb-3">
                        <a href="{{ route('process') }}" class="">
                            <div class="d-flex mx-auto justify-content-between align-items-center btn-outline-main2 py-1 px-4 wm-content"
                                style="min-width: 150px;">
                                <span class="me-3">快速借款流程</span>
                                <span>></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 最新消息 -->
        <div class="container-fluid px-0 py-5 m-0 position-relative bg-news-section">
            <div class="container">

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2">
                    <div class="col-lg-6 mb-lg-auto mb-3">
                        <div class="news-section-title mb-4">
                            <h4>最新消息</h4>
                            <p class="mb-0 sub-title">News</p>
                        </div>
                        <p>
                            很多人不知道要怎麼借款？該如何開口？利息會不會很高？<br>
                            不用擔心！玉山優質當舖政府合法立案，利率照著政府法規走！<br>
                            用心提供給您更多借款新知。
                        </p>
                        <a href="{{ route('news') }}">
                            <div class="d-flex justify-content-between align-items-center btn-outline-main3 py-1 px-4 wm-content"
                                style="min-width: 150px;">
                                <span class="me-3">更多新訊</span>
                                <span>></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-0 justify-content-center align-self-center news-box">
                            <div class="col-lg-6">
                                <img src="{{asset('assets/images/00-hp/news_pic.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 bg-white d-flex align-items-center">
                                <div class="position-relative d-grid align-items-center h-100">

                                    <div class="news-date text-end">
                                        <p class="d-block">2024-00-00</p>
                                    </div>
                                    <div class="news-content px-4 py-4">
                                        <h6 class="mb-3">汽機車借款，貸款車也可借！</h6>
                                        <p>汽機車借款，貸款車也可借，輕鬆解決您的資金需求！找玉山....more</p>
                                    </div>

                                    <a href="{{ route('news') }}"
                                        class="btn-outline-main py-1 px-3 wm-content mb-3 ms-auto me-3">觀看詳情 +</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Cta Start -->
        <div class="container-fluid px-0 py-5 m-0 position-relative bg-cta-section">
            <div class="container">
                <div class="row justify-content-center align-items-center mx-lg-auto mx-2">
                    <div class="col-12">
                        <div class="cta-section-title text-center mb-4">
                            <h4>斗六玉山優質當鋪始終以客戶需求為核心，提供最周全的借款規劃。</h4>
                            <p>我們秉持誠信與積極的服務態度，專注於幫助每位有資金周轉需求的顧客，無論您來自雲林的任何地方，玉山都將竭誠為您提供快捷、專業的借貸服務。</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2">
                    <div class="col-lg-6 mb-lg-auto mb-3">
                        <div class="row g-0 justify-content-center align-self-center cta-box">
                            <div class="col-lg-6">
                                <img src="{{asset('assets/images/00-hp/qa_pic.jpg')}}" class="img-fluid cta-pic-img" alt="">
                            </div>
                            <div class="col-lg-6 bg-white d-flex align-items-center">
                                <div class="position-relative d-grid align-items-center h-100">

                                    <div class="qa-content px-4 py-4">
                                        <p>
                                            不確定該如何借錢嗎?<br>
                                            玉山當舖為您整理了常見的借款問題，線上解答您的疑惑，讓您輕鬆了解每一步！
                                        </p>
                                        <a href="{{ route('faq') }}" class="mb-3 ms-4">
                                            <div class="d-flex justify-content-between align-items-center btn-outline-main4 py-1 px-3 wm-content"
                                                style="min-width: 150px;">
                                                <span class="me-3">觀看常見問答</span>
                                                <span>></span>
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-lg-auto mb-3">
                        <div class="row g-0 justify-content-center align-self-center cta-box">
                            <div class="col-lg-6">
                                <img src="{{asset('assets/images/00-hp/con_pic.jpg')}}" class="img-fluid cta-pic-img" alt="">
                            </div>
                            <div class="col-lg-6 bg-white d-flex align-items-center">
                                <div class="position-relative d-grid align-items-center h-100">

                                    <div class="qa-content px-4 py-4">
                                        <p>
                                            若您有任何資金周轉需求或疑問，歡迎隨時聯繫玉山優質當舖，我們提供24小時專人免費諮詢，隨時為您服務！
                                        </p>
                                        <a href="{{ route('faq') }}" class="mb-3 ms-4">
                                            <div class="d-flex justify-content-between align-items-center btn-outline-main4 py-1 px-3 wm-content"
                                                style="min-width: 150px;">
                                                <span class="me-3">聯繫玉山當舖</span>
                                                <span>></span>
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cta End -->

    </div>
@endsection
