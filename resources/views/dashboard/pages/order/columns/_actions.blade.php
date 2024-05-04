<div class="d-flex">
{{--    <a class="has_action badge rounded-pill text-bg-primary" style="--bs-bg-opacity: .2;" href="#" data-type="show"--}}
{{--       data-action="{{ route("$route_name.show",$model->id) }}" data-method="get">--}}
{{--        <i class="fa-regular fa-eye  text-primary fa-lg"></i>--}}
{{--    </a>--}}
    <a class="delete_btn badge badge-danger" style="--bs-bg-opacity: .2;"  data-type="delete"
       href="{{ route("$route_name.destroy",$model->id) }}">
        <i class="fa-solid fa-trash text-danger fa-lg"></i>
    </a>
</div>

