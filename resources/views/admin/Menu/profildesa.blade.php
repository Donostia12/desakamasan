@extends('admin.layouts.layoutsadmin')

@section('content')

    <center>
        <h1>Halaman profil desa</h1>
    </center>
    
<h2></h2>
<div class="container flex mb-5">

                @if(session('success'))
                  <div class="alert alert-success" role="alert">
                      {{session('success')}}
                  </div>
                @endif

                @if(session('error'))
                  <div class="alert alert-danger" role="alert">
                      {{session('error')}}
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
                            <form action="{{ route('profil.store') }}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
    
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="judul">welcome</label>
                                                <textarea type="text" id="judul" class="form-control"
                                                    name="welcome" value="{{$data->welcome}}">{{$data->welcome}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="isi" class="form-label">isi profil</label>
                                                <textarea class="form-control" id="isi" rows="3" name="isi_profil" value="{{$data->isi_profil}}">{{$data->isi_profil}}</textarea>
                                            </div>
                                        </div>
                                      
                                        <div class="col-12">
                                            <div class="form-group">video
                                                <label for="video">Video</label>
                                                <input type="text" id="video" class="form-control"
                                                    name="video" placeholder="tambahkan link youtube" value="{{$data->video}}">
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

@endsection 

