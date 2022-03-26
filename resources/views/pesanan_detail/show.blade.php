@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Buku</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
     <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Buku
                    <button id="printPageButton" onclick="window.print();" class="btn btn-primary float-right"><i
                         class="fa fa-print">Print</i></button>
                </div>
                <div class="card-body">
                @csrf
                @method('put')
                    <div class="form-group">
                            <label for="">Cover Buku</label>
                            <br>
                            <img src="{{ $pesanan_detail->buku->image() }}" height="200" style="padding:5px;" />
                    </div>
                    <div class="form-group">
                         <label for="">Nama Barang</label>
                         <input type="text" name="buku_id" value="{{$pesanan_detail->buku->judul_buku}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                         <label for="">Jumlah</label>
                         <input type="text" name="jumlah" value="{{$pesanan_detail->jumlah}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                         <label for="">Harga</label>
                         <input type="text" name="buku_id" value="{{$pesanan_detail->buku->harga}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                         <label for="">Jumlah Harga</label>
                         <input type="text" name="jumlah_harga" value="{{$pesanan_detail->jumlah_harga}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{route('pesanan_detail.index')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
    <style>
         @media print {
             #printPageButton {
                 display: none;
             }
         }

     </style>
@endsection
