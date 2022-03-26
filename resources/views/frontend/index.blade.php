@extends('layouts.user')
@section('container')
<body>



    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

   <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="asset/images/bg1.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> TokoBuku.</strong></h1>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="asset/images/bg2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> TokoBuku.</strong></h1>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="asset/images/bg3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> TokoBuku.</strong></h1>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Products  -->

    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Produk</h1>
                        <p>Menyediakan Berbagai Buku</p>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                @foreach ($buku as $data)
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="{{ asset('image/buku/' . $data->cover) }}" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="{{ url('pesan', $data->id) }}">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>{{ $data->judul_buku }}</h4>
                            <h5>{{ $data->harga }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</body>

</html>
@endsection
@section('footer')
@endsection
