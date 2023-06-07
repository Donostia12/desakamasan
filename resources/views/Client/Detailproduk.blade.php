@extends('admin.layouts.layoutshome')


@section('content')

  <main id="main">
   

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Produk Detail</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li> Detail Produk</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
  
    
                  <div class="swiper-slide">
                    <iframe style="border:0; width: 100%; height: 270px;" id="map" src="{{$produk->map}}" frameborder="0"
                    allowfullscreen></iframe>
                  </div>
  
                  <div class="swiper-slide">
                    <img src="/storage/images/{{$produk->image}}" alt="">
                  </div>
  
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
  
            <div class="col-lg-4">
              <div class="portfolio-info">
                <h3>Project information</h3>
                <ul>
                  <li><strong>Harga mulai dari</strong>: {{$produk->harga_produk}} ,-Rp</li>
                  <li><strong>Nama Produk</strong>: {{$produk->nama_produk}}</li>
                  <li><strong>Kategori</strong>: {{$produk->kategori}}</li>
                </ul>
              </div>
              <div class="portfolio-description">
                <h2>Detail Produk</h2>
                <p>
                 {{$produk->informasi_produk}}
                </p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

@endsection