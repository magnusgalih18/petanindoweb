@extends('seller.layoutSeller')
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
        <h3 class="text-center font-weight-bold m-4 text-uppercase">Hasil Pencarian</h3>
        <div class="container">
            <div class="row mx-auto">
                @foreach($Sayur as $Sayurs)
                    <div class="col-lg-4">
                        <div class="card" style="height:37rem;">
                            <a href="#">
                                <img src="{{URL::to('storage/'.$Sayurs -> itemsimage)}}" class="card-img-top"
                                     alt="Gambar Item" height="360">
                            </a>
                            <div class="card-body bg-white">
                                <h5 class="card-title">{{$Sayurs -> itemsname}}</h5>
                                <p class="card-text">Rp.{{$Sayurs -> itemsprice}}</p>
                                <p class="card-text">{{$Sayurs -> itemsdescription}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</div>
@endsection
