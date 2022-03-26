@extends('layouts.user')
@section('container')
                    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="{{ asset('image/buku/' . $buku->cover) }}" alt="First slide"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <center><h2>{{ $buku->judul_buku }}</h2>
                        <h5>{{ $buku->harga }}</h5>
                        <p class="available-stock"><span>Stok Tersedia : {{$buku->stok}}</span></center>
                            <p>
                                <div class="form-group quantity-box">
                                    <li>
                                        <form method="post" action="{{ url('pesan') }}/{{ $buku->id }}">
                                                    @csrf
                                                    <input type="number" value="0" min="0" max="{{$buku->stok}}" name="jumlah_pesan" class="form-control"
                                                        required=""><br>
                                                    <center><button type="submit"data-fancybox-close="" class="btn hvr-hover"><i
                                                            class="fa fa-shopping-cart"></i> Masukkan Keranjang</button></center>
                                                </form>


                                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

@endsection
@section('footer')
@endsection
