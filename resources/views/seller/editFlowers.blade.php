@extends('layout.layoutManager')
@section('title','Welcome Home | Update Data Flower ')
@section('judulHeader','Please Update Data Flower ')
@section('content')
<form action="{{url('/manager/flower/'. $flower->id.'/edit')}}" method="POST" enctype="multipart/form-data">
    <label for="category">Category</label>
    <select class="custom-select {{$errors->has('category') ? 'is-invalid' : '' }}" name="category">
        <option value="">---</option>
        @foreach ($category as $ctg)
        <option @if($ctg->id == $flower->category_id)
            selected
            @endif
            value="{{$ctg->id}}">{{$ctg->category_name}}</option>
        @endforeach
    </select>
    @if ($errors->has('category'))
    <div class="invalid-feedback">
        {{$errors->first('category')}}
    </div>
    @endif
    <div class="form-group ">
        <label for="flowerName">Flower Name</label>
        <input type="text" class="form-control {{$errors->has('flowerName') ? 'is-invalid' : '' }}" id="flowerName"
            placeholder="Mawar" name="flowerName" value="{{$flower->flower_name}}">
        @if ($errors->has('flowerName'))
        <div class="invalid-feedback">
            {{$errors->first('flowerName')}}
        </div>
        @endif
    </div>
    <div class="form-group ">
        <label for="flowerPrice">Flower Price in Rp.</label>
        <input name="flowerPrice" type="number"
            class="form-control {{$errors->has('flowerPrice') ? 'is-invalid' : '' }}" name="flowerPrice"
            id="flowerPrice" placeholder=" ex: Rp. 1000000" value="{{$flower->flower_price}}">
        @if ($errors->has('flowerPrice'))
        <div class="invalid-feedback">
            {{$errors->first('flowerPrice')}}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label for="desFlower">Flower Description</label>
        <textarea class="form-control {{$errors->has('desFlower') ? 'is-invalid' : '' }}" id="desFlower" rows="3"
            name="desFlower">{{$flower->flower_description}}</textarea>
        @if ($errors->has('desFlower'))
        <div class="invalid-feedback">
            {{$errors->first('desFlower')}}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label for="flowerImg">Flower Image</label>
        <input type="file" class="form-control-file {{$errors->has('flowerImg') ? 'is-invalid' : '' }}" id="flowerImg"
            name="flowerImg">

        @if ($errors->has('flowerImg'))
        <div class="invalid-feedback">
            {{$errors->first('flowerImg')}}
        </div>
        @endif
    </div>
    <input type="hidden" name="_method" value="PUT">
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('flower.index')}}"><button type="button" class="btn btn-outline-warning">Cancel</button></a>
</form>
@endsection
