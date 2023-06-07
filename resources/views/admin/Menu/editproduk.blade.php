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

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Nama Produk</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_produk" value="{{$produk->nama_produk}}"
                                                class="form-control">
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Informasi Produk</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <textarea type="text" name="informasi_produk" value=""
                                                class="form-control">{{$produk->informasi_produk}}</textarea>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Harga Produk</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="number" name="hargaproduk" value="{{$produk->harga_produk}}"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Kategori</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <select name="kategori" id="" class="form-control">
                                                <option value="{{$produk->kategori}}">Pilih Kategori</option>
                                                <option value="kuliner">Kuliner</option>
                                                <option value="oleh">Oleh - Oleh</option>
                                                <option value="Jasa">Jasa</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Map</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <textarea type="text" name="map"
                                                class="form-control">{{$produk->map}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Gambar</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="file" name="image">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">input</button>

                                <a class="btn btn-danger" href="/Produk">kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
    </section>

    @endsection
