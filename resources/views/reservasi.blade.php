@extends('layouts.tamu',['title'=>'Reservasi'])

@section('content')
<div class="container">
    <h1 class="text-center my-4 montserrat font-weight-bold"
        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
        Reservasi
        <hr class="w-50 m-auto" style="border: 2px solid #B24080;">
    </h1>
    <br>
    <div class="row mb-5">
        <div class="col-lg-8 offset-lg-2 "
            data-aos="fade-right" data-aos-offset="0" data-aos-duration="1000" >

            <form method="post" action="?" class="card card-primary text-center box" style="background-color: #ECAC5D">

                <div class="card-header py-1" style="background-color: #3F0713"></div>

                <div class="card-body playfair_display">

                    <x-input-reservasi label="Check In"
                     name="checkin" type="date" :value="request()->checkin" />

                    <x-input-reservasi label="Check Out"
                     name="checkout" type="date" :value="request()->checkout" />

                    <x-select-reservasi label="Kamar"
                     name="kamar" :data-option="$kamar" />

                    <x-input-reservasi label="Jumlah Kamar"
                     name="jumlah_kamar" type="number" :value="request()->jumlah" />

                    <x-input-reservasi label="Nama Pemesan"
                     name="nama_pemesan" />

                    <x-input-reservasi label="Alamat Email"
                     name="email" type="email" />

                    <x-input-reservasi label="Nomor Handphone"
                     name="nomor_handphone" />

                    <x-input-reservasi label="Nama Tamu"
                     name="nama_tamu" />

                </div>

                <div class="card-footer open_sans">
                    <button class="btn btn-block w-75 m-auto reservasi_tombol" type="submit">
                        Booking Sekarang
                    </button>
                </div>

            </form>
            {{-- ./card --}}
        </div>
    </div>

</div>
@endsection
