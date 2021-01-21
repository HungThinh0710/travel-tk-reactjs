@extends('dashboard.master')

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.button-select-category ').on('click', function(e){
                let id = e.target.getAttribute('data-id');
                let catName = e.target.getAttribute('data-cname');
                $("#catid").val(id);
                $("#cname").val(catName);
            });
        });
    </script>
@endpush

@section('content')
<main class="c-main">
    <div class="container w-50" >
        <form action="{{route('sys_add_article')}}" method="POST">
            {{csrf_field()}}
            <div class="card">
                <div class="card-header"> Add News</div>
                <div class="card-body">
                    <div>
                        <h5>Step 1: Select category</h5>
                    </div>
                    <div class="accordion" id="accordion" role="tablist">
                        <div class="card mb-0">
                            <div class="card-header" id="headingOne" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">Tin tức du lịch</a></h5>
                            </div>
                            <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-body">
                                    <input id="catid" name="id" value="" hidden>
                                    <input id="cname" name="categoryName" value="" hidden>
                                    @foreach($categories as $category)
                                        <div class="pt-2">
                                            <button class="btn btn-secondary button-select-category" data-cname="{{$category->name}}" data-id="{{$category->id}}" type="button" style="background-color: transparent; color: #321fdb; width: 200px; text-align: left">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-right"></use>
                                                </svg>&nbsp;{{$category->name}}
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <div class="card-header" id="headingTwo" role="tab">
                                <h5 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Giới thiệu địa danh</a></h5>
                            </div>
                            <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <div class="card-header" id="headingThree" role="tab">
                                <h5 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Các loại tin tức du lịch khác</a></h5>
                            </div>
                            <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success" type="submit">Next</button>
                </div>
            </div>
        </form>
    </div>
</main>

@endsection
