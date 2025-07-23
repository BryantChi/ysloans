@extends('layouts_main.master')

@section('content')
    <div class="main_section" id="main">





        <div class="container-fluid px-0 py-5 m-0 position-relative bg-faq">

            <div class="container">
                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12">
                        <div class="pg-section-title wm-content mx-auto text-center">
                            <h3>常見問答</h3>
                            <p class="sub-title">FAQ</p>
                        </div>
                        <p class="text-center">
                            有借款的需求，但不清楚該怎麼辦理？<br>
                            別擔心！斗六玉山優質當鋪為您整理了借款過程中常見的問題與解答，幫助您輕鬆了解服務細節。
                        </p>
                    </div>



                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-4">

                    <div class="col-lg-12 mb-5">
                        <div class="faq-header row align-items-center">
                            <div class="col-lg-3 text-center mb-lg-0 mb-3">
                                <img src="{{ asset('assets/images/05/05ban_pic.png') }}" class="img-fluid w-m-75"
                                    alt="">
                            </div>
                            <div class="col-lg-9">
                                <div class="faq-header-content">
                                    <h5 class="text-dark d-md-flex align-items-center">
                                        <img src="images/05/05icon_line.png" class="img-fluid " alt="">
                                        <span class="ms-2 text-line">用LINE專人服務</span>，線上免費諮詢超方便！
                                    </h5>
                                    <div class="line my-3"></div>
                                    <p>
                                        手機點選LINE免費諮詢按鈕或是掃描玉山優質當舖的LINE QRCODE，也可以輸入官方帳號（ID）<span
                                            class="text-line">ys5334000</span>，<br>
                                        即可加入好友詢問！<br>
                                        無論您有任何借款需求或疑問，斗六玉山優質當鋪的專業客服團隊都能透過LINE為您提供即時協助！加入好友，您就可以隨時隨地與我們的客服人員聯繫，了解借款流程、諮詢利率或解決各種資金周轉問題。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span style="color: #e75303;">Q1.</span>什麼是典當服務？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    典當服務是指將您的物品作為抵押，換取短期資金。當您償還借款後，抵押物品將退還給您。這種服務適合需要快速取得資金的客戶，無需經過繁瑣的審核流程。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span style="color: #e75303;">Q2.</span>玉山優質當鋪提供哪些典當服務？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    我們接受多種物品進行典當，包括黃金、珠寶、名錶、3C產品、汽機車及不動產抵押。具體評估依物品類型而定，並由專業團隊提供公平的市場估價。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span style="color: #e75303;">Q3.</span>如何確保我的物品在當鋪中的安全？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    我們有嚴格的保管制度，所有典當物品都存放在高度安全的設施中，並配備先進的保全系統，確保物品的安全無虞。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span style="color: #e75303;">Q4.</span>典當後我什麼時候可以取回物品？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    當您償還借款及相關費用後，便可立即取回您的典當物品。我們提供靈活的還款期限，讓您能根據自身情況安排償還計畫。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span style="color: #e75303;">Q5.</span>利息怎麼計算？會有額外費用嗎？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    我們的利息以單利計算，並且不會收取額外的手續費。具體利率依據借款金額與借款期限不同，詳情可於典當時由專員為您說明。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span style="color: #e75303;">Q6.</span>如果我無法按時還款會怎麼樣？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    若您無法在約定的期限內償還借款，請儘早與我們聯繫，我們將根據您的情況協助制定延長還款期限的方案。如果最終無法還款，您的抵押物將會根據法律程序進行處理。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span style="color: #e75303;">Q7.</span>玉山當鋪的借款手續繁瑣嗎？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    不繁瑣！相比傳統金融機構，我們的申辦流程更為簡單快速，只需提供相關文件和抵押物品，我們的專業團隊將即時為您辦理。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span style="color: #e75303;">Q8.</span>是否需要信用檢查或提供收入證明？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    不需要。在典當過程中，我們不會要求信用檢查或收入證明，只需提供合法的抵押物品即可。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span style="color: #e75303;">Q9.</span>玉山當鋪的服務對象有哪些？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    我們服務的對象廣泛，無論是個人還是企業，無論您是短期資金周轉還是長期融資需求，玉山當鋪都能為您提供合適的解決方案。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3 px-0">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span style="color: #e75303;">Q10.</span>如何聯繫玉山優質當鋪？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    您可以直接來訪我們的門市或透過電話、線上客服聯繫我們。我們的專業團隊隨時準備為您提供幫助！
                                </p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>
@endsection

@push('page_scripts')
    <script>
        $(function() {
            $.each($('.faq-item-box'), function(i, v) {
                $(this).find('.faq-item-q').on('click', function() {
                    // 關閉所有其他的 .faq-item-a 和重設箭頭狀態
                    $('.faq-item-box').not($(this).parent()).find('.faq-item-a').slideUp();
                    $('.faq-item-box').not($(this).parent()).find('.faq-item-arrow-p').removeClass(
                        'd-none');
                    $('.faq-item-box').not($(this).parent()).find('.faq-item-arrow-d').addClass(
                        'd-none');

                    // 切換當前項目的狀態
                    $(this).parent().find('.faq-item-a').slideToggle();
                    $(this).find('.faq-item-arrow-p').toggleClass('d-none');
                    $(this).find('.faq-item-arrow-d').toggleClass('d-none');
                })
            })
        })
    </script>
@endpush
