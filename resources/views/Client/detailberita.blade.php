@extends('admin.layouts.layoutshome')


@section('content')

  <main id="main">
   

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Berita Detail</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li> Detail Berita</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <div class="container">
  
          <div class="row">
  
            <div class="col-lg-12">
              <div class="">
                <div class="align-items-center">
  
                  <div class="">
                    <img src="/storage/images/{{$berita->image}}" alt="" style="width: 100%">
                  </div>
  
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
              <div class="portfolio-description">
                <p>{{ date('d M Y H:i:s',strtotime($berita->created_at)) }}</p>
                <h2>{{ $berita->judul_berita }}</h2>
                <p>
                 {!! $berita->isi_berita !!}
                </p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

@endsection