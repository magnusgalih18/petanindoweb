@extends('seller.layoutSeller')
@section('title','Welcome Home | Input Data Produk ')
@section('judulHeader','Please Input Data Produk ')
@section('content')

    {{-- <h3  style="font-family: sans-serif" >  </h3> --}}
    <div class="d-flex flex-row" style="padding-top: 4rem;padding-left: 4rem">
        <div class="mx-3" style="align-content: justify;padding-left: 3rem">
            <form method="POST" action="/tambahProduk/simpan" enctype="multipart/form-data">
                @csrf
                <div class="mx-1 align-self-center">
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    @endif
                    <div class="form-floating">
                        <label for="floatingSelect"><h4>Category</h4></label>
                        <select class="form-select" id="floatingSelect" name="category_id">
                            <option selected>Category</option>
                            <option value="1">Sayur</option>
                            <option value="2">Buah</option>
                            <option value="3">Daging</option>
                            <option value="4">Sembako</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingInput"><h4>Item Name</h4></label>
                        <input type="text" class="form-control" id="floatingInput" placeholder="Nama Produk..." value="{{ old('itemsname') }}" name="itemsname">
                    </div>
                    <div class="form-floating">
                        <label for="floatingInput"><h4>Item Price</h4></label>
                        <input type="text" class="form-control" id="floatingInput" placeholder="Rp>=0" value="{{ old('itemsprice') }}" name="itemsprice">
                    </div>
                    <br>
                    <div class="form-floating">
                        <label for="floatingInput"><h4>Item Description</h4></label>
                        <textarea class="form-control" placeholder="Deskripsi Produk...." value="{{ old('itemsdescription') }}" name="itemsdescription"></textarea>
                    </div>
                    <br>
                    <div class="form-floating">
                        <label for="floatingInput"><h4>Item Image</h4></label>
                        <input type="file" class="form-control" id="inputGroupFile01" value="{{ old('itemsimage') }}" name="itemsimage">
                    </div>
                   
                    <br><br>
                    <button class="btn btn-primary"  type="submit">Add Item</button>
                </div>
            </form>
        </div>
    </div>
@endsection
