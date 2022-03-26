@extends('layouts.user')
@section('css')
     <style>
         @media print {
             #printPageButton {
                 display: none;
             }
         }

     </style>
 @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('history') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="border">
                        <h3>Checkout selesai</h3>
                        <h5>Pesanan anda sudah sukses dicheckout
                        {{-- /**selanjutnya untuk pembayaran silahkan transfer di rekening<strong>Bank BRI Nomer Rekening : 32553-824629-591</strong>**/  --}}
                        dengan nominal : <strong>Rp.
                                {{ number_format($pesanan->jumlah_harga) }}</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                        @if (!empty($pesanan))
                            <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total Harga</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($pesanan_details as $pesanan_detail)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <img src="{{ $pesanan_detail->buku->image() }}" alt=""
                                                    class="card-img-top" style="width:30%;" alt="cover">
                                            </td>
                                            <td>{{ $pesanan_detail->buku->judul_buku }}</td>
                                            <td>{{ $pesanan_detail->jumlah }} buah</td>
                                            <td align="right">Rp. {{ number_format($pesanan_detail->buku->harga) }}</td>
                                            <td align="right">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>

                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                        <td align="right"><strong>Rp.
                                                {{ number_format($pesanan->jumlah_harga) }}</strong></td>

                                    </tr>
                                    <tr>
                                        <td colspan="5" align="right"><strong>Total yang harus ditransfer :</strong></td>
                                        <td align="right"><strong>Rp.
                                                {{ number_format($pesanan->jumlah_harga) }}</strong></td>

                                    </tr>

                                        <tr>
                                        <button id="printPageButton" onclick="window.print();" class="btn btn-primary"><i
                         class="fa fa-print">Print</i></button>
                                        </tr>

                                </tbody>
                            </table>
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
