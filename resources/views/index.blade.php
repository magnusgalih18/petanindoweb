@extends('main')

@section('title', 'Homepage')

@section('content')
<br><br>
@if(session()->has('success'))
<script>
    alert('{{session()->get('success')}}');
</script>
@endif
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{URL::to('storage/img/banner/tagline.png')}}" class="d-block w-100 h-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{URL::to('storage/img/banner/kategori.png')}}" class="d-block w-100 h-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{URL::to('storage/img/banner/voucher.png')}}" class="d-block w-100 h-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{URL::to('storage/img/banner/aman.png')}}" class="d-block w-100 h-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="viewcategory">
    <h3 class="text-center font-weight-bold m-4 text-uppercase">Sayuran Terbaru</h3>
    <div class="container">
        <div class="row mx-auto">
            @foreach($Sayur as $Sayurs)
                <div class="col-lg-4">
                    <div class="card" style="height:37rem;">
                        <a href="#">
                            <img src="{{URL::to('storage/'.$Sayurs -> itemsimage)}}" class="card-img-top"
                                 alt="Gambar Item" height="360">
                        </a>
                        <div class="card-body bg-white">
                            <h5 class="card-title">{{$Sayurs -> itemsname}}</h5>
                            <p class="card-text">Rp.{{$Sayurs -> itemsprice}}</p>
                            <p class="card-text">{{$Sayurs -> itemsdescription}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="viewcategory">
    <h3 class="text-center font-weight-bold m-4 text-uppercase">Buah Terbaru</h3>
    <div class="container">
        <div class="row mx-auto">
            @foreach($Buah as $Buahs)
                <div class="col-lg-4">
                    <div class="card" style="height:37rem;">
                        <a href="#">
                            <img src="{{URL::to('storage/'.$Buahs -> itemsimage)}}" class="card-img-top"
                                 alt="Gambar Item" height="360">
                        </a>
                        <div class="card-body bg-white">
                            <h5 class="card-title">{{$Buahs -> itemsname}}</h5>
                            <p class="card-text">Rp.{{$Buahs -> itemsprice}}</p>
                            <p class="card-text">{{$Buahs -> itemsdescription}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="viewcategory">
    <h3 class="text-center font-weight-bold m-4 text-uppercase">Daging Terbaru</h3>
    <div class="container">
        <div class="row mx-auto">
            @foreach($Daging as $Dagings)
                <div class="col-lg-4">
                    <div class="card" style="height:37rem;">
                        <a href="#">
                            <img src="{{URL::to('storage/'.$Dagings -> itemsimage)}}" class="card-img-top"
                                 alt="Gambar Item" height="360">
                        </a>
                        <div class="card-body bg-white">
                            <h5 class="card-title">{{$Dagings -> itemsname}}</h5>
                            <p class="card-text">Rp.{{$Dagings -> itemsprice}}</p>
                            <p class="card-text">{{$Dagings -> itemsdescription}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="viewcategory">
    <h3 class="text-center font-weight-bold m-4 text-uppercase">Sembako Terbaru</h3>
    <div class="container">
        <div class="row mx-auto">
            @foreach($Sembako as $Sembakos)
                <div class="col-lg-4">
                    <div class="card" style="height:37rem;">
                        <a href="#">
                            <img src="{{URL::to('storage/'.$Sembakos -> itemsimage)}}" class="card-img-top"
                                 alt="Gambar Item" height="360">
                        </a>
                        <div class="card-body bg-white">
                            <h5 class="card-title">{{$Sembakos -> itemsname}}</h5>
                            <p class="card-text">Rp.{{$Sembakos -> itemsprice}}</p>
                            <p class="card-text">{{$Sembakos -> itemsdescription}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<br>
<div class="container">
    <h3 class="font-weight-bold text-center text-uppercase" style="margin-bottom: 30px">SHOP BY CATEGORY</h3>
    <div class="row">
        @foreach($Category as $Categories)
        <div class="col-sm-3 mt-5">
            <a href="/viewProduct/{{$Categories -> id}}" class="text-decoration-none text-dark">
                <div class="kotak">
                    <div class="img-hover-zoom text-center">
                        <img class="rounded-circle" src="{{URL::to('storage/'.$Categories -> category_Image)}}"
                            alt="Card image cap" width="180">
                    </div>
                    <div class="namaCategory">
                        <h6 class="text-center font-weight-bold">{{$Categories -> category_name}}</h6>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
<br><br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <br><br><br>
            <h3>Sekilas Tentang Petanindo</h3> <br><br>
            <p>PetanIndo merupakan suatu website dimana melalui platform PetanIndo para petani
                dapat menjual hasil panen mereka melalui PetanIndo, sehingga masyarakat umum dan restoran
                dapat membeli bahan baku dari para petani dengan kualitas yang baik serta dalam keadaan
                segar dan dengan harga yang terjangkau. Kami membuat produk ini awalnya dengan ide yang
                memiliki tujuan untuk mensejahterakan kehidupan para petani. Lalu dari ide itu kami
                kembangkan ke dalam bentuk website bernama “PetanIndo” yang sangat bermanfaat bagi
                petani dan masyarakat.</p>
        </div>
        <div class="col-sm-6">
            <img src="{{URL::to('storage/img/tentangindex.png')}}" alt="" style="width: 650px">
        </div>
    </div>
</div>

<br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4671523621087!2d106.77874291425805!3d-6.2019379624807485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6dcc7d2c4ad%3A0x209cb1eef39be168!2sBINUS%20University%2C%20Anggrek%20Campus!5e0!3m2!1sen!2sid!4v1602315875031!5m2!1sen!2sid"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
        <div class="col-sm-4">
            <br><br>
            <h3 class="ml-5">Lokasi Kami :</h3> <br><br>
            <p class="font-weight-bold ml-5">Binus University</p>
            <p class="ml-5">Jl. Raya Kb. Jeruk No.27, RT.2/RW.9, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah
                Khusus Ibukota Jakarta 11530</p>
        </div>
    </div>
</div>
<br><br>
@endsection
