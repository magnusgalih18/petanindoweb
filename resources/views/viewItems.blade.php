@extends('main')

@section('title', 'Lihat Items')

@section('content')

    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Lihat Kategori lainnya: </li>
                        @foreach ($Category as $ctg)
                            <li class="breadcrumb-item"><a href="/viewProduct/{{$ctg -> id}}" class="text-decoration-none"> {{$ctg->category_name}}</a></li>
                        @endforeach
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            @foreach ($items as $item)
                <div class="col-lg-3  mt-5 mb-5" >
                    <div class="card-group" style="height: 26rem;">
                        <div class="card">
                            <a href="#">
                                <div class="text-center">
                                    <img class="card-img-top" src="{{URL::to('storage/'.$item -> itemsimage)}}"
                                         alt="Card image cap" height="250">
                                </div>
                            </a>
                            <div class="mt-5">
                                <h5 class="font-weight-bold text-center" style="height: 60px; padding:5px; color:black">
                                    {{$item -> itemsname}}</h5>
                                <p class="text-center">Rp.{{$item -> itemsprice}}</p>
                            </div>
                            <div class="LihatBungaBtn" style="display: flex; justify-content: center; margin-bottom: 10px">
                                <a href="/detailItems/{{$item->id}}" class="btn btn-info" role="button">Lihat Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> <br>
        <div class="pagination justify-content-center mt-3">
            {{$items-> links()}}
        </div>
    </div>
@endsection
