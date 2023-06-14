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
                        <h4 class="card-title">Form Edit Berita</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{route('Produk.update',$produk->id)}}" method="post" target="_self"
                                enctype="multipart/form-data" role="form" data-toggle="validator" novalidate>
                                @csrf
                                @method('PUT')

                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama_produk">Nama Produk</label>
                                                <input type="text" name="nama_produk" id="" class="form-control" placeholder="Masukkan nama produk" value="{{ $produk->nama_produk }}">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="wysiwyg" class="form-label">Informasi Produk</label>
                                                <textarea class="ckeditor form-control" id="wysiwyg"  rows="3" name="informasi_produk">{!! $produk->informasi_produk !!}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="harga_produk">Harga Produk</label>
                                                <input type="number" name="hargaproduk" id="" class="form-control" placeholder="Masukkan harga produk" value="{{ $produk->harga_produk }}">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="map">Map</label>
                                                <textarea type="text" name="map" class="form-control">{{ $produk->map }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="kategori">Kategori</label>
                                                <select name="kategori" class="form-control">
                                                    <option value="">Pilih Kategori</option>
                                                    <option value="kuliner" {{ ($produk->kategori == 'kuliner') ? 'selected' : '' }}>kuliner</option>
                                                    <option value="oleh-oleh" {{ ($produk->kategori == 'oleh-oleh') ? 'selected' : '' }}>Oleh-Oleh</option>
                                                    <option value="jasa" {{ ($produk->kategori == 'jasa') ? 'selected' : '' }}>Jasa</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="image">Gambar</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">input</button>

                                <a class="btn btn-danger" href="/Produk">kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
    </section>

    @endsection
