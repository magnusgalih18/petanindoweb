@extends('main')

@section('title', 'Detail Produk')

@section('content')
    <br><br><br><br>
    <div class="container" style="min-height:75vh">
        <div class="row">
            <div class="img-hover-zoom col-lg-6">
                <img src="{{URL::to('storage/'.$items -> itemsimage)}}" class="img-fluid" style="width: 25rem;">
            </div>
            <div class="col-lg-6">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p>{{session()->get('success')}}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="text-justify">
                    <h3>{{$items->itemsname}}</h3>
                    <h5 class="text-warning">Rp. {{$items->itemsprice}}</h5>
                    <p>{{$items->itemsdescription}}</p>
                </div>
                    <div class="text-justify">
                        <h4>Penjual: </h4>
                        <h5 class="text-info">{{$items->username}}</h5>
                    </div>
                    @auth
                        @if(Auth::user()->role === 'users')
                        <form class = "form-inline" method="POST" action="/detailFlower/{{$items -> id}}/add">
                            <div class="input-group mb-3">
                                <input type="number" style="border: 3px solid rgb(199, 193, 193);" min="0" name="quantity">
                                <div class="input-group-append">
                                    @csrf()
                                    <button type="submit" class="btn btn-info">Tambah Ke Keranjang <i class="fas fa-cart-plus"></i> </button>
                                </div>
                                @if ($errors->any())
                                    <div class="invalid-feedback">
                                        {{$errors->first()}}
                                    </div>
                                @endif
                            </div>
                        </form>
                        @endif
                    @endauth
                @guest
                            <div class="input-group mb-3">
                                <input type="number" style="border: 3px solid rgb(199, 193, 193);" min="0" name="quantity">
                                <div class="input-group-append">
                                    <a href="/login" class="btn btn-info" role="button">Tambah Ke Keranjang <i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>
                        <div class="text-danger">
                            <h4>Silahkan Login Terlebih Dahulu Untuk membeli</h4>
                        </div>
                    @endguest
            </div>
        </div>
    </div>
@endsection
