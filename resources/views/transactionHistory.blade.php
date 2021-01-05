@extends('main')

@section('title', 'Daftar Transaksi')

@section('content')
    <br><br><br>
    <div class="container">
        <table class="table table-dark table-hover">
            <thead>
            <tr class="text-center text-uppercase">
                <th scope="col">Transaction History</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Trans as $Tran)
                <tr class="text-center">
                    <td>
                        <a href="/transactionDetail/{{$Tran -> id}}" style=" color: black; text-decoration: none;"> Transaction at {{$Tran->created_at}}</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
