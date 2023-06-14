@extends('admin.layouts.layoutshome')


@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="fade-up">
        <h1>Welcome to Website Desa Kamasan</h1>
        <h3 style="width: 50%">{{$profildesa->welcome}}.</h3>
        <a href="#about">
            <button class="learn-more scrollto">
                <span class="circle" aria-hidden="true">
                    <span class="icon arrow"></span>
                </span>
                <span class="button-text">Get Started</span>
            </button>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">


    <!-- ======= Profile Desa Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                    data-aos="zoom-in">
                    <iframe width="560" height="315" class="video-box" src="{{$profildesa->video}}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

                <div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                    style="text-align: justify">
                    <div class="box-heading" data-aos="fade-up">
                        <h4>About Desa</h4>
                        <h3>Desa Kamasan</h3>
                        <p>{{$profildesa->isi_profil}}</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->

    <!-- ======= Counts Section ======= -->


    <!-- ======= Cta Section ======= -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>Menu</h3>
                <p> Desa Kamasan</p>
                <a class="cta-btn" href="#">Menu</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <div id="konten"></div>
    <div id="k1"></div>
    <div id="k2"></div>
    <div id="k3"></div>
    <div id="k4"></div>

    <div style="display: none">
    <div id="berita">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title" data-aos="zoom-in">
                    <h2>Berita</h2>
                    <h3><span>Berita</span> Desa Kamasan</h3>
                    <p>Baca dan ketahui berbagai informasi terupdate yang ada di Desa Kamasan!</p>
                </div>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9" data-aos="fade-up">

                                @foreach ($berita as $item)
                                {{-- Gambar, Judul, tanggal, dan isi berita, --}}
                                <div class="d-md-flex post-entry-2 sect-news">
                                    <a href="{{ url('detailberita/' . $item->id_berita) }}" class="me-4 thumbnail">
                                        <img src="{{ asset('storage/images/' . $item->image) }}" alt=""
                                            class="img-fluid">
                                    </a>
                                    <div>
                                        <div class="post-meta"><span
                                                class="date">{{ date('d M Y H:i:s', strtotime($item->created_at)) }}</span>
                                        </div>
                                        <h3><a
                                                href="{{ url('detailberita/' . $item->id_berita) }}">{{ $item->judul_berita }}</a>
                                        </h3>
                                        <p>{{ substr($item->isi_berita, 0, 250) }}...</p>
                                    </div>
                                </div>
                                <hr>
                                @endforeach
                                {{-- Ini untuk Pagination --}}
                                <div class="text-start py-4">
                                    <div class="custom-pagination">
                                        <a href="#" class="prev">Previous</a>
                                        <a href="#" class="active">1</a>
                                        <a href="#">2</a>
                                        <a href="#">3</a>
                                        <a href="#">4</a>
                                        <a href="#">5</a>
                                        <a href="#" class="next">Next</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <!-- ======= Sidebar ======= -->
                                <div class="aside-block">
                                    <ul class="nav nav-pills custom-popular mb-4" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-popular" type="button" role="tab"
                                                aria-controls="pills-popular" aria-selected="true">Popular</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-trending" type="button" role="tab"
                                                aria-controls="pills-trending" aria-selected="false">Trending</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-latest" type="button" role="tab"
                                                aria-controls="pills-latest" aria-selected="false">Terbaru</button>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">

                                        <!-- Popular -->
                                        <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                                            aria-labelledby="pills-popular-tab">
                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Sport</span> <span
                                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span>
                                                </div>
                                                <h2 class="mb-2"><a href="#">111 How to Avoid Distraction and
                                                        Stay Focused During Video Calls?</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span>
                                                </div>
                                                <h2 class="mb-2"><a href="#">17 Pictures of Medium Length
                                                        Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Culture</span> <span
                                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span>
                                                </div>
                                                <h2 class="mb-2"><a href="#">9-up-down
                                                        Hairstyles for Long and Medium Hair</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span>
                                                </div>
                                                <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy:
                                                        A Working Mom’s Guide</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Business</span> <span
                                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span>
                                                </div>
                                                <h2 class="mb-2"><a href="#">The Best Homemade Masks for
                                                        Face (keep the Pimples Away)</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span>
                                                </div>
                                                <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every
                                                        Working Mom Should Know</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>
                                        </div> <!-- End Popular -->

                                        <!-- Trending -->
                                        <div class="tab-pane fade" id="pills-trending" role="tabpanel"
                                            aria-labelledby="pills-trending-tab">
                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span>
                                                </div>
                                                <h2 class="mb-2"><a href="#">222 Pictures of Medium Length
                                                        Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Culture</span> <span
                                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span>
                                                </div>
                                                <h2 class="mb-2"><a href="#">9-up-down
                                                        Hairstyles for Long and Medium Hair</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span>
                                                </div>
                                                <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy:
                                                        A Working Mom’s Guide</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Sport</span> <span
                                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span>
                                                </div>
                                                <h2 class="mb-2"><a href="#">How to Avoid Distraction and
                                                        Stay Focused During Video Calls?</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>
                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Business</span> <span
                                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span>
                                                </div>
                                                <h2 class="mb-2"><a href="#">The Best Homemade Masks for
                                                        Face (keep the Pimples Away)</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span>
                                                </div>
                                                <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every
                                                        Working Mom Should Know</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>
                                        </div> <!-- End Trending -->

                                        <!-- Latest -->
                                        <div class="tab-pane fade" id="pills-latest" role="tabpanel"
                                            aria-labelledby="pills-latest-tab">
                                            @foreach ($berita as $item)
                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta">
                                                    <span>{{ date('d M Y H:i:s', strtotime($item->created_at)) }}</span>
                                                </div>
                                                <h2 class="mb-2"><a href="#">{{ $item->judul_berita }}</a>
                                                </h2>
                                                <span class="author mb-3 d-block">Admin</span>
                                            </div>
                                            @endforeach
                                        </div> <!-- End Latest -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section><!-- End Services Section -->
    </div>
