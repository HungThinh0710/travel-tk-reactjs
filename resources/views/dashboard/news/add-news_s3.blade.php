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
    <div class="container w-50" >
        <form action="{{route('sys_publish_article')}}" method="POST">
            <div class="card">

                <div class="card-header">
                    Add News
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title mb-0">Step 3: Review and publish</h4>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="card-body">
                            <div class="form-horizontal">
                                <div class="row">
                                    <div class="col-md-6">
                                        {{csrf_field()}}
                                        <input name="category_id" value="{{$categoryId}}" hidden>
                                        <label for="company">Category</label>
                                        <input class="form-control" value="{{$categoryName}}" readonly placeholder="Title">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="company">Title</label>
                                        <input class="form-control" name="title" value="{{$title}}" readonly placeholder="Title">
                                    </div>
                                </div>
                            </div>
                           <div class="form-group pt-4">
                               <div class="row">
                                   <div class="col-md-12">
                                       <label for="company">Company</label>
                                        <textarea id="editor" rows="8" placeholder="" name="content">
                                            {{$content}}
                                        </textarea>
                                   </div>
                               </div>
                           </div>
                            <div class="form-group">
                                <p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="true" aria-controls="collapseExample">More options</a>
                                </p>
                                <div class="collapse" id="collapseExample" style="">
                                    <div class="card card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="company">Time will publish</label>
                                                <input class="form-control" id="date-input" type="datetime-local" name="start_time" placeholder="date">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="company">Allow public comment</label>
                                                <div >
                                                <label class="c-switch c-switch-label c-switch-pill c-switch-success">
                                                    <input class="c-switch-input" type="checkbox" checked=""><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                                                </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

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
