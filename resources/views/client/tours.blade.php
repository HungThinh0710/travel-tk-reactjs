@extends('client.master')

@push('css')
    <link rel="stylesheet" href="./assets/css/tour.css">
@endpush

@section('content')
    <div class="welcome-title ">
        <div class="img-title">
            <img src="./assets/images/news-title.svg" alt="news title">
        </div>
        <div class="welcome-text text-center">
            <h2>Tour
            </h2>
        </div>
    </div>
    <br>
    <div class="filter-search-group pt-6">
        <span class="border-form">
            <select id="typeTour">
                <option>Du lịch với giá cả phải chăng</option>
                <option>Du lịch với giá cả phải chăng</option>
                <option>Du lịch với giá cả phải chăng</option>
                <option>Du lịch với giá cả phải chăng</option>
                <option>Du lịch với giá cả phải chăng</option>
            </select>
            <div class="text-search">
                <input type="text" name="provine" value="Đà Nẵng" id="">
                <div class="icon">
                    <a href="#" style="text-decoration: none; color: #F34E3A"><i
                            class="fas fa-times"></i></a>
                </div>
            </div>
            <button><i class="fas fa-search"></i> Search </button>

        </span>
    </div>
    <br>
    <div class="main-content container">
        <h3 class="font-weight-bold">Tour Du Lịch</h3>
        <br>
        <div class="row">
            <div class="col-sm-2">
                <div class="nav flex-column nav-pills title-slide-group" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">Miền Trung</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="nav flex-column nav-pills title-slide-group" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                       aria-controls="v-pills-profile" aria-selected="false">Miền Bắc </a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="nav flex-column nav-pills title-slide-group" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                       aria-controls="v-pills-messages" aria-selected="false">Miền Nam</a>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="nav flex-column nav-pills title-slide-group" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                       aria-controls="v-pills-settings" aria-selected="false">CHI PHÍ THẤP</a>
                </div>
            </div>
        </div>
        <br>
        <div class="personal-tour container">
            <div class="row head-row pb-5">
                <h3 class="font-weight-bold">TOUR Tại Đà Nẵng </h3>
            </div>
            <div class="row">
                @foreach($tours as $tour)
                    <div class="col-md-3 col-sm-12">
                        <div class="img-group">
                            <div class="overlay">
                            </div>
                            <a href="{{route('client_get_detail_tour', $tour->id)}}">CHI TIẾT</a>
                            <img src="./assets/images/dac-trung.jfif" alt="">

                        </div>
                        <div class="content-tour">
                            <p>{{$tour->name}}</p>
                            <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>
                            <p>3.000.000đ</p>
                        </div>
                    </div>
                @endforeach
                <div style="align-items: center">
                    {{$tours->links()}}

                </div>
{{--                <div class="col-md-3 col-sm-12">--}}
{{--                    <div class="img-group">--}}
{{--                        <div class="overlay">--}}
{{--                        </div>--}}
{{--                        <a href="#">CHI TIẾT</a>--}}
{{--                        <img src="./assets/images/travel-9.jfif" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="content-tour">--}}
{{--                        <p>Cầu rồng</p>--}}
{{--                        <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>--}}
{{--                        <p>3.000.000đ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-12">--}}
{{--                    <div class="img-group">--}}
{{--                        <div class="overlay">--}}
{{--                        </div>--}}
{{--                        <a href="#">CHI TIẾT</a>--}}
{{--                        <img src="./assets/images/tour-vhlong.jfif" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="content-tour">--}}
{{--                        <p>Cù lao tràm</p>--}}
{{--                        <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>--}}
{{--                        <p>3.000.000đ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-12">--}}
{{--                    <div class="img-group">--}}
{{--                        <div class="overlay">--}}
{{--                        </div>--}}
{{--                        <a href="#">CHI TIẾT</a>--}}
{{--                        <img src="./assets/images/tour-japan.jfif" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="content-tour">--}}
{{--                        <p>Núi thần tài</p>--}}
{{--                        <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>--}}
{{--                        <p>3.000.000đ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
{{--        <br>--}}
{{--        <div class="personal-tour container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3 col-sm-12">--}}
{{--                    <div class="img-group">--}}
{{--                        <div class="overlay">--}}
{{--                        </div>--}}
{{--                        <a href="#">CHI TIẾT</a>--}}
{{--                        <img src="./assets/images/dac-trung.jfif" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="content-tour">--}}
{{--                        <p>Bà Nà</p>--}}
{{--                        <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>--}}
{{--                        <p>3.000.000đ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-12">--}}
{{--                    <div class="img-group">--}}
{{--                        <div class="overlay">--}}
{{--                        </div>--}}
{{--                        <a href="#">CHI TIẾT</a>--}}
{{--                        <img src="./assets/images/tour-ca-nhan.jfif" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="content-tour">--}}
{{--                        <p>Cầu rồng</p>--}}
{{--                        <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>--}}
{{--                        <p>3.000.000đ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-12">--}}
{{--                    <div class="img-group">--}}
{{--                        <div class="overlay">--}}
{{--                        </div>--}}
{{--                        <a href="#">CHI TIẾT</a>--}}
{{--                        <img src="./assets/images/tour-vhlong.jfif" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="content-tour">--}}
{{--                        <p>Cù lao tràm</p>--}}
{{--                        <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>--}}
{{--                        <p>3.000.000đ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-12">--}}
{{--                    <div class="img-group">--}}
{{--                        <div class="overlay">--}}
{{--                        </div>--}}
{{--                        <a href="#">CHI TIẾT</a>--}}
{{--                        <img src="./assets/images/tour-japan.jfif" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="content-tour">--}}
{{--                        <p>Núi thần tài</p>--}}
{{--                        <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>--}}
{{--                        <p>3.000.000đ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="personal-tour container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3 col-sm-12">--}}
{{--                    <div class="img-group">--}}
{{--                        <div class="overlay">--}}
{{--                        </div>--}}
{{--                        <a href="#">CHI TIẾT</a>--}}
{{--                        <img src="./assets/images/dac-trung.jfif" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="content-tour">--}}
{{--                        <p>Bà Nà</p>--}}
{{--                        <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>--}}
{{--                        <p>3.000.000đ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-12">--}}
{{--                    <div class="img-group">--}}
{{--                        <div class="overlay">--}}
{{--                        </div>--}}
{{--                        <a href="#">CHI TIẾT</a>--}}
{{--                        <img src="./assets/images/tour-ca-nhan.jfif" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="content-tour">--}}
{{--                        <p>Cầu rồng</p>--}}
{{--                        <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>--}}
{{--                        <p>3.000.000đ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-12">--}}
{{--                    <div class="img-group">--}}
{{--                        <div class="overlay">--}}
{{--                        </div>--}}
{{--                        <a href="#">CHI TIẾT</a>--}}
{{--                        <img src="./assets/images/tour-vhlong.jfif" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="content-tour">--}}
{{--                        <p>Cù lao tràm</p>--}}
{{--                        <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>--}}
{{--                        <p>3.000.000đ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-12">--}}
{{--                    <div class="img-group">--}}
{{--                        <div class="overlay">--}}
{{--                        </div>--}}
{{--                        <a href="#">CHI TIẾT</a>--}}
{{--                        <img src="./assets/images/tour-japan.jfif" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="content-tour">--}}
{{--                        <p>Núi thần tài</p>--}}
{{--                        <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>--}}
{{--                        <p>3.000.000đ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="personal-tour container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3 col-sm-12">--}}
{{--                    <div class="img-group">--}}
{{--                        <div class="overlay">--}}
{{--                        </div>--}}
{{--                        <a href="#">CHI TIẾT</a>--}}
{{--                        <img src="https://dulichdalat.pro/wp-content/uploads/2016/08/da-lat-lam-dong-3.jpg" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="content-tour">--}}
{{--                        <p>Bà Nà</p>--}}
{{--                        <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>--}}
{{--                        <p>3.000.000đ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-12">--}}
{{--                    <div class="img-group">--}}
{{--                        <div class="overlay">--}}
{{--                        </div>--}}
{{--                        <a href="#">CHI TIẾT</a>--}}
{{--                        <img src="./assets/images/tour-ca-nhan.jfif" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="content-tour">--}}
{{--                        <p>Cầu rồng</p>--}}
{{--                        <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>--}}
{{--                        <p>3.000.000đ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-12">--}}
{{--                    <div class="img-group">--}}
{{--                        <div class="overlay">--}}
{{--                        </div>--}}
{{--                        <a href="#">CHI TIẾT</a>--}}
{{--                        <img src="./assets/images/tour-vhlong.jfif" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="content-tour">--}}
{{--                        <p>Cù lao tràm</p>--}}
{{--                        <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>--}}
{{--                        <p>3.000.000đ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-12">--}}
{{--                    <div class="img-group">--}}
{{--                        <div class="overlay">--}}
{{--                        </div>--}}
{{--                        <a href="#">CHI TIẾT</a>--}}
{{--                        <img src="./assets/images/tour-japan.jfif" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="content-tour">--}}
{{--                        <p>Núi thần tài</p>--}}
{{--                        <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>--}}
{{--                        <p>3.000.000đ</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


    </div>
@endsection
