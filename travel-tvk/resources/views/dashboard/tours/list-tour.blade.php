@extends('dashboard.master')
@push('css')<link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">@endpush
@push('scripts')
    <script type="text/javascript" charset="utf8" src="datatables/datatables.min.js"></script>
{{--    "ajax": "data/arrays.txt"--}}
    <script type="text/javascript">
        $(document).ready(function() {
            // $('#list-tour-table tfoot th').each( function () {

            $('#list-tour-table tbody td').each( function () {
                var title = $(this).text();
                console.log(title);
                // if(title != 'Action')
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
            } );




            //Initial search
            $('#list-tour-table tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
            } );

            var table = $('#list-tour-table').DataTable( {
                initComplete: function () {
                    var r = $('#list-tour-table tfoot tr');
                    r.find('th').each(function(){
                        $(this).css('padding', 8);
                    });
                    $('#list-tour-table thead').append(r);
                    $('#search_0').css('text-align', 'center');

                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;
                        // tao 1 div chua full cac filed can sort, sau do xu ly qua Jquery
                        $( 'input', this.footer() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                    //

                },
                "ajax": {
                    url: "{{route('sys_ajax_list_tour')}}",
                    dataSrc: 'data',
                },
                columns: [
                    { data: 'name' },
                    { data: 'start_time' },
                    { data: 'end_time' },
                    { data: 'address' },
                    { data: 'status' },
                    { data: null}
                    ],
                columnDefs: [
                    {
                        "targets": -1,
                        "data": 'null',
                        "render": function(data, type, row, meta) {
                            let id = data.id;
                            let editTag = '<a href="{{route('show_add_tour')}}/'+id+'" class="btn btn-sm btn-outline-primary mb-1 edit-tour">Edit</a>';
                            let removeTag = ' <a href="{{route('show_add_tour')}}/'+id+'" class="btn btn-sm btn-outline-danger mb-1 delete-tour">Delete</a>';
                            let mergedGroupButton = editTag + removeTag;
                            return type === 'display' ?
                                mergedGroupButton : '';
                        } ,
                    },
                    {
                        "targets": 4,
                        "render": function ( data, type, row, meta ) {
                            switch (data) {
                                case 'Active':
                                    return type === 'display'?
                                        '<span class="badge badge-success">'+data:data+'</span>';
                                    break;
                                case 'Pending':
                                    return type === 'display'?
                                        '<span class="badge badge-warning">'+data:data+'</span>';
                                    break;
                                case 'Ended':
                                    return type === 'display'?
                                        '<span class="badge badge-danger">'+data:data+'</span>';
                                    break;
                                default:
                                    return type === 'display'?
                                        '<span class="badge badge-info">'+data:data+'</span>';
                                    break;
                            }
                        }
                    }
                ]
            } );

            // var rowNode = table
            //     .row.add( {
            //         "name":       "Tiger Nixon",
            //         "start_time":   "System Architect",
            //         "end_time":     "$3,120",
            //         "address": "2011/04/25",
            //         "status":     "Active",
            //         "action":       "5421"
            //     }  )
            //     .draw()
            //     .node();

            // Edit/Remove Button
            $('#list-tour-table tbody').on( 'click', 'button', function () {

                var data = table.row( $(this).parents('tr') ).data();
                alert("Data`id` is:" + data.id);
                location.href = '{{route('show_add_tour')}}';
            } );

        } );

    </script>
