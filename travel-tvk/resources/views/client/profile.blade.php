@extends('client.master')

@push('css')
    <link rel="stylesheet" href="./assets/css/profile.css">
@endpush

@section('content')
<div class="content container">
    <div class="row">
        <div class="col-12 pt-5 pb-5">
            <h2>Hồ sơ cá nhân</h2>
        </div>
    </div>
    <div class="row profile-group pb-5">
        <div class="col-sm-12 col-md-2">
            <div class="image-profile">
                <img src="./assets/images/profile.jfif" alt="">
            </div>
        </div>
        <div class="col-sm-12 col-md-10">
            <div class="profile-info">
                <div class="first-row">
                    <div class="username font-weight-bold pb-3">
                        {{Auth::user()->name}}
                    </div>
                    <div class="editable"></div>
                    <a href="#" class="text-decoration-none text-color-black"><i class="fas fa-pencil-alt"></i></a>
                </div>
            </div>
            <div class="description pb-3">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum distinctio natus blanditiis debitis
                corrupti. Possimus magnam perspiciatis rerum eum totam, voluptate amet quisquam dolorem id saepe aut
                culpa quasi nam!
            </div>
        </div>
    </div>
    <div class="form-profile">
        <nav>
            <div class="nav nav-tabs tab-group text-center" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                   aria-controls="nav-home" aria-selected="true">HỒ SƠ CỦA TÔI</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                   aria-controls="nav-profile" aria-selected="false">TOUR CỦA TÔI</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                   aria-controls="nav-contact" aria-selected="false">THỐNG KÊ</a>
            </div>
        </nav>
        <div class="container">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row pt-4 pb-2 text-right">
                        <div class="col-12">
                            <button class="edit-profile"><i class="fas fa-pencil-alt"></i> Chỉnh sửa</button>
                        </div>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="pb-3">Liên hệ cá nhân</h5>

                                <div class="form-group">
                                    <small id="emailHelp" class="form-text text-muted">Tài khoản Email</small>
                                    <input type="text" readonly class="form-control-plaintext" disabled="true" id="staticEmail"
                                           value="email@example.com">
                                </div>
                                <div class="form-group">
                                    <small id="emailHelp" class="form-text text-muted">Số điện thoại</small>
                                    <input type="text" readonly class="form-control-plaintext" disabled="true" id="staticEmail"
                                           value="+4382992349234">
                                </div>
                                <div class="form-group">
                                    <small id="emailHelp" class="form-text text-muted">Địa chỉ</small>
                                    <input type="text" readonly class="form-control-plaintext" disabled="true" id="staticEmail"
                                           value="2344 Ontario St, St Catharines Ontario L2N 1S8">
                                </div>


                            </div>
                            <div class="col-md-4">
                                <h5 class="pb-3">Mật khẩu</h5>
                                <small id="emailHelp" class="form-text text-muted">Bạn đã đổi mật khẩu cách đây 3 tháng</small>
                            </div>
                            <div class="col-md-4">
                                <h5 class="pb-3">Thông tin cá nhân</h5>
                                <div class="form-group">
                                    <small id="emailHelp" class="form-text text-muted">Sở thích</small>
                                    <input type="text" readonly class="form-control-plaintext" disabled="true" id="staticEmail"
                                           value="Nghe nhạc, du lịch">
                                </div>
                                <div class="form-group">
                                    <small id="emailHelp" class="form-text text-muted">Thể loại nhạc yêu thích</small>
                                    <input type="text" readonly class="form-control-plaintext" disabled="true" id="staticEmail"
                                           value="Jazz">
                                </div>
                                <div class="form-group">
                                    <small id="emailHelp" class="form-text text-muted">Món ăn ưa thích</small>
                                    <input type="text" readonly class="form-control-plaintext" disabled="true" id="staticEmail"
                                           value="Beefsteak">
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="content-in-table pt-3 pb-5">
                    <table class="table table-responsive-sm history-tour">
                        <thead class="thead-light">
                        <tr class="title-row
                          ">
                            <th scope="col">ID</th>
                            <th scope="col">Tour code</th>
                            <th scope="col">Tên Tour</th>
                            <th scope="col">Ngày khởi hành</th>
                            <th scope="col">Điểm đến</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Giá</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>HL3468</td>
                            <td>Hạ Long-2N3D</td>
                            <td>17/11/2020</td>
                            <td>Vịnh Hạ Long</td>
                            <td><span class="badge badge-success">HOÀN THÀNH</span></td>
                            <td>345.000đ</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>HL3468</td>
                            <td>Hạ Long-2N3D</td>
                            <td>17/11/2020</td>
                            <td>Vịnh Hạ Long</td>
                            <td><span class="badge badge-danger">ĐÃ HUỶ</span></td>
                            <td>345.000đ</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>HL3468</td>
                            <td>Hạ Long-2N3D</td>
                            <td>17/11/2020</td>
                            <td>Vịnh Hạ Long</td>
                            <td><span class="badge badge-warning">ĐANG CHỜ</span></td>
                            <td>345.000đ</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>HL3468</td>
                            <td>Hạ Long-2N3D</td>
                            <td>17/11/2020</td>
                            <td>Vịnh Hạ Long</td>
                            <td><span class="badge badge-success">HOÀN THÀNH</span></td>
                            <td>345.000đ</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade pt-4 pb-5" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <table class="table table-bordered table-responsive-sm pt-4">
                    <thead >
                    <tr>
                        <th scope="col">Số tour đã đặt</th>
                        <th scope="col">Số Tour đã huỷ</th>
                        <th scope="col">Số Tour đã thanh toán</th>
                        <th scope="col">Tổng chi phí thanh toán</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">30</th>
                        <td>10</td>
                        <td>19</td>
                        <td>15.000.000đ</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

@endsection



