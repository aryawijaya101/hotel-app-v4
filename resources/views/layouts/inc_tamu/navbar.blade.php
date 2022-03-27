<nav class="navbar fixed-top  navbar-expand-md navbar-dark shadow" style="background-color: #781D42"
    data-aos="fade-down" data-aos-duration="1000">
    <div class="container">
        <a class="navbar-brand h1 dm_serif_text" href="{{ route('home') }}" style="color: #FFF9B2">
            <img src="{{ url('images/logo_1.jpg') }}" width="30" height="30" class="d-inline-block align-top img-circle" alt="Logo">
            Sunshine Pangandaran Hotel
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse dm_serif_text" id="navbarNav">
            <ul class="navbar-nav ml-auto ">
                <x-nav-item-tamu label="Home" :link="route('home')" />
                <x-nav-item-tamu label="Fasilitas Hotel" :link="route('guest.fasilitas.index')" />
                <x-nav-item-tamu label="Kamar" :link="route('guest.kamar.index')" />
                <button type="button" class="btn btn-sm btn-warning " >
                    <x-nav-item-tamu label="Reservasi" :link="route('guest.reservasi.create')"  />
                </button>
            </ul>
        </div>
    </div>
</nav>
