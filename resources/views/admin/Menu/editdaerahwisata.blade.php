@extends('admin.layouts.layoutsadmin')


@section('content')
<center>
    <h1>Halaman Edit</h1>
</center>

<h2></h2>
<div class="container flex ">
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Edit Daerah Wisata</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{route('daerahwisata.update',$daerahwisata->id)}}" method="post" target="_self"
                                enctype="multipart/form-data" role="form" data-toggle="validator" novalidate>
                                @csrf
                                @method('PUT')

                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="Nama">Nama </label>
                                                <input type="text" id="Nama" class="form-control" name="nama"
                                                    placeholder="Nama Daerah Wisata" value="{{ $daerahwisata->nama }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="wysiwyg" class="form-label">Deskripsi</label>
                                                <textarea class="ckeditor form-control" id="wysiwyg"  rows="3" name="deskripsi">{!! $daerahwisata->deskripsi !!}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email">Maps</label>
                                                <textarea type="text" class="form-control" name="maps"
                                                    placeholder="Masukan Maps">{{ $daerahwisata->maps }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="gambar">Foto daerah wisata</label>
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn btn-primary me-1">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </form>
                            <a href="{{ route('daerahwisata.index') }}"><button class="btn btn-danger mt-2">Kembali</button></a>
                        </div>
                    </div>
                </div>
    </section>

    @endsection
