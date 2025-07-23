@extends('layouts_main.master')

@section('content')
    <div class="main_section" id="main">



        <div class="container-fluid px-0 py-5 m-0 position-relative bg-car">
            <div class="container">

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12">
                        <div class="pg-section-title wm-content mx-auto text-center">
                            <h3>支客票貼現</h3>
                            <p class="sub-title">Cheque</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_2icon1.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>接受多種類型的支票</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_2icon2.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>不限金額、票期長短</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_2icon3.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>禁止背書轉讓可借</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_2icon4.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>低利率優勢</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_2icon5.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>靈活的審核標準</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_2icon6.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>三點半前保證撥款</h4>
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
                            <p>
                                年滿18歲之中華民國國民，持有銀行支票、客票即可辦理。<br>
                                即使是信用瑕疵或有退補記錄的客戶，也能夠申請借款。
                            </p>
                        </div>
                        <div class="services-notice">
                            <h5>應備文件</h5>
                            <p>建議您可參考以下資訊將應備文件提前準備好，透過LINE或電洽玉山客服專員即可快速審件、火速撥款！</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="services-item-box2">
                            <h6 class="text-center">個人戶</h6>
                            <p>
                                1.身分證正本<br>
                                2.銀行支票<br>
                                3.印鑑章
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-item-box2">
                            <h6 class="text-center">公司戶</h6>
                            <p>
                                1.公司負責人身分證正本<br>
                                2.銀行支票<br>
                                3.營利事業登記證<br>
                                4.公司大小章
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-item-box2">
                            <h6 class="text-center">客票</h6>
                            <p>
                                1.身分證正本<br>
                                2.客票名片或發票
                            </p>
                        </div>
                    </div>

                    <div class="col-12">
                        <p class="text-primary" style="font-size: 14px;">
                            ※無論您是否在銀行票貼額度已滿或是票信狀況不良，皆不影響您在玉山融實的承辦作業。<br>
                            ※只要您有使用本國支票或持有客票皆可辦理，請您安心諮詢。<br>
                        </p>
                    </div>
                </div>

            </div>
        </div>

        @include('components.services-info-section')


    </div>
@endsection
