@extends('admin.layouts.layoutsadmin')


@section('content')
<center>
    <h1 class="mb-5">Halaman Edit Pengurus</h1>
</center>

<h2></h2>
<div class="container flex ">
                        

<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Edit Pengurus</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{route('pengurus.update',$pengurus->id)}}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" id="judul" class="form-control"
                                                name="nama" placeholder="Judul Berita"value="{{$pengurus->nama}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="jabatan" class="form-label">Jabatan</label>
                                            <input class="form-control" id="jabatan" name="jabatan" value="{{$pengurus->jabatan}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input class="form-control" id="email" name="email" value="{{$pengurus->email}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="whatssapp" class="form-label">whatsapp</label>
                                            <input class="form-control" id="whatsapp" name="whatsapp" value="{{$pengurus->whatsapp}}">
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
                        <a href="{{ route('pengurus.index') }}"><button class="btn btn-danger mt-2">Kembali</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection