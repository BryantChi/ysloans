@extends('layouts_main.master')

@section('content')
    <div class="main_section" id="main">



        <div class="container-fluid px-0 py-5 m-0 position-relative bg-car">
            <div class="container">

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12">
                        <div class="pg-section-title wm-content mx-auto text-center">
                            <h3>代償降息專案</h3>
                            <p class="sub-title">ON-LENDDING</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_5icon1.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>額度增加</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_5icon2.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>利息降低</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_5icon3.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>整合貸款及在外負債</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_5icon4.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="services-item-text text-center">
                                <h4>靈活還款選擇</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="services-item-box1">
                            <div class="services-item-icon text-center mb-3">
                                <img src="{{asset('assets/images/02/02_5icon5.png')}}" class="img-fluid" alt="">
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
                            <p>年滿18歲之中華民國國民，有其他融資或當鋪借款皆可辦理</p>
                        </div>
                        <div class="services-notice">
                            <h5>應備文件</h5>
                            <p>建議您可參考以下資訊將應備文件提前準備好，透過LINE或電洽玉山客服專員即可快速審件、火速撥款！</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="services-item-box2">
                            <h6 class="text-center">汽機車代償</h6>
                            <p>
                                1.身分證正本<br>
                                2.第二證件正本（駕照或健保卡）<br>
                                3.行照影本
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="services-item-box2">
                            <h6 class="text-center">房屋土地代償</h6>
                            <p>
                                1.身分證正本<br>
                                2.第二證件正本（駕照或健保卡）<br>
                                3.土地/建物所有權狀正本與影本
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="services-item-box2">
                            <h6 class="text-center">客票代償</h6>
                            <p>
                                1.身分證正本<br>
                                2.第二證件正本（駕照或健保卡）<br>
                                3.持客票需附客戶名片
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="services-item-box2">
                            <h6 class="text-center">企業周轉融資代償</h6>
                            <p>
                                1.負責人身分證正本及名片<br>
                                2.第二證件正本（駕照或健保卡）<br>
                                3.營利事業登記證<br>
                                4.401報表
                            </p>
                        </div>
                    </div>

                    <div class="col-12">
                        <p class="text-primary" style="font-size: 14px;">
                            ※轉貸、增貸額度最高500萬元以內，隨時可借可還，沒有違約金問題。最高可降息 2％，讓您財務自由、資金更加靈活運用。
                        </p>
                    </div>
                </div>

            </div>
        </div>

        @include('components.services-info-section')


    </div>
@endsection
