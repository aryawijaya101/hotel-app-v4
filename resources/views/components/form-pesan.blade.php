<div class="container Oswald " data-aos="fade-up"
data-aos-duration="1000"
data-aos-delay="400">
    <form method="get" action="{{ route('guest.reservasi.create') }}" class="py-4 px-2 form-pesan shadow" style="background-color: #A3423C" >
        <div class="form-row justify-content-center ">
            <div class="col-md-3">
                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent border-0 text-white ">Check In</span>
                    </div>
                    <input type="date" name="checkin" class="form-control rounded border-white bg-transparent text-white" placeholder="Check In">
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent border-0 text-white ">Check Out</span>
                    </div>
                    <input type="date" name="checkout" class="form-control rounded border-white bg-transparent text-white" placeholder="Check Out">
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent border-0 text-white ">Jumlah Kamar</span>
                    </div>
                    <input type="number" name="jumlah" class="form-control rounded border-white bg-transparent text-white" min="1" maxlength="3">
                </div>
            </div>

        </div>
        <div class="col-md-4 m-auto pt-3">
            <button type="submit" class="btn btn-block btn-warning font-weight-bold " style=""> Pesan Sekarang</button>
        </div>
    </form>

</div>
