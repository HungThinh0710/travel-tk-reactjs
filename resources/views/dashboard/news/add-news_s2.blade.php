@extends('dashboard.master')

@push('css')
    <link rel="stylesheet" type="text/css" href="sim-editor/styles/simditor.css" />

@endpush

@push('scripts')
    <script type="text/javascript" src="sim-editor/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="sim-editor/scripts/module.js"></script>
    <script type="text/javascript" src="sim-editor/scripts/hotkeys.js"></script>
    <script type="text/javascript" src="sim-editor/scripts/uploader.js"></script>
    <script type="text/javascript" src="sim-editor/scripts/simditor.js"></script>
    <script type="text/javascript">
        var editor = new Simditor({
            textarea: $('#editor')
            //optional options
        });
    </script>
@endpush
@section('content')
<main class="c-main">
    <div class="container-fluid" >
        <form action="{{route('sys_review_article')}}" method="POST">
            <div class="card">

                <div class="card-header">
                    Add News
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title mb-0">Step 2: Write article</h4>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="card-body">
                            <div class="form-horizontal">
                               <div class="form-group">
                                   {{csrf_field()}}
                                   <input name="categoryName" value="{{$categoryName}}" hidden>
                                   <input name="id" value="{{$categoryId}}" hidden>
                                   <input class="form-control" name="title" value="" placeholder="Title">
                               </div>
                                <div class="form-group">
                                    <textarea id="editor" placeholder="" name="content" autofocus></textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-lg btn-danger" type="Cancel">Cancel</button>
                    <button class="btn btn-lg btn-warning" type="Preview"> Preview</button>
                    <button class="btn btn-lg btn-success" type="Submit"> Submit</button>
                </div>
            </div>

        </form>
    </div>
</main>

@endsection
