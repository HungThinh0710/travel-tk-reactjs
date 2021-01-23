@extends('dashboard.master')

@section('content')
<main class="c-main">
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-primary">
                        <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="text-value-lg">9.823</div>
                                <div>Members online</div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="c-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart1" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-info">
                        <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="text-value-lg">124.000.000vnđ</div>
                                <div>Doanh thu tháng 11</div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="c-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart2" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-warning">
                        <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="text-value-lg">675</div>
                                <div>Tour đã hoàn thành tháng 11</div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="c-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper mt-3" style="height:70px;">
                            <canvas class="chart" id="card-chart3" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-danger">
                        <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="text-value-lg">123</div>
                                <div>Tour đang chờ ngày tới</div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="c-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart4" height="70"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row-->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title mb-0">General</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-lg-4">

                        <table class="table table-responsive-sm">
                            <thead>
                            <div class="card-header">Lastest Tours</div>

                            <tbody>
                            <tr>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>Ly Son Island - Quang Ngai #4531</td>

                            </tr>
                            <tr>
                                <td><span class="badge badge-danger">Banned</span></td>
                                <td>Ha Long Bay - Quang Ninh #5652</td>

                            </tr>
                            <tr>
                                <td><span class="badge badge-secondary">Inactive</span></td>
                                <td>Ba Na Hills - DaNang #4532</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>Ly Son Island - Quang Ngai #2541</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                            <button class="btn btn-sm btn-primary" type="button">More Detail</button>
                        </div>

                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-lg-4">

                        <table class="table table-responsive-sm col-sm">
                            <thead>
                            <div class="card-header">Newest Members</div>

                            </thead>
                            <tbody>
                            <tr>
                                <td><span class="badge badge-primary">06/11/2020</span></td>
                                <td>Hung Thinh</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-primary">06/11/2020</span></td>
                                <td>Vuong Khai</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-primary">06/11/2020</span></td>
                                <td>Vu</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-primary">06/11/2020</span></td>
                                <td>Hung Thinh</td>
                            </tbody>
                        </table>
                        <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                            <button class="btn btn-sm btn-primary general-btn" type="button">All Members</button>
                        </div>

                    </div>
                    <!-- /.col-->
                    <div class="col-sm col-lg-4">

                        <table class="table table-responsive-sm col-sm">
                            <thead>
                            <div class="card-header">Feedback</div>
                            </thead>
                            <tbody>
                            <tr>
                                <td><span class="badge badge-primary">06/11/2020</span></td>
                                <td>Your tour need more day!</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-primary">06/11/2020</span></td>
                                <td>Please remove Surcharge for children</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-primary">06/11/2020</span></td>
                                <td>I feel bad when use your services</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-primary">06/11/2020</span></td>
                                <td>I need tour guide information</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                            <button class="btn btn-sm btn-primary" type="button">&nbsp Read All &nbsp</button>
                        </div>

                    </div>
                    <!-- /.col-->
                </div>
            </div>
            <!-- /.row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Traffic &amp; Sales</div>
                        <div class="card-body">
                            <!-- /.row--><br>
                            <table class="table table-responsive-sm table-hover table-outline mb-0">
                                <thead class="thead-light">
                                <tr>
                                    <th class="text-center">
                                        <svg class="c-icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people"></use>
                                        </svg>
                                    </th>
                                    <th>User</th>
                                    <th class="text-center">Country</th>
                                    <th>Lastest travel tour</th>
                                    <th class="text-center">Payment Method</th>
                                    <th>Activity</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">
                                        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                                    </td>
                                    <td>
                                        <div>Yiorgos Avraamu</div>
                                        <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                    </td>
                                    <td class="text-center">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-us"></use>
                                        </svg>
                                    </td>
                                    <td>
                                        <strong>Vinh Ha Long - VIETNAM </strong><div class="small text-muted">Jun 11, 2015 - Jul 10, 2015</div>
                                    </td>
                                    <td class="text-center">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-mastercard"></use>
                                        </svg>
                                    </td>
                                    <td>
                                        <div class="small text-muted">Last login</div><strong>10 sec ago</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/2.jpg" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
                                    </td>
                                    <td>
                                        <div>Avram Tarasios</div>
                                        <div class="small text-muted"><span>Recurring</span> | Registered: Jan 1, 2015</div>
                                    </td>
                                    <td class="text-center">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-br"></use>
                                        </svg>
                                    </td>
                                    <td>
                                        <strong>Vinh Ha Long - VIETNAM </strong><div class="small text-muted">Jun 11, 2015 - Jul 10, 2015</div>
                                    </td>
                                    <td class="text-center">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-visa"></use>
                                        </svg>
                                    </td>
                                    <td>
                                        <div class="small text-muted">Last login</div><strong>5 minutes ago</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/3.jpg" alt="user@email.com"><span class="c-avatar-status bg-warning"></span></div>
                                    </td>
                                    <td>
                                        <div>Quintin Ed</div>
                                        <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                    </td>
                                    <td class="text-center">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-in"></use>
                                        </svg>
                                    </td>
                                    <td>
                                        <strong>Vinh Ha Long - VIETNAM </strong><div class="small text-muted">Jun 11, 2015 - Jul 10, 2015</div>
                                    </td>
                                    <td class="text-center">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-stripe"></use>
                                        </svg>
                                    </td>
                                    <td>
                                        <div class="small text-muted">Last login</div><strong>1 hour ago</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"><span class="c-avatar-status bg-secondary"></span></div>
                                    </td>
                                    <td>
                                        <div>Enéas Kwadwo</div>
                                        <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                    </td>
                                    <td class="text-center">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-fr"></use>
                                        </svg>
                                    </td>
                                    <td>
                                        <strong>Vinh Ha Long - VIETNAM </strong><div class="small text-muted">Jun 11, 2015 - Jul 10, 2015</div>
                                    </td>
                                    <td class="text-center">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-paypal"></use>
                                        </svg>
                                    </td>
                                    <td>
                                        <div class="small text-muted">Last login</div><strong>Last month</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                                    </td>
                                    <td>
                                        <div>Agapetus Tadeáš</div>
                                        <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                    </td>
                                    <td class="text-center">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-es"></use>
                                        </svg>
                                    </td>
                                    <td>
                                        <strong>Vinh Ha Long - VIETNAM </strong><div class="small text-muted">Jun 11, 2015 - Jul 10, 2015</div>
                                    </td>
                                    <td class="text-center">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-apple-pay"></use>
                                        </svg>
                                    </td>
                                    <td>
                                        <div class="small text-muted">Last login</div><strong>Last week</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
                                    </td>
                                    <td>
                                        <div>Friderik Dávid</div>
                                        <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                    </td>
                                    <td class="text-center">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-pl"></use>
                                        </svg>
                                    </td>
                                    <td>
                                        <strong>Vinh Ha Long - VIETNAM </strong><div class="small text-muted">Jun 11, 2015 - Jul 10, 2015</div>
                                    </td>
                                    <td class="text-center">
                                        <svg class="c-icon c-icon-xl">
                                            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-amex"></use>
                                        </svg>
                                    </td>
                                    <td>
                                        <div class="small text-muted">Last login</div><strong>Yesterday</strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row-->
        </div>
    </div>
</main>
@endsection
