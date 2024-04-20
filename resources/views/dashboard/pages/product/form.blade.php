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
                        <p class="text-uppercase text-sm">User Information</p>
                        <div class="row">
                            <form id="form" class="row g-3" method="POST" action="{{$action}}"
                                  data-method="{{isset($model)?'PUT':'POST'}}">
                                @isset($model)
                                    @method('PUT')
                                @endisset
                                @csrf

                                <x-dashboard.forms.text-input label="name" name="name"
                                                              value="{{isset($model)?$model->name:''}}"></x-dashboard.forms.text-input>

                                <x-dashboard.forms.text-input label="description" name="description"
                                                              value="{{isset($model)?$model->description:''}}"></x-dashboard.forms.text-input>

                                <x-dashboard.forms.select label="category" name="category_id"
                                                          :options="\App\Models\Category::pluck('id','name')"
                                                          :selected="$model->category_id??''"></x-dashboard.forms.select>



                                <input type="submit" class="btn btn-primary" id="submit" value="Save changes">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
