@extends('main')

@section('title', 'Detail Transaksi ')

@section('content')
    <br><br><br>
    <div class="container">
        <h3 class="text-center">Transaction At {{$Head->created_at}}</h3> <br>
        @foreach($Trans as $Tran)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Flower Image</th>
                    <th scope="col">Flower Name</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Quantity</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="{{URL::to('storage/'.$Tran->items -> itemsimage)}}" alt="" width="150"></td>
                        <td>{{ $Tran->items ->itemsname }}</td>
                        <td>Rp. {{ $Tran->items ->itemsprice }}</td>
                        <td>{{$Tran->quantity}}</td>
                    </tr>
                <tr>
                    <th></th>
                    <th scope="col" colspan="2">Total Price</th>
                    <th scope="col ">Rp. {{$Total}}</th>
                </tr>
                </tbody>
            </table>
        @endforeach
    </div>
@endsection


