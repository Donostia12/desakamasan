@extends('admin.layouts.layoutsadmin')
@section('content')
<center>
    <h1>Halaman Menu builder</h1>
</center>



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
            <h4 class="card-title">Menu Builder</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="{{ route('menubuilder.store') }}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label>konten 1</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <select name="k1" class="form-control">
                                            <option value="{{$data->k1}}">{{$data->k1}} </option>
                                            <option value="berita">berita</option>
                                            <option value="desawisata">Desa wisata</option>
                                            <option value="produk">produk</option>
                                            <option value="pengurus">pengurus</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label>konten 2</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <select name="k2" class="form-control">
                                          
                                            <option value="{{$data->k2}}">{{$data->k2}} </option>
                                            <option value="berita">berita</option>
                                            <option value="desawisata">Desa wisata</option>
                                            <option value="produk">produk</option>
                                            <option value="pengurus">pengurus</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label>konten 3</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <select name="k3" class="form-control">
                                       
                                            <option value="{{$data->k3}}">{{$data->k3}} </option>
                                            <option value="berita">berita</option>
                                            <option value="desawisata">Desa wisata</option>
                                            <option value="produk">produk</option>
                                            <option value="pengurus">pengurus</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label>konten 4</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <select name="k4" class="form-control">
                                            
                                            <option value="{{$data->k4}}">{{$data->k4}} </option>
                                            <option value="berita">berita</option>
                                            <option value="desawisata">Desa wisata</option>
                                            <option value="produk">produk</option>
                                            <option value="pengurus">pengurus</option>
                                        </select>
                                    </div>
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

