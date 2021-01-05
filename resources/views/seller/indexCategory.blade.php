@extends('layout.layoutManager')
@section('title','Welcome Home | Index Category ')
@section('judulHeader')
<a class="text-decoration-none" href="{{route('category.create')}}">Add Category</a>
@endsection
@section('content')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <p>{{session()->get('success')}}</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
<div class="row">
@foreach ($category as $ctg)
    <div class="col-lg-3" style="margin:10px 0;">
        <div class="card">
        <img class="card-img-top" src="{{asset('/storage/category/' . $ctg->category_img)}}" alt="Card image cap" height="290">
            <div class="card-body">
                <h5 class="card-title">{{$ctg->category_name}}</h5>
            <a href="{{url('/manager/category/'. $ctg->id . '/edit')}}"><button type="button" class="btn btn-outline-warning">Edit</button></a>
            <form action="{{url('/manager/category/'. $ctg->id)}}" method="POST" style="display: inline;">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-outline-danger" >Delete</button>
            </form>
            </div>
        </div>
    </div>
@endforeach
</div>
{{$category->links()}}
@endsection
