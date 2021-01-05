@extends('main')

@section('title', 'changePassword')

@section('content')

    <br><br><br>
    <div class="container auth" style="margin-bottom: 91px"> <br>
        <h4 class="text-center text-uppercase" style="letter-spacing: 3px;">Change Password</h4>
        <hr>
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$errors->first()}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col col-lg-10">
                    <form action="/changedPass" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Current Password</label>
                            <div class="input-group" >
                                <input type="password" name="password" class="form-control"  autofocus>
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" name="new_password" class="form-control"  autofocus>
                            </div>
                            <div class="form-group">
                                <label>Confirmation New Password</label>
                                <input type="password" name="password_confirm" class="form-control"  autofocus>
                            </div>
                            <button type="submit" class="btn btn-primary">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

