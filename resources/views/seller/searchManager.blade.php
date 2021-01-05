@extends('layout.layoutManager')
@section('title','Welcome Home | Add Flowers ')
@section('judulHeader', 'Result Search')
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
    @foreach ($flowers as $flower)
    <div class="col-lg-3" style="margin:20px 0;">
        <div class="card-group">
            <div class="card" style="height: 30rem">
                <a href="{{url('/manager/flower/'.$flower->slug)}}" style="text-decoration: none">
                    <img class="card-img-top" src="{{asset('storage/flower/' . $flower->flower_img)}}"
                        alt="Card image cap" height="250">
                    <div class="text-center mt-5">
                        <h5 class="font-weight-bold" style="height: 60px; padding:5px; color:black">
                            {{$flower->flower_name}}</h5>
                        <p style="">Rp.{{$flower->flower_price}}</p>
                    </div>
                    <div class="card-footer" style="background-color: white;">
                        <a href="{{url('/manager/flower/'.$flower->slug)}}"><button type="button"
                                class="btn btn-outline-info">Details</button></a>
                        <a href="{{url('/manager/flower/'.$flower->id .'/edit')}}"><button type="button"
                                class="btn btn-outline-warning">Edit</button></a>
                        <form action="{{url('/manager/flower/'.$flower->id)}}" method="POST" style="display: inline;">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{$flowers->withQueryString()->links()}}
@endsection
