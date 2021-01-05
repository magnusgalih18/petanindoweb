@extends('seller.layoutSeller')
@section('title','Welcome Home | Update Data Produk ')
@section('judulHeader','Silahkan Update Data Produk ')
@section('content')

    {{-- <h3  style="font-family: sans-serif" >  </h3> --}}
    <div class="d-flex flex-row" style="padding-top: 4rem;padding-left: 4rem">
        <img class="flower-image" alt="Responsive image"  src={{URL::to('storage/'.$Flower -> flowerimage)}} style="height: 500px" width="450px">
        <div class="mx-3" style="align-content: justify;padding-left: 3rem">
            <form method="POST" action="/updateProduct/{{$Flower -> id}}" enctype="multipart/form-data">
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
                            <option value="{{ $Flower -> category_id ='1'}}">Hand Bouquet</option>
                            <option value="{{ $Flower -> category_id ='2'}}">Wedding Bouquet</option>
                            <option value="{{ $Flower -> category_id ='3'}}">Table Arrangement</option>
                            <option value="{{ $Flower -> category_id ='4'}}">Funeral Bouquet</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingInput">Flower Name</label>
                        <input type="text" class="form-control" id="floatingInput" placeholder="(Flower Name...)" value="{{$Flower -> flowername}}" name="flowername">
                    </div>
                    <div class="form-floating">
                        <label for="floatingInput">Flower Price</label>
                        <input type="text" class="form-control" id="floatingInput" placeholder="(>=50000)" value="{{$Flower -> flowerprice}}" name="flowerprice">
                    </div>
                    <div class="form-floating">
                        <label for="floatingInput">Flower Description</label>
                        <textarea class="form-control" placeholder="(Description....)" value="{{$Flower -> flowerdescription}}" name="flowerdescription"></textarea>
                    </div>
                    <div class="form-floating">
                        <label for="floatingInput">Flower Image</label>
                        <input type="file" class="form-control" id="inputGroupFile01" value="{{$Flower -> flowerimage}}" name="flowerimage">
                    </div>
                    <button class="btn btn-primary" type="submit">Update Flower</button>
                </div>
            </form>
        </div>
    </div>
@endsection

