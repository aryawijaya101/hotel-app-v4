@extends('layouts.tamu',['title'=>'Kamar'])

@section('content')
<div class="container mb-5">
    <h1 class="text-center m-0 py-4 montserrat font-weight-bold"
        data-aos="fade-up" data-aos-duration="1000" data-aos-offset="0" data-aos-delay="150">
        Kamar
        <hr class="w-50 m-auto" style="border: 2px solid #B24080;">
    </h1>

    <div class="row kamar justify-content-left">
        @foreach ( $kamar as $row )
        <div class="col-md-3">
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





    {{-- <div class="row kamar justify-content-left mb-3">
        @foreach ( $kamar as $row )
            <div class="col-md-3">

                <a href="{{ route('guest.kamar.show',['kamar'=>$row->id]) }}">
                    <img src="{{ $row->foto_kamar }}" class="img-fluid rounded img-thumbnail" />

                </a>
            </div>
            <div class="col-md">
                <h2>
                    <a href="{{ route('guest.kamar.show',['kamar'=>$row->id]) }}">
                    {{ $row->nama_kamar }}
                    </a>
                </h2>
                <h5>Rp. {{ $row->harga_kamar }} <small>/ Malam.</small>
                </h5>
                <p> {{ $row->deskripsi_kamar }} </p>
            </div>
        @endforeach
    </div> --}}

</div>
@endsection
