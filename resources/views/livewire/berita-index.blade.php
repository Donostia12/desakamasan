  

            <div class="col-md-9">

                @foreach ($berita as $item)
                    {{-- Gambar, Judul, tanggal, dan isi berita, --}}
                    <div class="d-md-flex post-entry-2 sect-news">
                        <a href="{{ url('detailberita/' . $item->id_berita) }}"
                            class="me-4 thumbnail">
                            <img src="{{ asset('storage/images/' . $item->image) }}"
                                alt="" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date"><span
                                        class="bx bx-calendar"></span>
                                    {{ date('d F Y', strtotime($item->created_at)) }}</span>
                            </div>
                            <h3><a
                                    href="{{ url('detailberita/' . $item->id_berita) }}">{{ $item->judul_berita }}</a>
                            </h3>
                            <p>{!! substr($item->isi_berita, 0, 350) !!}
                                <a href="{{ url('detailberita/' . $item->id_berita) }}"> . . .
                                    <p>Baca selengkapnya <span
                                            class="bx bx-right-arrow-alt"></span></p>
                                </a>
                            </p>
                        </div>
                    </div>
                    <hr>
                @endforeach
                
                {{-- Ini untuk Pagination --}}
                <div class="text-start py-4 ">
                    {{ $berita->links() }}
                </div>
            </div>


<style>
    [aria-current] .page-link {
        background-color: #8a703f !important;
        color: #fff;
        border: 1px solid #8a703f;
    }

    [rel='prev'], [rel='next'] {
        background-color: #fff !important;
        color: #8a703f;
    }

    .pagination > li :not([rel='prev'],[rel='next'],[aria-current] .page-link) {
        
        color: #8a703f;
    }
</style>