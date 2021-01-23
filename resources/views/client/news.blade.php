@extends('client.master')

@push('css')
<link rel="stylesheet" href="./assets/css/news.css">
@endpush

@section('content')
<div class="welcome-title ">
    <div class="img-title">
        <img src="./assets/images/news-title.svg" alt="news title">
    </div>
    <div class="welcome-text text-center">
        <h2>TIN TỨC
        </h2>
    </div>
</div>

<div class="main-content container">
    <h2 class="news-title-content font-weight-bold">Tin tức du lịch</h2>
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <div class="main-news">
                <img src="./assets/images/main-news.jfif" alt="tin tuc moi nhat">
                <div class="black-overlay"></div>
                <div class="content-main-news">
                    <p>Những nơi đẹp nhất bên bờ sông Hàn của Thành Phố Đà Nẵng khi về đêm</p>
                    <a class="btn btn-main-travel" href="#" >CHI TIẾT BÀI VIẾT</a>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-12">
            <div class="news-right-bar container">
                <h5 class="font-weight-bold">Tin tức nổi bật</h5>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="news-preview-img">
                            <img src="./assets/images/news-right-menu.jfif" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="row justify-content-between news-box-info">
                            <div class="col-6 col-md-6 col-sm-4"><p class="news-title-country">VIỆT NAM</p></div>
                            <div class="col-6 col-md-6 col-sm-4 text-right"><p class="news-title-date">08/12/2020</p></div>
                        </div>
                        <p >
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus interdum.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="news-preview-img">
                            <img src="./assets/images/news-right-menu.jfif" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="row justify-content-between news-box-info">
                            <div class="col-6 col-md-6 col-sm-4"><p class="news-title-country">VIỆT NAM</p></div>
                            <div class="col-6 col-md-6 col-sm-4 text-right"><p class="news-title-date">08/12/2020</p></div>
                        </div>
                        <p >
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus interdum.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="news-preview-img">
                            <img src="./assets/images/news-right-menu.jfif" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="row justify-content-between news-box-info">
                            <div class="col-6 col-md-6 col-sm-4"><p class="news-title-country">VIỆT NAM</p></div>
                            <div class="col-6 col-md-6 col-sm-4 text-right"><p class="news-title-date">08/12/2020</p></div>
                        </div>
                        <p >
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus interdum.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="news-preview-img">
                            <img src="./assets/images/news-right-menu.jfif" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="row justify-content-between news-box-info">
                            <div class="col-6 col-md-6 col-sm-4"><p class="news-title-country">VIỆT NAM</p></div>
                            <div class="col-6 col-md-6 col-sm-4 text-right"><p class="news-title-date">08/12/2020</p></div>
                        </div>
                        <p >
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus interdum.
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center" >
                    <a class="btn btn-main-travel font-weight-bold " style="display: block;" href="#" >Xem thêm</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