</div>
  
<div style="display: none">
    <div id="desawisata">
    <section id="dawis">
        <div class="section-title" data-aos="zoom-in">
            <h2>Daerah Wisata</h2>
            <h3>Tempat <span>Wisata</span> Desa Kamasan</h3>
            <p>Berbagai tempat Wisata tersebar di Desa Kamasan yang wajib dikunjungi para wisatawan</p>
        </div>

        <div class="parallax-content projects-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="owl-testimonials" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="testimonials-item">
                                    <a href="{{ asset('assets-client/assets/img/FH/FH5.png') }}"
                                        data-lightbox="image-1"><img
                                            src="{{ asset('assets-client/assets/img/FH/FH5.png') }}" alt=""></a>
                                    <div class="text-content">
                                        <h4>Nama Daerah Wisata 1</h4>
                                        <span>Disini deskripsi singkat</span>
                                        <div class="icon"><a href="#"><i class="bx bx-right-arrow-alt"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-item">
                                    <a href="{{ asset('assets-client/assets/img/FH/FH5d.png') }}"
                                        data-lightbox="image-1"><img
                                            src="{{ asset('assets-client/assets/img/FH/FH5d.png') }}" alt=""></a>
                                    <div class="text-content">
                                        <h4>Nama Daerah Wisata 2</h4>
                                        <span>Disini deskripsi singkat</span>
                                        <div class="icon"><a href="#"><i class="bx bx-right-arrow-alt"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-item">
                                    <a href="{{ asset('assets-client/assets/img/FH/FH5a.png') }}"
                                        data-lightbox="image-1"><img
                                            src="{{ asset('assets-client/assets/img/FH/FH5a.png') }}" alt=""></a>
                                    <div class="text-content">
                                        <h4>Nama Daerah Wisata 3</h4>
                                        <span>Disini deskripsi singkat</span>
                                        <div class="icon"><a href="#"><i class="bx bx-right-arrow-alt"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-item">
                                    <a href="{{ asset('assets-client/assets/img/FH/FH5c.png') }}"
                                        data-lightbox="image-1"><img
                                            src="{{ asset('assets-client/assets/img/FH/FH5c.png') }}" alt=""></a>
                                    <div class="text-content">
                                        <h4>Nama Daerah Wisata 4</h4>
                                        <span>Disini deskripsi singkat</span>
                                        <div class="icon"><a href="#"><i class="bx bx-right-arrow-alt"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
<div style="display: none">
<div id="produk">
    <!-- ======= Portfolio Section ======= -->
    <section id="produk" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="zoom-in">
                <h2>Produk Desa</h2>
                <h3>Check our <span>Produk</span></h3>
                <p>berikut terdapat berbagai Kuliner, Jasa, maupun Oleh-oleh khas Desa Kamasan</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-kuliner">Kuliner</li>
                        <li data-filter=".filter-oleh">Oleh-oleh</li>
                        <li data-filter=".filter-Jasa">Jasa</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                @foreach ($produk as $data)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $data->kategori }}">
                    <img src="/storage/images/{{ $data->image }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{ $data->nama_produk }}</h4>
                        <p>{{ $data->harga_produk }}</p>
                        <a href="/storage/images/{{ $data->image }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="{{ $data->nama_produk }}"><i
                                class="bx bx-plus"></i></a>
                        <a href="/home/{{ $data->id }}" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
                @endforeach


            </div>

        </div>
    </section><!-- End Portfolio Section -->
</div>
</div>
<div style="display: none">
<div id="pengurus">
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title" data-aos="zoom-in">
                <h2>Team</h2>
                <h3>Pengurus <span>Desa-Kamasan</span></h3>
                <p>posisi dan pengurus desa</p>
            </div>

            <div class="row">

                @foreach ($pengurus as $data)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="/storage/images/{{ $data->image }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://wa.me/{{ $data->whatsapp }}"><i class="bi bi-whatsapp"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>{{ $data->nama }}</h4>
                            <span>{{ $data->jabatan }}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Team Section -->
