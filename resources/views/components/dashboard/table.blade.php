<div>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="text-capitalize">{{$title}}</span>
                @if(isset($createRoute))
                    <a type="button"  id="create" class="has_action btn btn-primary px-5" data-type="edit"
                            href="{{$createRoute}}">
                        <i class="fa-solid fa-plus"></i>
                        Create new
                    </a>
                @endif

            </div>
            <div class="card-body" style="overflow: scroll">
                {{$slot}}
            </div>
        </div>
    </div>
</div>
