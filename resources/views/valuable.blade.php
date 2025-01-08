@extends('layouts_main.master')

@section('content')
    <div class="main_section" id="main">



        <div class="container-fluid px-0 py-5 m-0 position-relative bg-car">
            <div class="container">

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12">
                        <div class="pg-section-title wm-content mx-auto text-center">
                            <h3>黃金/精品/3C產品</h3>
                            <p class="sub-title">VALUABLE</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="ima{{asset('assets/ges/02/02_4icon1.png" c')}}lass="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>高度專業的鑑定與估價</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_4icon2.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>迅速的現金解決方案</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_4icon3.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>靈活的收購方式</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_4icon4.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>黃金典當不扣重</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_4icon5.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>彈性的還款方式</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_4icon6.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>專業保管</h4>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="container-fluid px-0 py-5 m-0 position-relative bg-car2">
            <div class="container">

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12">
                        <div class="services-notice">
                            <h5>借款特色</h5>
                            <p>年滿20歲持有有價物品之中華民國國民皆可辦理。</p>
                        </div>
                        <div class="services-notice">
                            <h5>應備文件</h5>
                            <p>建議您可參考以下資訊將應備文件提前準備好，透過LINE或電洽玉山客服專員即可快速審件、火速撥款！</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="services-item-box2">
                            <h6 class="text-center">3C商品、家電</h6>
                            <p>
                                1.身分證正本<br>
                                2.保證書<br>
                                3.相關周邊配件
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item-box2">
                            <h6 class="text-center">精品珠寶</h6>
                            <p>
                                1.身分證正本<br>
                                2.購買證明<br>
                                3.名錶、鑽石請攜帶保證書和原廠裝盒
                            </p>
                        </div>
                    </div>

                    <div class="col-12">
                        <p class="text-primary" style="font-size: 14px;">
                            ※在玉山融資典當精品可彈性還款，隨時提前償還或再借款，到期日可以選擇只繳利息，也可以選擇攤還部分本息。<br>
                            ※可以每月只付最低利息、不還本金，直到清償為止；也可以選擇分期攤還本金。
                        </p>
                    </div>
                </div>

            </div>
        </div>

        @include('components.services-info-section')


    </div>
@endsection
