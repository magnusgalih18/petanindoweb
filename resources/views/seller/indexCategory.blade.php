@extends('seller.layoutSeller')
@section('title','Home Toko | Dashboard ')
@section('judulHeader','Selemat Datang di Toko Kamu')
@section('content')
    @if(session()->has('success'))
        <script>
            alert('{{session()->get('success')}}');
        </script>
    @endif
    <h3 class="text-center font-weight-bold m-4 text-uppercase">{{$Categories -> category_name}}</h3>
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
                                    <a href="/updateProduct/{{$items->id}}" class="btn btn-info" role="button"><i class="fas fa-edit"></i></a>
                                    <a href="/detailProduk/{{$items->id}}" class="btn btn-info" role="button">Lihat Produk</a>
                                    <form class = "form-inline" method="POST" action="/dashboardSeller/{{$items->id}}">
                                        @method('DELETE')
                                        @csrf
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
