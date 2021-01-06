@extends('main')

@section('title', 'Homepage')

@section('content')
<br><br>
@if(session()->has('success'))
<script>
    alert('{{session()->get('success')}}');
</script>
@endif

<div class="viewcategory">
    <h3 class="text-center font-weight-bold m-4 text-uppercase">Hasil Pencarian</h3>
    <div class="container">
        <div class="row mx-auto">
            @foreach($Sayur as $Sayurs)
                <div class="col-lg-4">
                    <div class="card" style="height:37rem;">
                        <a href="/detailItems/{{$Sayurs->id}}">
                            <img src="{{URL::to('storage/'.$Sayurs -> itemsimage)}}" class="card-img-top"
                                 alt="Gambar Item" height="360">
                        </a>
                        <div class="card-body bg-white">
                            <h5 class="card-title">{{$Sayurs -> itemsname}}</h5>
                            <p class="card-text">Rp.{{$Sayurs -> itemsprice}}</p>
                            <p class="card-text">{{$Sayurs -> itemsdescription}}</p>
                        </div>
                        <div class="LihatBungaBtn" style="display: flex; justify-content: center; margin-bottom: 10px">
                            <a href="/detailItems/{{$Sayurs->id}}" class="btn btn-info" role="button">Lihat Produk</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<br><br>
@endsection
