@extends('dashboard.master')

@section('content')
<main class="c-main">
    <div class="container-fluid">
        <form action="{{route('sys_add_tour')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title mb-0">Add tour</h4>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="card-body">
                            <div class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="text-input">Tour name:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" id="text-input" type="text" name="name" placeholder="Title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="email-input">Price:</label>
                                    <div class="col-md-3">
                                        <div class="controls">
                                            <div class="input-group">
                                                <input name="price" value="" class="form-control" id="appendedInput" size="4" type="number">
                                                <div class="input-group-append"><span class="input-group-text">VNĐ</span></div>
                                            </div><span class="help-block">Here's more help text</span>
                                        </div>
                                    </div>
                                    <label class="col-md-1 col-form-label" >City</label>
                                    <div class="col-md-3">
                                        <select class="form-control" id="select1" name="address">
                                            <option>Please select city</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="date-input">Time start</label>
                                    <div class="col-md-3">
                                        <input class="form-control" id="date-input" type="datetime-local" name="start_time" placeholder="date"><span class="help-block">Please enter a valid date</span>
                                    </div>
                                    <label class="col-md-1 col-form-label" for="date-input">Time end</label>
                                    <div class="col-md-3">
                                        <input class="form-control" id="date-input" type="datetime-local" name="end_time" placeholder="date"><span class="help-block">Please enter a valid date</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Type:</label>
                                    <div class="col-md-9 col-form-label">
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="inline-radio1" type="radio" value="option1" name="types">
                                            <label class="form-check-label" for="inline-radio1">Bình dân</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="inline-radio2" type="radio" value="option2" name="types">
                                            <label class="form-check-label" for="inline-radio2">5 sao</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="inline-radio3" type="radio" value="option3" name="types">
                                            <label class="form-check-label" for="inline-radio3">Cao cấp</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Services:</label>
                                    <div class="col-md-9 col-form-label">
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="inline-checkbox1" name="services[]" type="checkbox" value="check1">
                                            <label class="form-check-label" for="inline-checkbox1">Full Options</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="inline-checkbox2" name="services[]" type="checkbox" value="check2">
                                            <label class="form-check-label" for="inline-checkbox2">Nước uống</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="inline-checkbox3" name="services[]" type="checkbox" value="check3">
                                            <label class="form-check-label" for="inline-checkbox3">Vé khứ hồi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9 col-form-label">
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="inline-checkbox1" name="services[]" type="checkbox" value="check1">
                                            <label class="form-check-label" for="inline-checkbox1">Thức ăn</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="inline-checkbox2" name="services[]" type="checkbox" value="check2">
                                            <label class="form-check-label" for="inline-checkbox2">Đặt khách sạn</label>
                                        </div>
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input" id="inline-checkbox3" name="services[]" type="checkbox" value="check3">
                                            <label class="form-check-label" for="inline-checkbox3">Hỗ trợ người khuyết tật</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="textarea-input">Description:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="textarea-input" name="description" rows="9" placeholder="Content.."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="file-input">Image:</label>
                                    <div class="col-md-9">
                                        <input id="file-input" type="file" name="file-input">
                                    </div>
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
