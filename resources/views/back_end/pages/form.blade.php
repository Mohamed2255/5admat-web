@csrf
<div class="row">
    <div class="col-md-6">
        @php $input='name' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Page Name</label>
            <input type="text" class="form-control @error($input) is-invalid @enderror" value="{{isset($row) ?$row->name : ''}}"  name="{{$input}}">

            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        @php $input='meta_keywords' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Meta Keywords</label>
            <input type="text" class="form-control  @error($input) is-invalid @enderror" value="{{isset($row) ?$row->$input : ''}}" name="{{$input}}">

            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        @php $input='des' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Page Description</label>
            <textarea  cols="30" rows="10" type="text" class="form-control @error($input) is-invalid @enderror" name="{{$input}}">
{{isset($row) ?$row->$input : ''}}
            </textarea>
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        @php $input='meta_des' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Meta Description</label>
            <textarea cols="30" rows="5" type="text" class="form-control @error($input) is-invalid @enderror" name="{{$input}}">
{{isset($row) ?$row->$input : ''}}
            </textarea>
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
