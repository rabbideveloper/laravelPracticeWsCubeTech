
<div class="row mb-3">
    <label for="{{$for}}" class="col-sm-2 col-form-label">{{$label}}</label>
    <div class="col-sm-7">
        <input type="{{$type}}" name="{{$name}}" class="form-control" id="{{$id}}" placeholder="{{$placeholder}}" value="{{old($value)}}">
        <span class="text-danger" >
            @error("$name")
                {{$message}}
            @enderror
        </span>
    </div>
</div>
