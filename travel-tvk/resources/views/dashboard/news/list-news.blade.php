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
                $(this).html( '<input type="text" placeholder="Search '+title+'" class="form-control form-control-sm" />' );
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
                    url: "{{route('sys_ajax_list_news')}}",
                    dataSrc: 'data',
                },
                "order": [[ 0, "desc" ]],
                columns: [
                    { data: 'id' },
                    { data: 'category.name' },
                    { data: 'title' },
                    { data: 'author.username' },
                    { data: null}
                    ],
                columnDefs: [
                    {
                        "targets": -1,
                        "data": 'null',
                        "searchable": false,
                        "render": function(data, type, row, meta) {
                            let id = data.id;
                            let editTag = '<a href="{{route('show_add_tour')}}/'+id+'" class="btn btn-sm btn-outline-primary mb-1 edit-tour">Edit</a>';
                            let removeTag = ' <a href="{{route('show_add_tour')}}/'+id+'" class="btn btn-sm btn-outline-danger mb-1 delete-tour">Delete</a>';
                            let mergedGroupButton = editTag + removeTag;
                            return type === 'display' ?
                                mergedGroupButton : '';
                        } ,
                    },
                ]
            } );

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
                        <h4 class="card-title mb-0">List news</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <a href="{{route('show_add_news')}}" class="btn btn-info">Add News</a>
            </div>
            <div class="row">
                <div class="card-body">
                    <table id="list-tour-table" class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>ID News</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID of News</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Author</th>
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


