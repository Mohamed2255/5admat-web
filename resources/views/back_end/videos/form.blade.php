@csrf
<div class="row">
    <div class="col-md-6">
        @php $input='name' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Video Name</label>
            <input type="text" class="form-control @error($input) is-invalid @enderror" value="{{isset($row) ?$row->name : ''}}"  name="name">
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
            <input type="text" class="form-control  @error($input) is-invalid @enderror" value="{{isset($row) ?$row->$input : ''}}" name="meta_keywords">

            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        @php $input='youtube' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">URl youtube</label>
            <input type="url" class="form-control  @error($input) is-invalid @enderror" value="{{isset($row) ?$row->$input : ''}}" name="youtube">

            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        @php $input='published' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Video status</label>
            <select name="published" class="form-control  @error($input) is-invalid @enderror">
              <option value="1" {{isset($row) &&$row->$input==1 ?'selected':''}}>Published</option>
                <option value="0" {{isset($row) &&$row->$input==0 ?'selected':''}}>hidden</option>
            </select>
            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        @php $input='cat_id' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Category name</label>
            <select name="cat_id" class="form-control  @error($input) is-invalid @enderror" >
                @foreach($categories as $category)
                    <option value="{{$category->id}}"
                        {{isset($row) && $row->$input== $category->id ? 'selected':''}}>
                        {{$category->name}}</option>
                @endforeach
            </select>
            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        @php $input='skills[]' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">skill Name</label>
            <select name="skills[]" class="form-control  @error($input) is-invalid @enderror" multiple style="height:100px" >
                @foreach($skills as $skill)
                    <option value="{{$skill->id}}">
                        {{$skill->name}}</option>
                @endforeach
            </select>
            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        @php $input='tags[]' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Tag Name</label>
            <select name="tags[]" class="form-control  @error($input) is-invalid @enderror" multiple style="height:100px" >
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">
                        {{$tag->name}}</option>
                @endforeach
            </select>
            @error($input)
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        @php $input='image' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Video Image</label>
            <input type="text" class="form-control  @error($input) is-invalid @enderror" value="{{isset($row) ?$row->$input : ''}}" name="image">

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
            <label class="bmd-label-floating">Video Description</label>
            <textarea  cols="30" rows="5" type="text" class="form-control @error($input) is-invalid @enderror" name="des">
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
            <textarea cols="30" rows="2" type="text" class="form-control @error($input) is-invalid @enderror" name="meta_des">
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
