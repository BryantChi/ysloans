@extends('layouts_main.master')

@section('content')
    <div class="main_section" id="main">



        <div class="container-fluid px-0 py-5 m-0 position-relative bg-car">
            <div class="container">

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12">
                        <div class="pg-section-title wm-content mx-auto text-center">
                            <h3>房地融資代辦</h3>
                            <p class="sub-title">Real Estate</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_3icon1.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>低利率</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_3icon2.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>高核貸成數</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_3icon3.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>寬鬆的借款審核條件</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_3icon4.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>免費這詢<br>客製化借款方案評估</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_3icon5.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>靈活還款選擇</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_3icon6.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>快速撥款</h4>
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
                            <p>年滿20歲之中華民國國民，持有銀行支票、客票即可辦理。</p>
                        </div>
                        <div class="services-notice">
                            <h5>應備文件</h5>
                            <p>建議您可參考以下資訊將應備文件提前準備好，透過LINE或電洽玉山客服專員即可快速審件、火速撥款！</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="services-item-box2">
                            <h6 class="text-center">房屋所有人</h6>
                            <p>
                                1.身分證正本<br>
                                2.建物所有權狀正本<br>
                                3.印鑑及印鑑證明*2(不限用途)(戶政事務所申請)<br>
                                4.房貸繳款餘額證明(原申貸銀行申請)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item-box2">
                            <h6 class="text-center">土地所有人</h6>
                            <p>
                                1.身分證正本<br>
                                2.土地所有權狀正本<br>
                                3.印鑑及印鑑證明*2(不限用途)(戶政事務所申請)<br>
                                4.土地繳款餘額證明(原申貸銀行申請)
                            </p>
                        </div>
                    </div>

                    <div class="col-12">
                        <p class="text-primary" style="font-size: 14px;">
                            ※玉山融資房地融資代辦可以一次結清或分期攤還，也可以當月只繳利息、不還本金。
                        </p>
                    </div>
                </div>

            </div>
        </div>

        @include('components.services-info-section')


    </div>
@endsection
