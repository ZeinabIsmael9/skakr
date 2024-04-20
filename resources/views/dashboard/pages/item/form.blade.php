@extends('dashboard.layouts.master')

@section('content')
    {{--<form id="form" class="row g-3" method="POST" action="{{$action}}" data-method="{{isset($model)?'PUT':'POST'}}">--}}
    {{--    @isset($model)--}}
    {{--        @method('PUT')--}}
    {{--    @endisset--}}
    {{--    @csrf--}}

    {{--        <x-dashboard.forms.text-input label="name" name="name" value="{{isset($model)?$model->name:''}}"></x-dashboard.forms.text-input>--}}

    {{--    <input type="submit" class="btn btn-primary" id="submit" value="Save changes">--}}

    {{--</form>--}}
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <form id="form" class="row g-3" method="POST" action="{{$action}}"
                                  data-method="{{isset($model)?'PUT':'POST'}}" enctype="multipart/form-data">
                                @isset($model)
                                    @method('PUT')
                                @endisset
                                @csrf

                                <x-dashboard.forms.select label="product" name="product_id"
                                                          :options="\App\Models\Product::pluck('id','name')"
                                                          :selected="$model->product_id??''"></x-dashboard.forms.select>

                                    <x-dashboard.forms.select label="color" name="color_id"
                                                              :options="\App\Models\Color::pluck('id','name')"
                                                              :selected="$model->color_id??''"></x-dashboard.forms.select>


                                    <x-dashboard.forms.select label="size" name="size_id"
                                                              :options="\App\Models\Size::pluck('id','name')"
                                                              :selected="$model->size_id??''"></x-dashboard.forms.select>

                                    <x-dashboard.forms.text-input label="price" name="price"
                                                              value="{{isset($model)?$model->price:''}}"></x-dashboard.forms.text-input>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="image" class="required fs-6 mb-2 text-capitalize">image</label>
                                            <input type="file" class="form-control" name="image" id="image"  @if(!isset($model)) required @endif>
                                            <div id="validationServer03Feedback" class="invalid-feedback">Please provide a valid image</div>
                                        </div>
                                    </div>
                                    @if(isset($model))
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <img src="{{$model->getImageUrl()}}" alt="image" class="img-fluid">
                                        </div>
                                    </div>
                                    @endif
                                    <input type="submit" class="btn btn-primary" id="submit" value="Save changes">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
