@extends('layouts.tamu',['title'=>'Fasilitas'])

@section('content')
<div class="container">
    <h1 class="text-center m-0 py-4 montserrat font-weight-bold "
        data-aos="fade-up" data-aos-duration="1000" data-aos-offset="0" data-aos-delay="150">
        Fasilitas Hotel
        <hr class="w-50 m-auto" style="border: 2px solid #B24080;">
    </h1>

            @foreach ( $fasilitas as $row )
            <div class="card mt-4 mb-lg-5 bg-transparent shadow-none">
                <div class="row kamar no-gutters justify-content-between">
                    <div class="col-md-6 zoom">
                        <a href="{{ route('guest.fasilitas.show',['fasilitas'=>$row->id]) }}">
                        <img src="{{ $row->foto_fasilitas_hotel }}" class="img-fluid rounded" />
                        </a>
                    </div>
                    <div class="col-md-5 ">
                        <a href="{{ route('guest.fasilitas.show',['fasilitas'=>$row->id]) }}">
                        <h2 class="text-center room_fasilitas playfair_display" style="color: #864000">
                            {{ $row->nama_fasilitas_hotel }}
                        </h2>
                        </a>
                        <hr style="border: 1.5px solid #9C3D54;">
                        <p class="roboto"> {{ $row->deskripsi_fasilitas_hotel }} </p>
                        <hr style="border: 1.5px solid #9C3D54;">
                    </div>

                </div>
            </div>
            @endforeach


</div>

@endsection
