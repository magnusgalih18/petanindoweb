@extends('layout.layoutManager')
@section('title','Welcome Home | Update Data Category ')
@section('judulHeader','Please Update Data Category ')
@section('content')
<form action="{{url('/manager/category/'.$category->id.'/edit')}}" method="POST" enctype="multipart/form-data">
    <div class="form-group ">
        <label for="categoryName">Category Name</label>
    <input type="text" class="form-control {{$errors->has('categoryName') ? 'is-invalid' : '' }}" id="categoryName" placeholder="ex: Fresh Flower" name="categoryName" value="{{$category->category_name}}">
        @if ($errors->has('categoryName'))
            <div class="invalid-feedback">
                {{$errors->first('categoryName')}}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="categoryImg">Category Image</label>
    <input type="file" class="form-control-file {{$errors->has('categoryImg') ? 'is-invalid' : '' }}" id="categoryImg" name="categoryImg" value="{{$category->category_img}}">
        @if ($errors->has('categoryImg'))
            <div class="invalid-feedback">
                {{$errors->first('categoryImg')}}
            </div>
        @endif
    </div>
    <input type="hidden" name="_method" value="PUT">
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('category.index')}}"><button type="button" class="btn btn-outline-warning">Cancel</button></a>
</form>
@endsection
