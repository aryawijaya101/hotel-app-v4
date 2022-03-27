@extends('layouts.tamu',['title'=>$row->nama_fasilitas_hotel])

@section('content')
<div class="container">
    <h1 class="text-center m-0 py-4 montserrat font-weight-bold"
        data-aos="fade-up" data-aos-duration="1000" data-aos-offset="0" data-aos-delay="150">
        {{ $row->nama_fasilitas_hotel }}
        <hr class="w-50 m-auto" style="border: 2px solid #B24080;">
    </h1>
    <div class="row mb-5 justify-content-center">
        <div class="col-md-8">
            <img src="{{ $row->foto_fasilitas_hotel }}" class="img-fluid w-100 shadow">
        </div>
    </div>
    <div class="row mb-5 justify-content-center mt-4 roboto">
        <div class="col-md-6">
            {{ $row->deskripsi_fasilitas_hotel }}
        </div>
    </div>

</div>
@endsection
