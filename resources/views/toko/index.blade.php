@include('toko.header')

  <!-- Headline/Hero -->
  <!-- PC Version -->
  <div class="container-fluid px-0 d-none d-lg-block">
    <div class="row mx-0 justify-content-center" style="position: relative;">
      <div class="card">
          <img src="img/hero/toko.jpeg" alt="">
      </div>
    </div>
    <div class="row justify-content-center text-center" style="max-width: 100%;">
      <div class="col-6" style="width: 100%; transform: translateY(-88px);">
        <div class="input-group">
          <input class="form-control" type="text" placeholder="ex : gula, beras, minyak . . .">
          <div class="input-group-append">
            <button class="btn btn-light" type="button"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- End of Headline -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <hr><br>

  <!-- Featured -->
  <section class="similar shadow-sm bg-white p-3 mt-5 mb-5">
    <div class="container">
      <div class="col text-center">
        <h4>Produk lain yang mungkin anda suka</h4>
        <p>Berdasarkan produk yang baru-baru ini anda lihat</p>
      </div>
      <div class="row mb-0">
        @foreach ($b as $a)
        <div class="col-6 d-flex flex-row text-center justify-content-center">
          <figure class="figure">
            <div class="figure-img">
              <img src="{{ $a->gambar }}" height="320px" class="figure-imgm-0">
            </div>
            <a class="figure-caption text-center btn" href="">
              <h4>{{ $a->nama_barang }}</h4>
              <h4>{{ $a->harga }}</h4>
            </a>
          </figure>
        </div>
        @endforeach
        
        <!-- <a href="{{ url('/category') }}" class="btn btn-outline-secondary btn-sm mx-auto">Lihat Selengkapnya</a> -->
    </div>
  </section>
  <!-- End of Featured -->

  <!-- Bottom Jumbotron (Invisible) -->
  <section class="info mb-5">
    <div class="container p-5">
      <div class="row mx-0 mt-5 text-center">
        <div class="col">
          <h1 class="display-4" style="color: #46576C;">JADI TUNGGU APA LAGI ?</h1>
        </div>
      </div>
      <div class="row mx-0 mt-3 d-flex justify-content-center">
        <a href="/category" type="button" class="btn btn-outline-secondary btn-lg">BELANJA SEKARANG</a>
      </div>
    </div>
  </section>
  <!-- End of Bottom Jumbotron -->

@include('toko.footer')
