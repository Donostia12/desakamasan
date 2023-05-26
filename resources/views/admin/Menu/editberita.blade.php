@extends('admin.layouts.layoutsadmin')


@section('content')
<center>
    <h1>Halaman Edit</h1>
</center>

<h2></h2>
<div class="container flex ">
                        
<form action="{{route('berita.update',$berita->id_berita)}}" method="post"
target="_self" enctype="multipart/form-data" role="form" data-toggle="validator" novalidate>
@csrf
  @method('PUT')

    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <label>Judul Berita</label>
            </div>
            <div class="col-sm-10">
                <input type="text" name="judul_berita" value="{{$berita->judul_berita}}" class="form-control" >
            </div>

        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <label>Isi Berita</label>
            </div>
            <div class="col-sm-10">
                <textarea type="text"  name="isi_berita" value=""  class="form-control">{{$berita->isi_berita}}</textarea>
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

<a  class="btn btn-danger"href="/berita">kembali</a>
</form>

@endsection