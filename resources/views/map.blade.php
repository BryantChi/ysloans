@extends('layouts_main.master')

@section('content')
    <div class="main_section" id="main">




        <div class="container-fluid px-0 pt-5 m-0 bg-map">

            <div class="container">
                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12">
                        <div class="pg-section-title wm-content mx-auto text-center">
                            <h3>交通位置</h3>
                            <p class="sub-title">MAP</p>
                        </div>
                        <p class="text-center">
                            無論是黃金、名錶還是汽機車，斗六玉山優質當鋪都能為您提供靈活的借款選擇<br>
                            歡迎直接來店洽詢，我們的專業團隊將竭誠為您服務，讓您的借貸需求即刻解決。
                        </p>
                    </div>



                </div>



                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-4">

                    <div class="col-12 mb-5 bg-white px-0" style="box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.2);">
                        <div class="row g-0">
                            <div class="col-lg-5 d-flex justify-content-center align-items-center">
                                <div class="map-info p-4">
                                    <img src="{{asset('assets/images/06/logo.svg')}}" class="img-fluid mb-2" alt="">
                                    <div>
                                        <p>
                                            服務專線：05-5334000 <br>
                                            店面住址：雲林縣斗六市明德北路二段419號 <br>
                                            LINE ID : ys5334000
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="map-box">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.948023723873!2d120.53096787533485!3d23.71355007869561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346ec826073db379%3A0x8264fe7fc885c499!2zNjQw6Zuy5p6X57ij5paX5YWt5biC5piO5b635YyX6Lev5LqM5q61NDE56Jmf!5e0!3m2!1szh-TW!2stw!4v1736248067886!5m2!1szh-TW!2stw"
                                        allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row justify-content-center align-items-center mx-lg-auto mx-3 mt-4">

                <div class="col-12 mb-0 px-0 position-relative">

                    <div class="container px-2">
                        <div class="row position-relative mb-5 align-items-end" style="z-index: 2;">
                            <div class="col-lg-7 mb-lg-0 mb-4">
                                <img src="{{asset('assets/images/06/06pic1.jpg')}}" class="img-fluid map-pic-img1" alt="">
                            </div>
                            <div class="col-lg-5 d-block">
                                <div class="contact-info py-md-3 mb-lg-3 mb-4">
                                    <h5 class="text-primary">在地經營多年，累積許多客戶的好口碑</h5>
                                    <p>實體店面經營、高額低利，全程保密您的隱私，<br>有任何資金需求，斗六玉山優質當鋪都能提供即時協助，<br>政府立案合法安全，讓您安心、放心、迅速取得資金！</p>
                                    <img src="{{asset('assets/images/06/bu_line.svg')}}" class="img-fluid" alt="">
                                </div>
                                <img src="{{asset('assets/images/06/06pic2.jpg')}}" class="img-fluid map-pic-img2 position-relative mt-auto"
                                    alt="">
                            </div>


                        </div>
                    </div>

                    <div class="position-absolute bottom-0 start-50 translate-middle-x px-0" style="width: 100vw;">
                        <picture>
                            <source srcset="{{asset('assets/images/06/06bg750.jpg')}}" media="(max-width: 768px)">
                            <source srcset="{{asset('assets/images/06/06bg1080.jpg')}}" media="(max-width: 1080px)">
                            <source srcset="{{asset('assets/images/06/06bg1024.jpg')}}" media="(max-width: 1024px)">
                            <source srcset="{{asset('assets/images/06/06bg1280.jpg')}}" media="(max-width: 1280px)">
                            <source srcset="{{asset('assets/images/06/06bg1440.jpg')}}" media="(max-width: 1440px)">
                            <img src="{{asset('assets/images/06/06bg1920.jpg')}}" class="img-fluid mapbottombg-img" alt="">
                        </picture>

                    </div>

                </div>

            </div>



        </div>

    </div>
@endsection
