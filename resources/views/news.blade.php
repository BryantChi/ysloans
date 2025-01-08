@extends('layouts_main.master')

@section('content')
    <div class="main_section" id="main">





        <div class="container-fluid px-0 py-5 m-0 position-relative bg-news">

            <div class="container">
                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-lg-3 mt-5">
                    <div class="col-12">
                        <div class="pg-section-title wm-content mx-auto text-center">
                            <h3>最新消息</h3>
                            <p class="sub-title">News</p>
                        </div>
                        <p class="text-center">
                            玉山優質當鋪的專業團隊隨時為您提供諮詢，協助您快速取得資金，讓財務周轉更簡單，<br>合法立案遵循法規、用心提供給您更多借款新知。
                        </p>
                    </div>



                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-4">
                    <div class="col-12 d-flex justify-content-end">
                        <p class="text-primary" style="font-size: 14px;">共有{{ count($newsInfos) }}則最新消息</p>
                    </div>
                    @foreach ($newsInfos as $news)
                        <div class="col-12 mb-4">
                            <div class="news-item row align-items-center g-0">
                                <div class="col-lg-3">
                                    <img src="{{ env('APP_URL', 'http://ysloans.tw') . '/uploads/' . $news->cover_front_image}}" class="img-fluid news-img" alt="">
                                </div>
                                <div class="col-lg-9">
                                    <div class="news-content">
                                        <h6 class="news-title mb-2">{{ $news->title }}</h6>


                                        @php
                                            $content = preg_replace('/<img[^>]*>/i', '', $news->content);
                                        @endphp
                                        <div class="multiline-ellipsis-2">
                                            {!! $content !!}
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <a href="{{ route('news.details', [$news->id]) }}"
                                                class="btn-outline-main py-1 px-3 wm-content mt-3 mb-3 ms-auto">觀看詳情 +</a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>

                <div class="overflow-auto mb-3">
                    {{ $newsInfos->onEachSide(3)->links('layouts_main.custom-pagination') }}
                </div>


            </div>
        </div>




    </div>
@endsection
