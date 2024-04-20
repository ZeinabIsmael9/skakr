<div class="col-md-12">
    <div class="form-group">
        <label for="{{$name}}" class="required fs-6 mb-2 text-capitalize">{{$label}}</label>
        <input type="text" class="form-control" name="{{$name}}" id="{{$name}}" value="{{$value??''}}" required>
        <div id="validationServer03Feedback" class="invalid-feedback">Please provide a valid city.</div>
    </div>
</div>
