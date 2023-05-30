@extends('admin.layouts.layoutsadmin')


@section('content')
<center>
    <h1 class="mb-5">Halaman Edit</h1>
</center>

<h2></h2>
<div class="container flex ">
                        

<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Edit Berita</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{route('berita.update',$berita->id_berita)}}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="judul">Judul Berita</label>
                                            <input type="text" id="judul" class="form-control"
                                                name="judul_berita" placeholder="Judul Berita"value="{{$berita->judul_berita}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="isi" class="form-label">Isi Berita</label>
                                            <textarea class="form-control" id="isi" rows="3" name="isi_berita">{{$berita->isi_berita}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="gambar">Gambar Berita</label>
                                            <input type="file" id="gambar" class="form-control"
                                                name="image" placeholder="Gambar Berita">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                        <a href="{{ route('berita.index') }}"><button class="btn btn-danger mt-2">Kembali</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection