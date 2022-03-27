@extends('layouts.tamu',['title'=>$row->nama_namar])

@section('content')
<div class="container">
    <h1 class="text-center m-0 py-4 montserrat font-weight-bold"
        data-aos="fade-up" data-aos-duration="1000" data-aos-offset="0" data-aos-delay="150">
        {{ $row->nama_kamar }}
        <hr class="w-50 m-auto" style="border: 2px solid #B24080;">
    </h1>
    <div class="row mb-5 justify-content-center">
        <div class="col-md-8">
            <img src="{{ $row->foto_kamar }}" class="img-fluid w-100">
        </div>
    </div>

    <br>

    <div class="row mb-5 justify-content-center mt-4 roboto">

        <div class="col-md-4 p-0 text-left mt-3 "
            data-aos="fade-right" data-aos-offset="275" data-aos-duration="800" data-aos-delay="50">
            <p >{{ $row->deskripsi_kamar }}</p>
        </div>
        <div class="col-md-3 p-0 text-center mt-3 "
            data-aos="fade-up" data-aos-offset="275" data-aos-duration="800" data-aos-delay="650">
            <h5 class="font-weight-bold" >
                Fasilitas Kamar :
            </h5>
            <ul class="list-group list-group-flush w-50 m-auto" >
                @foreach ( $fasilitas as $fas )
                <li class="list-group-item " style="background-color: #f7f1e7">{{ $fas->nama_fasilitas_kamar }}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-3 p-0 text-center mt-3"
            data-aos="fade-left" data-aos-offset="275" data-aos-duration="800" data-aos-delay="350">
            <h4 class="font-weight-bold">Rp. {{ $row->harga_kamar }} <small>/ Malam.</small> </h4>

        </div>
    </div>

</div>
@endsection
