@extends('dashboard.master')

@section('content')
<main class="c-main">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="card-title mb-0">List tour</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card-body">
                    <table class="table table-responsive-sm">
                        <thead>
                        <tr>
                            <th>Tour</th>
                            <th>Start time</th>
                            <th>End time</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row col-md-9">
                                    <select class="form-control">
                                        <option>Active</option>
                                        <option>Pending</option>
                                        <option></option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Ha Long Bay #1234</td>
                            <td>03/11/2020</td>
                            <td>06/11/2020</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>
                                <div>
                                    <button class="btn btn-sm btn-outline-primary mb-1" type="button">Edit</button>
                                    <button class="btn btn-sm btn-outline-danger mb-1" type="button" data-toggle="modal" data-target="#dangerModal">Delete</button>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Ha Long Bay #1234</td>
                            <td>03/11/2020</td>
                            <td>06/11/2020</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td><div>
                                    <button class="btn btn-sm btn-outline-primary mb-1" type="button">Edit</button>
                                    <button class="btn btn-sm btn-outline-danger mb-1" type="button" data-toggle="modal" data-target="#dangerModal">Delete</button>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Ha Long Bay #1234</td>
                            <td>03/11/2020</td>
                            <td>06/11/2020</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td><div>
                                    <button class="btn btn-sm btn-outline-primary mb-1" type="button">Edit</button>
                                    <button class="btn btn-sm btn-outline-danger mb-1" type="button" data-toggle="modal" data-target="#dangerModal">Delete</button>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Ha Long Bay #1234</td>
                            <td>03/11/2020</td>
                            <td>06/11/2020</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td><div>
                                    <button class="btn btn-sm btn-outline-primary mb-1" type="button">Edit</button>
                                    <button class="btn btn-sm btn-outline-danger mb-1" type="button" data-toggle="modal" data-target="#dangerModal">Delete</button>
                                </div></td>
                        </tr>
                        <tr>
                            <td>Ha Long Bay #1234</td>
                            <td>03/11/2020</td>
                            <td>06/11/2020</td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td><div>
                                    <button class="btn btn-sm btn-outline-primary mb-1" type="button">Edit</button>
                                    <button class="btn btn-sm btn-outline-danger mb-1" type="button" data-toggle="modal" data-target="#dangerModal">Delete</button>
                                </div></td>
                        </tr>
                        </tbody>
                    </table>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                    <div class="modal fade" id="dangerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-danger" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Confirm delete tour</h4>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="text-center">
                                        <img src="assets/img/triangle.png" class="rounded" alt="...">
                                    </div>
                                    <p>Do you want delete to #Ha Long Bay #1234 tour ?</p>
                                    <p>Note: This action can not be undone.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-danger show-toast" type="button" data-dismiss="modal" data-dismiss="toast">Yes</button>
                                    <button class="btn btn-secondary" type="button">Cancel</button>
                                </div>
                            </div>
                            <!-- /.modal-content-->
                        </div>
                        <!-- /.modal-dialog-->
                    </div>

                    <div aria-live="polite" id="mytoast" aria-atomic="true" style="position: relative; min-height: 200px;">
                        <div class="toast" style="position: absolute; top: 0; right: 0;">
                            <div class="toast-header">
                                <img src="..." class="rounded mr-2" alt="...">
                                <strong class="mr-auto">Bootstrap</strong>
                                <small>11 mins ago</small>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>
</main>
@endsection