</div>
</div>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                legam anim culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                dolore labore illum veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                culpa fore nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container">

            <div class="section-title" data-aos="zoom-in">
                <h2>F.A.Q</h2>
                <h3>Frequently Asked <span>Questions</span></h3>
                <p>Berikut adalah beberapa persoalan yang sering ditanyakan pengunjung mengenai Desa Wisata Kamasan
                </p>
            </div>

            <div class="faq-list" style="text-align: justify">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapsed"
                            data-bs-target="#faq-list-1">Bagaimana sejarah awal mula nama
                            <b>'Kamasan'</b>?<i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Kamasan atau “Ka-emas-an” adalah nama yang cukup tua untuk komunitas orang-orang
                                yang mempunyai pekerjaan dalam bidang memande yaitu Pande Mas sesuai dengan nama
                                salah satu banjar di desa Kamasan. Bukti arkeologis yang ditemukan berupa
                                tahta-tahta batu, arca menhir, lesung batu, palungan batu, monolit yang berbentuk
                                silinder, batu dakon, lorong-lorong jalan yang dilapisi batu kali yang pernah
                                ditemukan pada tahun 1976 dan 1977, yang tersebar di desa-desa Kamasan dan
                                sekitarnya memberi petunjuk bahwa komunitas tersebut cukup tua umurnya. Dari temuan
                                arkeologis tersebut juga memberi petunjuk bahwa tradisi megalitik pernah mewarnai
                                kehidupan komunitas di Kamasan dan sekitarnya, yaitu kehidupan komunitas pra Hindu
                                yang berakar pada masa neolitikum ( ± 2000 tahun SM).
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-2" class="collapsed">Dimana letak <b>Desa Kamasan</b> dan
                            bagaimana cara menuju kesana?<i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Secara geografis Desa Kamasan termasuk desa dataran rendah dekat dengan pantai
                                Klotok atau pantai Jumpai ± 3 km. Untuk menuju lokasi Desa Kamasan sebenarnya bisa
                                ditempuh melalui beberapa jalur, tiga diantaranya sebagai berikut:<br>
                                <ol>
                                    <li style="margin-bottom: -35px;">Jalur Barat dari tengah-tengah kota kabupaten ke
                                        arah selatan sepanjang 1,5 km berbelok ke kiri langsung sampai banjar Sangging
                                        yang merupakan pusat sentra pengrajin seni lukis wayang Kamasan. Ke selatan
                                        sedikit lagi sampai ke banjar Pande Mas, pusat ukiran emas dan perak.</li>
                                    <li style="margin-bottom: -35px;">Jalur utara dari kota kabupaten Klungkung agak di
                                        bagian timur ke arah selatan melalui belokan-belokan jalan sampai di banjar
                                        Siku.</li>
                                    <li style="">Jalur selatan dari tengah-tengah kota Kabupaten Klungkung ke
                                        arah selatan sepanjang 3 km melalui desa-desa Tojan dan Gelgel sampai ke banjar
                                        Pande, pusat kerajinan ukiran tradisional bahan peluru.</li>
                                </ol>
                            </p>
                        </div>
                    </li>


                </ul>
            </div>

        </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Maps Section ======= -->
    <section id="peta" class="contact">
        <div class="container">

            <div class="section-title" data-aos="zoom-in">
                <h2>Peta Desa</h2>
                <h3>Check our <span>Location</span> Details</h3>
                <p>Ini adalah peta yang menunjukkan lokasi Desa Wisata dan sekitarnya</p>
            </div>

            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6431.124574298514!2d115.40727259008086!3d-8.547358017360269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21165b047c39b%3A0x5030bfbca832200!2sKamasan%2C%20Kec.%20Klungkung%2C%20Kabupaten%20Klungkung%2C%20Bali!5e0!3m2!1sid!2sid!4v1684982829668!5m2!1sid!2sid"
                    width="100%" height="300" style="border:0; margin-bottom: 50px" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4" data-aos="fade-right">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Jl. Nirarta Desa Kamasan, Kecamatan Klungkung, Kabupaten Klungkung, Provinsi Bali,
                                Kode Pos 80771</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@kamasan.desa.id</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>(0366) 22938</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<script>
    var isi = document.getElementById("{{$menubuilder->k1}}");
    var take = isi.innerHTML;
  
    $('#k1').html(take);
</script>
<script>
    var isi = document.getElementById("{{$menubuilder->k2}}");
    var take = isi.innerHTML;

    $('#k2').html(take);
</script>
<script>
    var isi = document.getElementById("{{$menubuilder->k3}}");
    var take = isi.innerHTML;
 
    $('#k3').html(take);
</script>
<script>
    var isi = document.getElementById("{{$menubuilder->k4}}");
    var take = isi.innerHTML;

    $('#k4').html(take);
</script>
@endsection