@endpush


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
            <div class="card-body">
                <a href="{{route('show_add_tour')}}" class="btn btn-info">Add Tour</a>
            </div>
{{--            <div class="row">--}}
{{--                <div class="card-body">--}}
{{--                    <table class="table table-responsive-sm">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>Tour</th>--}}
{{--                            <th>Start time</th>--}}
{{--                            <th>End time</th>--}}
{{--                            <th>Status</th>--}}
{{--                            <th>Action</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tr>--}}
{{--                            <td>--}}
{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-md-9">--}}
{{--                                        <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-md-9">--}}
{{--                                        <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-md-9">--}}
{{--                                        <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <div class="form-group row col-md-9">--}}
{{--                                    <select class="form-control">--}}
{{--                                        <option>Active</option>--}}
{{--                                        <option>Pending</option>--}}
{{--                                        <option></option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Ha Long Bay #1234</td>--}}
{{--                            <td>03/11/2020</td>--}}
{{--                            <td>06/11/2020</td>--}}
{{--                            <td><span class="badge badge-success">Active</span></td>--}}
{{--                            <td>--}}
{{--                                <div>--}}
{{--                                    <button class="btn btn-sm btn-outline-primary mb-1" type="button">Edit</button>--}}
{{--                                    <button class="btn btn-sm btn-outline-danger mb-1" type="button" data-toggle="modal" data-target="#dangerModal">Delete</button>--}}

{{--                                </div>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Ha Long Bay #1234</td>--}}
{{--                            <td>03/11/2020</td>--}}
{{--                            <td>06/11/2020</td>--}}
{{--                            <td><span class="badge badge-success">Active</span></td>--}}
{{--                            <td><div>--}}
{{--                                    <button class="btn btn-sm btn-outline-primary mb-1" type="button">Edit</button>--}}
{{--                                    <button class="btn btn-sm btn-outline-danger mb-1" type="button" data-toggle="modal" data-target="#dangerModal">Delete</button>--}}
{{--                                </div></td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Ha Long Bay #1234</td>--}}
{{--                            <td>03/11/2020</td>--}}
{{--                            <td>06/11/2020</td>--}}
{{--                            <td><span class="badge badge-success">Active</span></td>--}}
{{--                            <td><div>--}}
{{--                                    <button class="btn btn-sm btn-outline-primary mb-1" type="button">Edit</button>--}}
{{--                                    <button class="btn btn-sm btn-outline-danger mb-1" type="button" data-toggle="modal" data-target="#dangerModal">Delete</button>--}}
{{--                                </div></td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Ha Long Bay #1234</td>--}}
{{--                            <td>03/11/2020</td>--}}
{{--                            <td>06/11/2020</td>--}}
{{--                            <td><span class="badge badge-success">Active</span></td>--}}
{{--                            <td><div>--}}
{{--                                    <button class="btn btn-sm btn-outline-primary mb-1" type="button">Edit</button>--}}
{{--                                    <button class="btn btn-sm btn-outline-danger mb-1" type="button" data-toggle="modal" data-target="#dangerModal">Delete</button>--}}
{{--                                </div></td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Ha Long Bay #1234</td>--}}
{{--                            <td>03/11/2020</td>--}}
{{--                            <td>06/11/2020</td>--}}
{{--                            <td><span class="badge badge-success">Active</span></td>--}}
{{--                            <td><div>--}}
{{--                                    <button class="btn btn-sm btn-outline-primary mb-1" type="button">Edit</button>--}}
{{--                                    <button class="btn btn-sm btn-outline-danger mb-1" type="button" data-toggle="modal" data-target="#dangerModal">Delete</button>--}}
{{--                                </div></td>--}}
{{--                        </tr>--}}
{{--                        </tbodyy>--}}
{{--                    </table>--}}
{{--                    <ul class="pagination">--}}
{{--                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>--}}
{{--                        <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
{{--                    </ul>--}}
{{--                    <div class="modal fade" id="dangerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-danger" role="document">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h4 class="modal-title">Confirm delete tour</h4>--}}
{{--                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <div class="text-center">--}}
{{--                                        <img src="assets/img/triangle.png" class="rounded" alt="...">--}}
{{--                                    </div>--}}
{{--                                    <p>Do you want delete to #Ha Long Bay #1234 tour ?</p>--}}
{{--                                    <p>Note: This action can not be undone.</p>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button class="btn btn-danger show-toast" type="button" data-dismiss="modal" data-dismiss="toast">Yes</button>--}}
{{--                                    <button class="btn btn-secondary" type="button">Cancel</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- /.modal-content-->--}}
{{--                        </div>--}}
{{--                        <!-- /.modal-dialog-->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row">
                <div class="card-body">
                    <table id="list-tour-table" class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>Tour name</th>
                                <th>Start date</th>
                                <th>End date</th>
                                <th>City</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Tour name</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th>City</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection


