@extends('layout.layoutManager')
@section('title','Welcome Home | Input Data Category ')
@section('judulHeader','Please Input Data Category ')
@section('content')
<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group ">
        <label for="categoryName">Category Name</label>
        <input type="text" class="form-control {{$errors->has('categoryName') ? 'is-invalid' : '' }}" id="categoryName" placeholder="ex: Fresh Flower" name="categoryName" value="{{old('categoryName')}}">
        @if ($errors->has('categoryName'))
            <div class="invalid-feedback">
                {{$errors->first('categoryName')}}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="categoryImg">Category Image</label>
        <input type="file" class="form-control-file {{$errors->has('categoryImg') ? 'is-invalid' : '' }}" id="categoryImg" name="categoryImg" value="{{old('categoryImg')}}">
        @if ($errors->has('categoryImg'))
            <div class="invalid-feedback">
                {{$errors->first('categoryImg')}}
            </div>
        @endif
    </div>
      @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('category.index')}}"><button type="button" class="btn btn-outline-warning">Cancel</button></a>
</form>
@endsection
