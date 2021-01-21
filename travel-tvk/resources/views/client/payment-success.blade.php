@extends('client.master')

@push('css')
    <link rel="stylesheet" href="/assets/css/checkout.css">
@endpush

@push('scripts')
@endpush

@section('content')
    <div class="content container">
        <h3>Thanh toán</h3>
        <div class="row">
            <div class="col-sm-12 col-md-6 info-tour pt-4">
                <div class="bar-group">
                    <div class="step">
                        <span>Thông tin khách</span>
                        <div class="progress-group">
                            <div class="circle c-done"></div>
                            <div class="step-item active"></div>
                        </div>
                    </div>
                    <div class="step">
                        <span>Thanh toán</span>
                        <div class="progress-group">
                            <div class="circle c-done"></div>
                            <div class="step-item active"></div>
                        </div>
                    </div>
                    <div class="step">
                        <span>Hoàn thành</span>
                        <div class="progress-group">
                            <div class="circle"></div>
{{--                            <div class="step-item"></div>--}}
                        </div>
                    </div>
                </div>
                <div class="content-tour">
                    <div class="row justify-content-md-center" style="width: 90%;">
                        <div class="col-md-auto pt-5 pb-5">
                            <p style="color: green;">THANH TOÁNH THÀNH CÔNG BẰNG PAYPAL</p>
                        </div>

                    </div>
                    <hr>
                    <div class="row justify-content-between">
                        <a href="#" class="">Quay lại</a>
                        <button type="submit" class="main-color-text" style="background-color: transparent; border: none; cursor: pointer">Tiếp tục</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 tour-right shadow">
                <div class="image-tour">
                    <img src="assets/images/detail-tour.jpeg">
                </div>
                <div class="form-group pl-2 pt-4">
                    <h4>Đà Lạt</h4>
                </div>
                <div class="form-group pl-2 pt-4">
                    Start time
                </div>
                <div class="form-group pl-2">
                    Start time
                </div>
                <div class="form-group pl-2">
                    2 nguoiwfl own
                </div>
                <hr class="pt-4"/>
                <h5>Giá chi tiết</h5>
                <div class="pl-2 pt-4 row justify-content-between">
                    <div class="col-4">
                        <span>Khách sạn</span>
                    </div>
                    <div class="col-4">
                        <span>500.000đ</span>
                    </div>
                </div>
                <div class="pl-2 pt-4 row justify-content-between">
                    <div class="col-4">
                        <span>Dịch vụ</span>
                    </div>
                    <div class="col-4">
                        <span>700.000đ</span>
                    </div>
                </div>
                <div class="pl-2 pt-4 pb-5 row justify-content-between">
                    <div class="col-4">
                        <h3 style="font-weight: bold">Tổng</h3>
                    </div>
                    <div class="col-4">
                        <h3 style="font-weight: bold; color: #f34e3a">1.200.000đ</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
