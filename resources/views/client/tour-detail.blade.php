@extends('client.master')

@push('css')
    <link rel="stylesheet" href="/assets/css/tour-detail.css">
@endpush

@section('content')
    <div class="main-content container">
        <div class="card">
            <h1 class="font-weight-bold">Chi tiết tour</h1>
            <br>
            <form class="container-fluid" action="{{route('show_checkout')}}" method="GET">
                <input name="tour-id" value="{{$tour->id}}" hidden/>
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="https://tour.dulichvietnam.com.vn/uploads/tour/1554722331_du-lich-da%20-lat-ngam-hoa-3.jpg" alt="">
                            </div>
                            <div class="tab-pane" id="pic-2"><img src="https://luhanhvietnam.com.vn/tour-du-lich/vnt_upload/tour/11_2019/thumbs/780_crop_quang_truong_lam_vien.jpg" alt="">
                            </div>
                            <div class="tab-pane" id="pic-3"><img src="https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2018/01/kinh-nghiem-du-lich-da-lat-ban-can-luu-lai-1.png" alt="">
                            </div>
                            <div class="tab-pane" id="pic-4"><img src="https://vcdn1-dulich.vnecdn.net/2019/05/23/12-1558593963.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=sEbfKs9N6CgwUja6gayIJA" alt="">
                            </div>
                            <div class="tab-pane" id="pic-5"><img src="https://dulichdalat.pro/wp-content/uploads/2016/08/da-lat-lam-dong-3.jpg" alt="">
                            </div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="https://tour.dulichvietnam.com.vn/uploads/tour/1554722331_du-lich-da%20-lat-ngam-hoa-3.jpg" alt=""></a>
                            </li>
                            <li><a data-target="#pic-2" data-toggle="tab"><img src="https://luhanhvietnam.com.vn/tour-du-lich/vnt_upload/tour/11_2019/thumbs/780_crop_quang_truong_lam_vien.jpg" alt=""></a>
                            </li>
                            <li><a data-target="#pic-3" data-toggle="tab"><img src="https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2018/01/kinh-nghiem-du-lich-da-lat-ban-can-luu-lai-1.png" alt=""></a>
                            </li>
                            <li><a data-target="#pic-4" data-toggle="tab"><img src="https://vcdn1-dulich.vnecdn.net/2019/05/23/12-1558593963.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=sEbfKs9N6CgwUja6gayIJA" alt=""></a>
                            </li>
                            <li><a data-target="#pic-5" data-toggle="tab"><img src="https://dulichdalat.pro/wp-content/uploads/2016/08/da-lat-lam-dong-3.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <h6 class="">Miền Trung</h6>
                        <h3 class="product-title">Tour Đà Lạt </h3>
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div> <span class="review-no">123 đánh giá</span>
                        </div>
                        <p class="product-title" >Loại tour</p>
                        <div class="form-group row ">
                            <div class="col-10">
                                <select class="form-control" id="exampleSelect1">
                                    <option selected>4 ngày 3 đêm</option>
                                    <option>3 ngày 2 đêm</option>
                                    <option>2 ngày 1 đêm</option>
                                </select>
                            </div>
                        </div>
                        <p class="product-title">Ngày khởi hành </p>
                        <div class="form-group row">
                            <div class="col-10">
                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                            </div>
                        </div>
                        <p class="product-title" >Chọn loại phòng khách sạn</p>
                        <div class="form-group row ">
                            <div class="col-10">
                                <select class="form-control" id="exampleSelect1">
                                    <option selected>Phòng đơn 1 giường</option>
                                    <option>Phòng luxury</option>
                                    <option>Phòng pesidient</option>
                                </select>
                            </div>
                        </div>
                        <h4 class="price">Giá : 5.000.000 đ</h4>
                        <p class="vote"><strong>91%</strong> of người đặt yêu thích này <strong>(87 bình chọn)</strong>
                        </p>
                        <div class="form-group">
                            <button class="btn btn-default" type="submit" style="background-color: #F34E3A; width: 82%; color: white">Đặt tour</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
