{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">--}}
{{--    <title>Change Password &mdash; Flowelto Shop</title>--}}

{{--    <!-- General CSS Files -->--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">--}}

{{--    <!-- CSS Libraries -->--}}
{{--    <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">--}}
{{--</head>--}}

{{--<body>--}}
@extends('main')

@section('title', 'changePassword')

{{--@section('content')--}}
{{--    <h1 class="title" style="padding-top: 2rem">Change Password</h1>--}}

{{--    @if($errors->any())--}}
{{--        @foreach($errors->all() as $error)--}}
{{--            {{$error}}--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--    <div class="text-center">--}}
{{--        <form action="/changedPassword" method="post">--}}
{{--            @csrf--}}
{{--            <div class="text-center" style="padding-top: 3rem">--}}

{{--                <div class="col-md-4 control-label text-center">--}}
{{--                    <label for="password" class="d-block"><h5>Old Password</h5></label>--}}
{{--                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">--}}
{{--                    <div id="pwindicator" class="pwindicator">--}}
{{--                        <div class="bar"></div>--}}
{{--                        <div class="label"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-4 control-label text-center">--}}
{{--                    <label for="password2" class="d-block"><h5>New Password</h5></label>--}}
{{--                    <input id="password2" type="password" class="form-control" name="new_password">--}}
{{--                </div>--}}


{{--                <div class="col-md-4 control-label text-center">--}}
{{--                    <label for="password3" class="d-block"><h5>Confirm New Password</h5></label>--}}
{{--                    <input id="password3" type="password" class="form-control" name="password_confirm">--}}
{{--                </div>--}}


{{--                <div class="col-md-4 control-label text-center">--}}
{{--                    <button type="submit" class="btn btn-primary" style="background-color: orangered;color: black">--}}
{{--                        Update Password--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}


{{--@endsection--}}

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

{{--<!-- General JS Scripts -->--}}
{{--<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>--}}

{{--</body>--}}

{{--</html>--}}
