@extends('seller.layoutSeller')
@section('title','Welcome Home | Details Data Produk ')
@section('judulHeader','Details Data Produk ')
@section('content')
<div class="row">
    <div class="col-lg-6">
    <img src="{{URL::to('storage/'.$items -> itemsimage)}}" alt="Bunga {{$items->itemsname}}" class="img-fluid" style="width: 25rem;">
    </div>
    <div class="col-lg-6">
        <div class="text-justify">
            <h3>{{$items->itemsname}}</h3>
            <h5 class="text-warning">Rp. {{$items->itemsprice}}</h5>
            <h6>Deskripsi</h6>
            <p>{{$items->itemsdescription}}</p>
        </div>
    </div>
</div>
@endsection
