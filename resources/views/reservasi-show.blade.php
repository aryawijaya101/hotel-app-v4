@extends('layouts.tamu',['title'=>'Reservasi'])

@section('content')
<div class="container m-0 py-4"  data-aos="fade-up" data-aos-duration="1000">
    <div class="row mt-2 justify-content-center">
        <div class="col-lg-8 offset-lg-3">
            <div class="jumbotron shadow border text-white " style="background-color: #E2703A">
                <h1 class="display-4 font-weight-bold dm_serif_text"  >Berhasil Reservasi!</h1>
                <p class="lead roboto">Terimakasih {{ $row->nama_tamu }}, telah melakukan reservasi di hotel kami.</p>
                <hr class="my-4" style="border: 2px solid #9C3D54;">
                <p>Untuk selanjutnya silahkan cetak atau download Booking Invoice</p>
                <a class="btn btn-warning btn-lg"
                    target="_blank"
                    href="{{ route('guest.reservasi.invoice', ['pemesanan'=>$row->id] ) }}">
                    <i class="fas fa-print"></i> Cetak Booking Invoice
                </a>
            </div>
        </div>
    </div>

</div>
@endsection
