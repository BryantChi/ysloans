<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top pt-lg-4 pt-3 pb-2 site-navbar" id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
            <a href="{{ route('index') }}" class="navbar-brand">
                <img class="img-fluid" src="{{asset('assets/images/00-hp/top_logo.svg')}}" alt="Logo">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('about') }}" class="nav-link active d-flex">
                        <div class="text-center">
                            <span class="nav-link-text d-block">關於我們</span>
                            <span class="nav-link-sub-text d-block">About</span>
                        </div>
                    </a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle d-flex" data-bs-toggle="dropdown">
                            <div class="text-center">
                                <span class="nav-link-text d-block">服務項目</span>
                                <span class="nav-link-sub-text d-block">Service</span>
                            </div>
                        </a>
                        <div class="dropdown-menu bg-light rounded-0 m-0 nav-dropdown text-lg-center">
                            <a href="{{ route('car') }}" class="dropdown-item">汽機車借款</a>
                            <a href="{{ route('cheque') }}" class="dropdown-item">支客票貼現</a>
                            <a href="{{ route('valuable') }}" class="dropdown-item">房地融資代辦</a>
                            <a href="{{ route('realestate') }}" class="dropdown-item">黃金/精品/3C產品</a>
                            <a href="{{ route('on-lendding') }}" class="dropdown-item">代償降息專案</a>
                            <a href="{{ route('business') }}" class="dropdown-item">工商企業融資</a>
                        </div>
                    </div>
                    <a href="{{ route('process') }}" class="nav-item nav-link d-flex">
                        <div class="text-center">
                            <span class="nav-link-text d-block">借款流程</span>
                            <span class="nav-link-sub-text d-block">Process</span>
                        </div>
                    </a>
                    <a href="{{ route('news') }}" class="nav-item nav-link d-flex">
                        <div class="text-center">
                            <span class="nav-link-text d-block">最新消息</span>
                            <span class="nav-link-sub-text d-block">News</span>
                        </div>
                    </a>
                    <a href="{{ route('faq') }}" class="nav-item nav-link d-flex">
                        <div class="text-center">
                            <span class="nav-link-text d-block">常見問答</span>
                            <span class="nav-link-sub-text d-block">FAQ</span>
                        </div>
                    </a>
                    <a href="{{ route('map') }}" class="nav-item nav-link d-flex">
                        <div class="text-center">
                            <span class="nav-link-text d-block">交通位置</span>
                            <span class="nav-link-sub-text d-block">Map</span>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
