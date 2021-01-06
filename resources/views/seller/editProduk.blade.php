@extends('seller.layoutSeller')
@section('title','Welcome Home | Update Data Produk ')
@section('judulHeader','Silahkan Update Data Produk ')
@section('content')

    {{-- <h3  style="font-family: sans-serif" >  </h3> --}}
    <div class="d-flex flex-row" style="padding-top: 4rem;padding-left: 4rem">
        <img class="flower-image" alt="Responsive image"  src="{{URL::to('storage/'.$item -> itemsimage)}}" style="height: 500px" width="450px">
        <div class="mx-3" style="align-content: justify;padding-left: 3rem">
            <form method="POST" action="/updateProduct/{{$item -> id}}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="mx-1 align-self-center">
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    @endif
                    <div class="form-floating">
                        <label for="floatingSelect">Category</label>
                        <select class="form-select" id="floatingSelect" name="category_id">
                            <option selected>Category</option>
                            <option value="{{ $item -> category_id ='1'}}">Sayuran</option>
                            <option value="{{ $item -> category_id ='2'}}">Buah</option>
                            <option value="{{ $item -> category_id ='3'}}">Daging</option>
                            <option value="{{ $item -> category_id ='4'}}">Sembako</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <label for="floatingInput">Nama Produk</label>
                        <input type="text" class="form-control" id="floatingInput" placeholder="(Flower Name...)" value="{{$item -> itemsname}}" name="itemsname">
                    </div>
                    <br>
                    <div class="form-floating">
                        <label for="floatingInput">Harga Produk</label>
                        <input type="text" class="form-control" id="floatingInput" placeholder="(>=0)" value="{{$item -> itemsprice}}" name="itemsprice">
                    </div>
                    <br>
                    <div class="form-floating">
                        <label for="floatingInput">Deskripsi Produk</label>
                        <textarea class="form-control" placeholder="(Description....)" value="{{$item -> itemsdescription}}" name="itemsdescription"></textarea>
                    </div>
                    <br>
                    <div class="form-floating">
                        <label for="floatingInput">Foto Produk</label>
                        <input type="file" class="form-control" id="inputGroupFile01" value="{{$item->itemsimage}}" name="itemsimage">
                    </div>
                    <br>
                    <button class="btn btn-primary" type="submit">Update Flower</button>
                </div>
            </form>
        </div>
    </div>
@endsection

