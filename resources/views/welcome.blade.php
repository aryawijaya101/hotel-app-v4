@extends('layouts.tamu')

@section('content')
<div class="container-fluid">

    <x-form-pesan />

    <br>

    <div class="container">

    <div data-aos="fade-down" data-aos-duration="1000">
        <h1 class="text-center my-5 montserrat font-weight-bold">Fasilitas Hotel
            <hr class="w-50 m-auto" style="border: 2px solid #B24080;">
        </h1>

        <div class="row fasilitas justify-content-left mb-5" >
            @foreach ( $fasilitas as $row )
            <div class="col-md-3" >
                <div class="card shadow zoom " style="background-color: #ECAC5D">

                    <a href="{{ route('guest.fasilitas.show',['fasilitas'=>$row->id]) }}">
                        <img src="{{ $row->foto_fasilitas_hotel }}" class="img-fluid rounded card-img-top" />
                    </a>
                    <div class="card-body m-auto pt-3 pb-2">
                        <h5 class="font-weight-bold playfair_display" style="color: #3F0713">
                            {{ $row->nama_fasilitas_hotel }}
                        </h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    <br>

    <h1 class="text-center my-5 montserrat font-weight-bold">Kamar
        <hr class="w-50 m-auto" style="border: 2px solid #B24080;">
    </h1>

    <div class="row kamar justify-content-left mb-5">
        @foreach ( $kamar as $row )
        <div class="col-md-4" >
            <div class="card box" style="background-color: #ECAC5D">

                <a href="{{ route('guest.kamar.show',['kamar'=>$row->id]) }}">
                    <img src="{{ $row->foto_kamar }}" class="img-fluid rounded card-img-top " />
                    <div class="card-img-overlay room_fasilitas">
                        <h4 class="" style="color: #FFEFCF" >
                            <span class="badge" style="background-color: #310B0B" >
                                Rp. {{ $row->harga_kamar }} <small>/ Malam.</small>
                            </span>
                        </h4>
                    </div>
                </a>

                <div class="card-body m-auto pt-3 pb-2 ">
                    <h5 class="card-title font-weight-bold oswald" style="color: #3F0713">
                        {{ $row->nama_kamar }}
                    </h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>

</div>

@endsection
