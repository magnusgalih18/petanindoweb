@extends('layout.layoutManager')
@section('title','Welcome Home | Details Data Flower ')
@section('judulHeader','Details Data Flower ')
@section('content')
<div class="row">
    <div class="col-lg-6">
    <img src="{{asset('/storage/flower/'. $flower->flower_img)}}" alt="Bunga {{$flower->flower_name}}" class="img-fluid" style="width: 25rem;">
    </div>
    <div class="col-lg-6">
        <div class="text-justify">
            <h3>{{$flower->flower_name}}</h3>
            <h5 class="text-warning">Rp. {{$flower->flower_price}}</h5>
            <p>{{$flower->flower_description}}</p>
        </div>
    </div>
</div>
@endsection
