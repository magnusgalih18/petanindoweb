@extends('seller.layoutSeller')
@section('title','Welcome Home | Manager ')
@section('judulHeader','Welcome To Dahboard Manager')
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
<hr class="nwFlower">
<div class="container my-4">
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
        <div class="controls-top">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
        </div>
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            @for($i=0;$i<2;$i++)
            <!--First slide-->
        <div class="carousel-item {{ ($i == 0) ? 'active' : ''}}">
                <div class="row">
                    @for($j=$countData; $j>($countData-6); $j--)
                    <div class="col-md-4">
                        <div class="card-group">
{{--                            <div class="card" style="height:34rem;">--}}
{{--                                <a href="{{url('/manager/flower/'.$flowers[$j-1]->slug)}}">--}}
{{--                                <img class="card-img-top" src="{{asset('storage/flower/' . $flowers[$j-1]->flower_img)}}" alt="Card image cap" height="300">--}}
{{--                                </a>--}}
{{--                              <div class="card-body">--}}
{{--                                <h5 class="card-title">{{$flowers[$j-1]->flower_name}}</h5>--}}
{{--                                <p class="card-text" style="color:blue">Rp.{{$flowers[$j-1]->flower_price}}</p>--}}
{{--                                <p class="card-text">{{substr($flowers[$j-1]->flower_description,0,150)}}</p>--}}
{{--                              </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    @php
                        if($j == ($countData-2)){
                            $countData -= 3;
                            break;
                        }
                    @endphp
                    @endfor
                </div>
            </div>
            @endfor
            <!--/.First slide-->
        </div>
        <!--/.Slides-->
    </div>
</div>
@endsection
