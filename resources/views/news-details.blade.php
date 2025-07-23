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
                    </div>

                </div>

                <div class="row justify-content-center align-items-center mx-lg-auto mx-2 mt-4">
                    <div class="col-12 mb-2">
                        <div class="news-inner-title">
                            <h5 class="text-white mb-0">{{ $newsInfo->title }}</h5>
                        </div>
                    </div>

                    <div class="col-12 text-end mb-3">
                        <p class="news-inner-date" style="font-size: 12px;">
                            {{ \Carbon\Carbon::parse($newsInfo->created_at)->format('Y-m-d') }}
                        </p>
                    </div>

                    <div class="col-12">
                        <div class="news-inner-content">
                            {{-- <img src="{{ asset('assets/images/04/news_inside_pic.jpg')}}" class="img-fluid mb-3" alt=""> --}}

                            {!! $newsInfo->content !!}
                        </div>
                    </div>

                </div>


            </div>
        </div>


    </div>
@endsection
