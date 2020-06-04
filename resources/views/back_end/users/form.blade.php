@csrf
<div class="row">
    <div class="col-md-6">
        @php $input='name' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Username</label>
            <input type="text" class="form-control @error($input) is-invalid @enderror" value="{{isset($row) ?$row->name : ''}}"  name="{{$input}}">

            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        @php $input='email' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Email address</label>
            <input type="{{$input}}" class="form-control  @error($input) is-invalid @enderror" value="{{isset($row) ?$row->email : ''}}" name="{{$input}}">

            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        @php $input='password' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Password</label>
            <input type="{{$input}}" class="form-control @error($input) is-invalid @enderror" name="{{$input}}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
</div>
