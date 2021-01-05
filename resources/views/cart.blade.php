@extends('main')

@section('title', 'Shopping Cart')

@section('content')
    <br><br><br>
    <div class="container">
            <h1 class="text-center">Shopping Cart</h1>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <h5 class="text-danger">{{$errors->first()}}</h5>
                @endforeach
            @endif
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @foreach($Carts as $Cart)
                <div class="row" style="margin: 10px 0; border: 1px solid grey; height: 12rem;">
                    <div class="col-lg-3">
                        <img src="{{URL::to('storage/'.$Cart -> itemsimage)}}" class="img-fluid" alt="Responsive image" style="height: 11rem; margin-top: 7px;">
                    </div>
                    <div class="col-lg-3 d-flex align-items-center">
                        <h5 class="mx-auto">{{$Cart-> itemsname}}</h5>
                    </div>
                    <div class="col-lg-2  d-flex align-items-center">
                        <h5 class="font-weight-bold"> Rp. {{($Cart -> itemsprice)*($Cart -> quantity)}} </h5>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center">
                            <form class = "form-inline" method="POST" action="/cart/{{$Cart -> id}}">
                                @method('PATCH')
                                @csrf
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control"  value="{{$Cart -> quantity}}" name="quantity">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        <form class = "form-inline" method="POST" action="/cart/{{$Cart -> id}}">
                            @method('DELETE')
                            @csrf
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Total: Rp. {{$Total}}</h3>
                    <form class = "text-center" method="POST" action="/home">
                        @csrf
                        <button class="btn btn-primary text-center">Check Out</button>
                    </form>
                </div>
            </div>
{{--            <div class="row d-flex align-items-center" style="height: 50vh">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h1 class="font-weight-bold text-center">Shopping Cart Is Empty</h1>--}}
{{--                </div>--}}
{{--            </div>--}}
    </div>
@endsection
