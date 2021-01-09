@extends('client.master')

@push('css')
    <link rel="stylesheet" href="./assets/css/login.css">
@endpush

@section('content')
    <div class="content container-fluid" >
        <div class="login-form pt-4 pb-5">
            <div class="header-form">
                <a class="back-btn text-decoration-none text-color-black" href="#"><i class="fas fa-chevron-left"></i> Quay về</a>
            </div>
            <div class="content-form text-center">
                <h4 class="font-weight-bold pt-2 pb-2">ĐĂNG NHẬP</h4>
                <form action="#" class="text-left">
                    <div class="form-group pt-1 pb-1">
                        <label for="exampleInputEmail1">Tài khoản email</label>
                        <input type="email" class="form-control input-item" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tài khoản Email của bạn">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group pt-1">
                        <label for="exampleInputPassword1">Mật khẩu</label>
                        <input type="password" class="form-control  input-item" id="exampleInputPassword1" placeholder="******">
                    </div>
                    <a class="text-right text-decoration-none" href="#"><small id="forfotPassword" class="form-text text-color-black">Quên mật khẩu?</small></a>
                    <div class="form-group enter-group-btn text-center pt-4 pb-4">
                        <a class="login-btn" href="#">ĐĂNG NHẬP</a>
                    </div>
                </form>
                <div class="or-group pt-1">
                    <div class="hr-bar text-left"></div>
                    <div class="or-text">HOẶC</div>
                    <div class="hr-bar text-right"></div>
                </div>

                <div class="social-signin text-center pt-4 pb-3">
                    <button class="social-btn">
                        <i class="fab fa-facebook-f"></i>
                        Facebook
                    </button>
                    <button class="social-btn">
                        <i class="fab fa-google"></i>
                        Google
                    </button>
                </div>
                <div class="registration-group pt-4">
                    <span>Bạn chưa có tài khoản ?<a href="#"> Đăng ký</a></span>
                </div>
            </div>

        </div>
    </div>
@endsection
