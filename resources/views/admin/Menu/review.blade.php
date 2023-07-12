@extends('admin.layouts.layoutsadmin')


@section('content')
<center>
    <h1>Halaman Review</h1>
</center>

<h2></h2>
<div class="container flex ">
    
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
                        <h4 class="card-title">Form Edit Review Pengunjung</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('status') }}" method="post" target="_self"
                                enctype="multipart/form-data" role="form" data-toggle="validator" novalidate>
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <input type="text" name="id" id="id" hidden>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama_produk">Nama Pengunjung</label>
                                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Edit Nama Pengunjung" readonly>
                                            </div>
                                        </div>
                                        <div class="col-12"> 
                                            <div class="form-group">
                                                <label for="nama_produk">review pengunjung</label>
                                                <textarea type="text" name="review" id="review" class="form-control"
                                                    placeholder="review" readonly></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama_produk">Status</label>
                                                <select class="form-control" name="status" id="status">
                                                    <option value="" readonly>silahkan masukan status</option>
                                                    <option value="yes">Aktif </option>
                                                    <option value="no">Mati</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-6">

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary form-control">Tampilkan
                                                    Komentar</button>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div class="form-group">
                                                <button type="reset" class="btn btn-danger form-control">reset</button>
                                            </div>
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
    <hr>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Daftar produk</h4>
            </div>
            <div class="card-body">


                <table class="table" id="table">
                    <thead>
                        <tr>
                            <th>Nama Pengirim</th>
                            <th>Review</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $A)
                        <tr>
                            <td>{{ $A->nama }}</td>
                            <td>{!! substr($A->review, 0, 50) !!}</td>
                            <td>
                                <div class="dropdown">
                                    <button id="toa" class="btn btn-primary" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a href="#" onclick="tampil({{$A->id}})" class="dropdown-item"><i
                                                class="bi bi-pencil-square"></i>tampil</a>


                                        <form action="{{ route('review.destroy', $A->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="dropdown-item"><i class="bi bi-trash"></i> Hapus</button>
                                        </form>
                                      
                                    </div>
                                  
                                    @if ($A->status == 'yes')
                                    <button class="btn btn-success ">aktif</button>
                                    @else
                                    <button class="btn btn-danger ">tidak aktif</button>
                                    @endif
                                   
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <script>
        function tampil(id) {
            $.ajax({
                type: "GET",
                url: "/review-detail/" + id,
                success: function (data) {
                    $('#id').val(data.id);
                    $('#nama').val(data.nama);
                    $('#status').val(data.status);
                    $('#review').val(data.review);
                    console.log(data);
                },
                error: function (xhr, status, error) {
                    console.log(data);
                }
            });
        }

    </script>
    @endsection
