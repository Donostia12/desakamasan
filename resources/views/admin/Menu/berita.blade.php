@extends('admin.layouts.layoutsadmin')


@section('content')
    <center>
        <h1 class="mb-5">Halaman Berita</h1>

    </center>

    <h2></h2>
    <div class="container flex mb-5">

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <section id="basic-vertical-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Tambah Berita</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('berita.index') }}" method="POST" class="form form-vertical"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="judul">Judul Berita</label>
                                                    <input type="text" id="judul" class="form-control"
                                                        name="judul_berita" placeholder="Judul Berita">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="wysiwyg" class="form-label">Isi Berita</label>
                                                    <textarea class="ckeditor form-control" id="wysiwyg" rows="3" name="isi_berita"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="gambar">Gambar Berita</label>
                                                    <input type="file" id="gambar" class="form-control" name="image"
                                                        placeholder="Gambar Berita">
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <button type="submit" class="btn btn-primary me-1">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5">

        <!-- Basic Tables start -->
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Daftar Berita</h4>
                </div>
                <div class="card-body">
                    <!-- table bordered -->
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>Judul Berita</th>
                                <th>Isi Berita</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berita as $item)
                                <tr>
                                    <td>{{ $item->judul_berita }}</td>
                                    <td>{!! substr($item->isi_berita, 0, 50) !!}</td>

                                    <td>
                                        <div class="dropdown">
                                            <button id="toa" class="btn btn-primary" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a href="#" class="dropdown-item"
                                                    onclick="getpop({{ $item->id_berita }})"><i class="bi bi-search"></i>
                                                    View</a>


                                                <a href="{{ route('berita.edit', $item->id_berita) }}"
                                                    class="dropdown-item"><i class="bi bi-pencil-square"></i> Edit</a>


                                                <form action="{{ route('berita.destroy', $item->id_berita) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="dropdown-item"><i class="bi bi-trash"></i> Hapus</button>
                                                </form>


                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
        <!-- Basic Tables end -->

        <div id="detail"></div>
        {{-- ini Popup untuk Produk --}}

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" style="overflow-y: scroll; max-height: 100%">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Berita</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <img id="image" src="" alt="" srcset="">
                    <div class="modal-body">
                        <p>Judul Berita</p>
                        <input type="text" class="form-control" id="judul_berita" readonly>
                        <p>Isi Berita</p>
                        <input type="text" class="form-control" id="isi_berita" readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function getpop(id) {
            $('#myModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/detail-berita/" + id,
                success: function(data) {
                    $('#judul_berita').val(data.judul_berita);
                    $('#id').val(data.id_berita);
                    $('#image').attr('src', '/storage/images/' + data.image);
                    $('#isi_berita').val($(data.isi_berita).text());
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }

        function closePopup() {
            $('#detail').empty();
        }
        let table = new DataTable('#table');
    </script>

    {{-- 
ajax untuk delete --}}
@endsection
