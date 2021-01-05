@extends('main')

@section('title', 'About Us')

@section('content')
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
    <br><br><br><br>

    <div class="container">
        <div class="row">
            <div class="text-center">
                <h3>Sekilas Tentang Petanindo</h3> <br><br>
                <p>PetanIndo merupakan suatu website dimana melalui platform PetanIndo para petani
                    dapat menjual hasil panen mereka melalui PetanIndo, sehingga masyarakat umum dan restoran
                    dapat membeli bahan baku dari para petani dengan kualitas yang baik serta dalam keadaan
                    segar dan dengan harga yang terjangkau. Kami membuat produk ini awalnya dengan ide yang
                    memiliki tujuan untuk mensejahterakan kehidupan para petani. Lalu dari ide itu kami
                    kembangkan ke dalam bentuk website bernama “PetanIndo” yang sangat bermanfaat bagi
                    petani dan masyarakat.</p>
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
@endsection
