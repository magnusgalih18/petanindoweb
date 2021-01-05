@extends('seller.layoutSeller')
@section('title','Home Toko | Dashboard ')
@section('judulHeader','Selemat Datang di Toko Kamu')
@section('content')
@if(session()->has('success'))
    <script>
        alert('{{session()->get('success')}}');
    </script>
@endif
<div class="row justify-content-md-center">
    <div class="col-sm-4">
        <div class="card-counter info">
            <i class="fas fa-store"></i>
            <span class="count-numbers">{{$countData}}</span>
            <span class="count-name">Items</span>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card-counter success">
            <i class="fas fa-shopping-cart"></i>
            <span class="count-numbers">{{$countTr}}</span>
            <span class="count-name">Transactions</span>
        </div>
    </div>
</div>
<hr class="nwProduk">
<h3 class="text-center font-weight-bold m-4 text-uppercase">Produk Kamu</h3>
<div class="container my-4">

    <div class="row">
        <div class="container">
            <div class="row mx-auto">
                @foreach($item as $items)
                    <div class="col-lg-4 mt-4 mb-4">
                        <div class="card" style="height:37rem;">
                            <a href="#">
                                <img src="{{URL::to('storage/'.$items -> itemsimage)}}" class="card-img-top"
                                     alt="Gambar Item" height="360">
                            </a>
                            <div class="card-body bg-white">
                                <h5 class="card-title">{{$items -> itemsname}}</h5>
                                <p class="card-text">Rp.{{$items -> itemsprice}}</p>
                                <p class="card-text">{{$items -> itemsdescription}}</p>
                            </div>
                            <div class="kumpulanbutton" style="display: flex; justify-content: center; margin-bottom: 10px">
                                <form class = "form-inline" method="POST" action="#">
                                    {{--                                @method('PATCH')--}}
                                    {{--                                @csrf--}}
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="fas fa-edit"></i></button>
                                    </div>
                                </form>
                                <a href="/detailProduk/{{$items->id}}" class="btn btn-info" role="button">Lihat Produk</a>
                                <form class = "form-inline" method="POST" action="#">
                                    {{--                                @method('DELETE')--}}
                                    {{--                                @csrf--}}
                                    <div class="input-group-append">
                                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="pagination justify-content-center mt-3">
        {{$item-> links()}}
    </div>
</div>
@endsection
