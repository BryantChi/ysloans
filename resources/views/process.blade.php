@extends('layouts_main.master')

@section('content')
    <div class="main_section" id="main">





        <div class="container-fluid px-0 py-5 m-0 position-relative bg-process">

            <div class="container">
                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12">
                        <div class="pg-section-title wm-content mx-auto text-center">
                            <h3>借款流程</h3>
                            <p class="sub-title">Process</p>
                        </div>
                        <p class="text-center">
                            玉山優質當舖的借款流程簡單、透明且快速，<br>
                            只需<span class="text-danger" style="font-size:23px !important;">4</span>步驟，讓您輕鬆取得資金，解決資金周轉問題！
                        </p>
                    </div>

                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-4">
                    <div class="col-12">
                        <div class="process-item row align-items-center">
                            <div class="col-lg-auto mb-lg-0 mb-3">
                                <div class="process-icon text-center mb-3">
                                    <img src="{{asset('assets/images/03/steps_icon01.png')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-lg-auto position-relative mb-lg-0 mb-3">
                                <div class="process-item-line"></div>
                            </div>
                            <div class="col-lg mb-lg-0 mb-3">
                                <div class="process-content">
                                    <div class="process-content-title d-block d-md-flex mb-3">
                                        <h5 class="me-3 mb-md-0 mb-3 wm-content">STEP 01</h5>
                                        <h5>諮詢/備妥相關資料文件</h5>
                                    </div>
                                    <p class="mb-0">
                                        根據借款需求及方式準備相關證明文件。<br>
                                        玉山專員會詳細告訴您需要準備的資料；也歡迎利用LINE線上諮詢，確認所需文件後再親臨店面會比較節省時間唷！
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 text-center">
                        <img src="images/03/arrow.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-12">
                        <div class="process-item row align-items-center">
                            <div class="col-lg-auto mb-lg-0 mb-3">
                                <div class="process-icon text-center mb-3">
                                    <img src="{{asset('assets/images/03/steps_icon02.png')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-lg-auto position-relative mb-lg-0 mb-3">
                                <div class="process-item-line"></div>
                            </div>
                            <div class="col-lg mb-lg-0 mb-3">
                                <div class="process-content">
                                    <div class="process-content-title d-block d-md-flex mb-3">
                                        <h5 class="me-3 mb-md-0 mb-3 wm-content">STEP 02</h5>
                                        <h5>審核借款額度及利率</h5>
                                    </div>
                                    <p class="mb-0">
                                        玉山專業團隊將對您的抵押品進行詳細鑑價，並根據鑑價結果及您的需求，審核並確定借款額度與利率，<br>
                                        確保給您最公平的估值與最優惠的利息。<br>
                                        快速核貸、息低保密的借款服務就找玉山優質當鋪，高額利低還能彈性還款！
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 text-center">
                        <img src="images/03/arrow.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-12">
                        <div class="process-item row align-items-center">
                            <div class="col-lg-auto mb-lg-0 mb-3">
                                <div class="process-icon text-center mb-3">
                                    <img src="{{asset('assets/images/03/steps_icon03.png')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-lg-auto position-relative mb-lg-0 mb-3">
                                <div class="process-item-line"></div>
                            </div>
                            <div class="col-lg mb-lg-0 mb-3">
                                <div class="process-content">
                                    <div class="process-content-title d-block d-md-flex mb-3">
                                        <h5 class="me-3 mb-md-0 mb-3 wm-content">STEP 03</h5>
                                        <h5>說明利息計算方式及規範</h5>
                                    </div>
                                    <p class="mb-0">
                                        玉山的專業服務人員一定會清楚地告知您借款、還款須知及相關規範，取得您的同意之後，讓您滿意再借！<br>
                                        我們以客為尊，絕對不會強迫您。秉持誠信為您服務，幫您保密低調是玉山對您的支持及承諾。
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 text-center">
                        <img src="images/03/arrow.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-12">
                        <div class="process-item row align-items-center">
                            <div class="col-lg-auto mb-lg-0 mb-3">
                                <div class="process-icon text-center mb-3">
                                    <img src="{{asset('assets/images/03/steps_icon04.png')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-lg-auto position-relative mb-lg-0 mb-3">
                                <div class="process-item-line"></div>
                            </div>
                            <div class="col-lg mb-lg-0 mb-3">
                                <div class="process-content">
                                    <div class="process-content-title d-block d-md-flex mb-3">
                                        <h5 class="me-3 mb-md-0 mb-3 wm-content">STEP 04</h5>
                                        <h5>火速撥款、順利取得資金</h5>
                                    </div>
                                    <p class="mb-0">
                                        審核通過簽訂相關合約條款之後，玉山就會立即進行款項核撥！<br>
                                        高效的服務讓您不再為資金周轉發愁！在協助您的過程中，也讓我們感受到了當鋪產業存在的價值及意義。
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>


            </div>
        </div>

        <!--  -->
        <div class="container-fluid px-0 m-0 position-relative bg-white">

            <div class="row p-0 m-0 g-0">
                <div class="col-lg-5">
                    <picture class="img-fluid wow fadeInUp" data-wow-delay="0.1s">
                        <source srcset="{{asset('assets/images/03/ban_pic480.jpg')}}" media="(max-width: 768px)" type="image/jpg">
                        <img src="{{asset('assets/images/03/ban_pic1024.jpg')}}" class="img-fluid process-ban-img" alt="">
                    </picture>
                </div>
                <div class="col-lg-7 px-lg-5 px-3 py-5">
                    <h5 class="">
                        <span class="text-red" style="font-size:30px;">99%</span>
                        <span class="text-red me-2">超高過件率</span>
                        <span class="text-dark">資金周轉不必捨近求遠，斗六玉山優質當鋪就在您身邊</span>
                    </h5>
                    <p>
                        玉山提供最迅速的資金解決方案，無論您是短期資金周轉，還是遇到緊急財務需求，<br>
                        選擇Google五星好評推薦誠信可靠、政府合法立案的斗六玉山優質當舖，讓您快速取得所需資金。
                    </p>
                    <h5 style="color:#cd934b;">有任何資金需求都可以透過LINE或撥打服務專線聯絡我們！</h5>

                    <div class="d-block d-md-flex align-items-center mt-4">
                        <a href="line://ti/p/ys5334000" class="">
                            <img src="{{asset('assets/images/03/bu_line.svg')}}" class="img-fluid me-3 mb-md-0 mb-2" style="width: 14rem;"
                                alt="">
                        </a>
                        <a href="tel:" class="">
                            <img src="{{asset('assets/images/03/bu_phone.svg')}}" class="img-fluid" style="width: 14rem;" alt="">
                        </a>

                    </div>
                </div>
            </div>


        </div>


    </div>
@endsection
