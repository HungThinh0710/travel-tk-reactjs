@extends('dashboard.master')

@section('content')
<main class="c-main">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="card-title mb-0">Add tour</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card-body">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">Title:</label>
                            <div class="col-md-9">
                                <input class="form-control" id="text-input" type="text" name="text-input" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="email-input">Price:</label>
                            <div class="col-md-9">
                                <input class="form-control" id="email-input" type="email" name="email-input" placeholder="Price" autocomplete="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Type:</label>
                            <div class="col-md-9 col-form-label">
                                <div class="form-check form-check-inline mr-1">
                                    <input class="form-check-input" id="inline-radio1" type="radio" value="option1" name="inline-radios">
                                    <label class="form-check-label" for="inline-radio1">Bình dân</label>
                                </div>
                                <div class="form-check form-check-inline mr-1">
                                    <input class="form-check-input" id="inline-radio2" type="radio" value="option2" name="inline-radios">
                                    <label class="form-check-label" for="inline-radio2">5 sao</label>
                                </div>
                                <div class="form-check form-check-inline mr-1">
                                    <input class="form-check-input" id="inline-radio3" type="radio" value="option3" name="inline-radios">
                                    <label class="form-check-label" for="inline-radio3">Cao cấp</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Services:</label>
                            <div class="col-md-9 col-form-label">
                                <div class="form-check form-check-inline mr-1">
                                    <input class="form-check-input" id="inline-checkbox1" type="checkbox" value="check1">
                                    <label class="form-check-label" for="inline-checkbox1">Full Options</label>
                                </div>
                                <div class="form-check form-check-inline mr-1">
                                    <input class="form-check-input" id="inline-checkbox2" type="checkbox" value="check2">
                                    <label class="form-check-label" for="inline-checkbox2">Nước uống</label>
                                </div>
                                <div class="form-check form-check-inline mr-1">
                                    <input class="form-check-input" id="inline-checkbox3" type="checkbox" value="check3">
                                    <label class="form-check-label" for="inline-checkbox3">Vé khứ hồi</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"></label>
                            <div class="col-md-9 col-form-label">
                                <div class="form-check form-check-inline mr-1">
                                    <input class="form-check-input" id="inline-checkbox1" type="checkbox" value="check1">
                                    <label class="form-check-label" for="inline-checkbox1">Thức ăn</label>
                                </div>
                                <div class="form-check form-check-inline mr-1">
                                    <input class="form-check-input" id="inline-checkbox2" type="checkbox" value="check2">
                                    <label class="form-check-label" for="inline-checkbox2">Đặt khách sạn</label>
                                </div>
                                <div class="form-check form-check-inline mr-1">
                                    <input class="form-check-input" id="inline-checkbox3" type="checkbox" value="check3">
                                    <label class="form-check-label" for="inline-checkbox3">Hỗ trợ người khuyết tật</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="textarea-input">Description:</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="textarea-input" name="textarea-input" rows="9" placeholder="Content.."></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="file-input">Image:</label>
                            <div class="col-md-9">
                                <input id="file-input" type="file" name="file-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="file-multiple-input">Multiple Images: </label>
                            <div class="col-md-9">
                                <input id="file-multiple-input" type="file" name="file-multiple-input" multiple="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-lg btn-danger" type="Cancel">Cancel</button>
                <button class="btn btn-lg btn-warning" type="Preview"> Preview</button>
                <button class="btn btn-lg btn-success" type="Submit"> Submit</button>
            </div>
        </div>

    </div>
</main>

@endsection
