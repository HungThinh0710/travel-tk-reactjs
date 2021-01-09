@extends('client.master')

@push('css')
    <link rel="stylesheet" href="./assets/css/index.css">
@endpush
@section('content')
<div class="content">
    <div class="heading">
        <div class="img-background">
            <div class="overlay"></div>
            <div class="text-in-bg">
                <h1 class="font-weigth-bold pt-5 pb-3">Let’s Go Travelling</h1>
                <h6 class="pb-3">Khởi nguồn từ một công ty start-up muốn mang đến cho mọi người dịch vụ cũng như
                    trải nghiệm du lịch khám phá tuyệt vời nhất</h6>
                <div class="filter-search-group pt-5">
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
            </div>
        </div>
    </div>
    <div class="container-fluid recommend-two-row">
        <div class="row">
            <div class="col-6 left-side text-center">
                <h6>Địa điểm ?</h6>
                <div>
                    <h3>Hôm nay bạn muốn đi đâu ?</h3>
                </div>
            </div>
            <div class="col-6 right-side text-center">
                <h6>Đăng ký tài khoản miễn phí</h6>
                <h3>Lập kế hoạch du lịch với TVK Travel</h3>

            </div>
        </div>
    </div>
    <div class="diem-den container pt-5">
        <div class="row head-row pb-5">
            <h3 class="font-weight-bold">ĐIỂM ĐẾN</h3>
            <a href="#" class="text-decoration-none main-color-text hover-bold-main"> Xem tất cả <span
                    class="pl-2"></span> <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
        <div class="row slide">
            <div class="col-sm-2 col-md-2">
                <div class="nav flex-column nav-pills title-slide-group" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">TẤT CẢ</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                       aria-controls="v-pills-profile" aria-selected="false">PHỔ BIẾN</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                       aria-controls="v-pills-messages" aria-selected="false">ĐẶC SẮC</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                       aria-controls="v-pills-settings" aria-selected="false">CHI PHÍ THẤP</a>
                </div>
            </div>
            <div class="col-sm-10 col-md-10">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                         aria-labelledby="v-pills-home-tab">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner slide-group">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="./assets/images/heading-home.jfif"
                                         alt="First slide"> </img>
                                    <div class="overlay-slide"></div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2 class="font-weight-bold main-color-text">VIỆT NAM</h2>
                                        <p>MUCANGCHAI</p>
                                        <a href="#" class="btn btn-detail-slide mt-5 mb-2">CHI TIẾT</a>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./assets/images/heading-home.jfif"
                                         alt="Second slide">
                                    <div class="overlay-slide"></div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2 class="font-weight-bold main-color-text">VIỆT NAM</h2>
                                        <p>MUCANGCHAI</p>
                                        <a href="#" class="btn btn-detail-slide mt-5 mb-2">CHI TIẾT</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./assets/images/heading-home.jfif"
                                         alt="Third slide">
                                    <div class="overlay-slide"></div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2 class="font-weight-bold main-color-text">VIỆT NAM</h2>
                                        <p>MUCANGCHAI</p>
                                        <a href="#" class="btn btn-detail-slide mt-5 mb-2">CHI TIẾT</a>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                         aria-labelledby="v-pills-profile-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                         aria-labelledby="v-pills-messages-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                         aria-labelledby="v-pills-settings-tab">...</div>
                </div>
            </div>


        </div>
    </div>

    <div class="cam-hung-du-lich container-fluid mt-5 mb-5">
        <div class="head-cam-hung text-center">
            <h3>CẢM HỨNG DU LỊCH</h3>
        </div>
        <div class="container pt-4">
            <div class="row">
                <div class="col-3 text-center item-cam-hung">
                    <img src="./assets/images/phieu-luu.svg" alt="">
                    <p class="pt-2">Phiêu lưu</p>
                </div>
                <div class="col-3 text-center item-cam-hung">
                    <img src="./assets/images/van-hoa.svg" alt="">
                    <p class="pt-2">Văn Hoá & Nghệ thuật</p>
                </div>
                <div class="col-3 text-center item-cam-hung">
                    <img src="./assets/images/mon-ngon.svg" alt="">
                    <p class="pt-2">Món ngon</p>
                </div>
                <div class="col-3 text-center item-cam-hung">
                    <img src="./assets/images/giadinh.svg" alt="">
                    <p class="pt-2">Gia đình</p>
                </div>
            </div>

        </div>
    </div>

    <div class="dac-trung container pt-5 pb-5">
        <h3 class="font-weight-bold">ĐẶC TRƯNG</h3>
        <div class="row pt-3">
            <div class="col-sm-12 col-md-6">
                <h5>Đà lạt phố đêm</h5>
                <div class="content-dac-trung pt-3 text-justify">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor scelerisque enim ipsum, faucibus at arcu ullamcorper. Arcu convallis eu, ultricies sagittis aliquet. liquet volutpat adipiscing est sit. </p>
                    <p>Risus et, nulla nisl, eget sollicitudin. Hendr dignissim ligula viverra aliquam, sit pellentesque. Feugiat ante aliquet volutpat adipis cing est sit. Risus et, nulla nisl, eget sollicitudin. Hendrerit dignissim ligula viverra aliquam, sit pellentesque.</p>
                    <p>Feugiat ante aliquet volutpat adipiscing est sit. Risus et, nulla nisl, eget sollicitudin. Hendrerit dignissim ligula viverra aliquam, sit pellentesque. Hendrerit dignissim ligula viverra aliquam, sit pellentesque.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 right-side">
                <img src="./assets/images/dac-trung.jfif" alt="">
            </div>
        </div>
    </div>

    <div class="personal-tour container">
        <div class="row head-row pb-5">
            <h3 class="font-weight-bold">TOUR CÁ NHÂN</h3>
            <a href="#" class="text-decoration-none main-color-text hover-bold-main"> Xem tất cả <span
                    class="pl-2"></span> <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="img-group">
                    <div class="overlay">
                    </div>
                    <a href="#">CHI TIẾT</a>
                    <img src="./assets/images/dac-trung.jfif" alt="">

                </div>
                <div class="content-tour">
                    <p>Đà Lạt</p>
                    <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>
                    <p>3.000.000đ</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="img-group">
                    <div class="overlay">
                    </div>
                    <a href="#">CHI TIẾT</a>
                    <img src="./assets/images/tour-ca-nhan.jfif" alt="">

                </div>
                <div class="content-tour">
                    <p>Đà Nẵng</p>
                    <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>
                    <p>3.000.000đ</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="img-group">
                    <div class="overlay">
                    </div>
                    <a href="#">CHI TIẾT</a>
                    <img src="./assets/images/tour-vhlong.jfif" alt="">

                </div>
                <div class="content-tour">
                    <p>Vịnh Hạ Long</p>
                    <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>
                    <p>3.000.000đ</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="img-group">
                    <div class="overlay">
                    </div>
                    <a href="#">CHI TIẾT</a>
                    <img src="./assets/images/tour-japan.jfif" alt="">

                </div>
                <div class="content-tour">
                    <p>Nhật Bản</p>
                    <p><span style="color: #FFC107"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></p>
                    <p>3.000.000đ</p>
                </div>
            </div>
        </div>
    </div>

    <div class="news-travel pt-5 pb-5">
        <div class="container">
            <div class="row head-row pb-5">
                <h3 class="font-weight-bold">TIN TỨC DU LỊCH</h3>
                <a href="#" class="text-decoration-none main-color-text hover-bold-main"> Xem tất cả <span
                        class="pl-2"></span> <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="content-news">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="head-img">
                            <img src="./assets/images/news-travel_1.jfif" alt="">
                        </div>
                        <div class="title-heading text-justify">
                            <a class="text-decoration-none text-color-black" href="#">
                                <p><span class="main-color-text">Khám Phá</span> <span class="pl-5">11/12/2020</span></p>
                                <h6>Exploring close to home could improve your mood, new research finds</h6>

                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="head-img">
                            <img src="./assets/images/travel-news-2.jfif" alt="">
                        </div>
                        <div class="title-heading text-justify">
                            <a class="text-decoration-none text-color-black" href="#">
                                <p><span class="main-color-text">Khám Phá</span> <span class="pl-5">11/12/2020</span></p>
                                <h6>Exploring close to home could improve your mood, new research finds</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 small-news">
                        <div class="container">
                            <div class="row small-news">
                                <div class="col-sm-12 col-md-8">
                                    <div class="head-small-content ">
                                        <a href="#" class="text-decoration-none text-color-black">
                                            <p><span class="main-color-text">Khám Phá</span> <span class="pl-5">11/12/2020</span></p>
                                            <h6>Exploring close to home could improve your mood, new research finds</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="img-small">
                                        <img src="./assets/images/tour-ca-nhan.jfif" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 small-news">
                        <div class="container">
                            <div class="row small-news">
                                <div class="col-sm-12 col-md-8">
                                    <div class="head-small-content ">
                                        <a href="#" class="text-decoration-none text-color-black">
                                            <p><span class="main-color-text">Khám Phá</span> <span class="pl-5">11/12/2020</span></p>
                                            <h6>Exploring close to home could improve your mood, new research finds</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="img-small">
                                        <img src="./assets/images/tour-ca-nhan.jfif" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 small-news">
                        <div class="container">
                            <div class="row small-news">
                                <div class="col-sm-12 col-md-8">
                                    <div class="head-small-content ">
                                        <a href="#" class="text-decoration-none text-color-black">
                                            <p><span class="main-color-text">Khám Phá</span> <span class="pl-5">11/12/2020</span></p>
                                            <h6>Exploring close to home could improve your mood, new research finds</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="img-small">
                                        <img src="./assets/images/tour-ca-nhan.jfif" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 small-news">
                        <div class="container">
                            <div class="row small-news">
                                <div class="col-sm-12 col-md-8">
                                    <div class="head-small-content ">
                                        <a href="#" class="text-decoration-none text-color-black">
                                            <p><span class="main-color-text">Khám Phá</span> <span class="pl-5">11/12/2020</span></p>
                                            <h6>Exploring close to home could improve your mood, new research finds</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="img-small">
                                        <img src="./assets/images/tour-ca-nhan.jfif" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="follow-form container-fluid">
        <div class="row text-center">
            <div class="container conn">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h4>Đăng ký để theo dõi chúng tôi</h4>
                        <p style="font-size:13px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum facere vitae, eaque illo culpa quo voluptatibus autem</p>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-subscribe pt-4">
                            <input type="text" name="email" placeholder="Your Email"/>
                            <button class="enter-subscribe">Đăng ký</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
