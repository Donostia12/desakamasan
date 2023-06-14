@extends('admin.layouts.layoutsadmin')


@section('content')


<center>
    <h1>Halaman Produk</h1>

</center>

<h2></h2>
<div class="container flex ">
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
                        <h4 class="card-title">Form Tambah Produk</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('Produk.index') }}" method="post" target="_self" enctype="multipart/form-data"
                                role="form" data-toggle="validator" novalidate>
                                @csrf

                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama_produk">Nama Produk</label>
                                                <input type="text" name="nama_produk" id="" class="form-control" placeholder="Masukkan nama produk">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="wysiwyg" class="form-label">Informasi Produk</label>
                                                <textarea class="ckeditor form-control" id="wysiwyg"  rows="3" name="informasi_produk"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="harga_produk">Harga Produk</label>
                                                <input type="number" name="hargaproduk" id="" class="form-control" placeholder="Masukkan harga produk">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="map">Map</label>
                                                <textarea type="text" name="map" class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="kategori">Kategori</label>
                                                <select name="kategori" class="form-control">
                                                    <option value="">Pilih Kategori</option>
                                                    <option value="kuliner">kuliner</option>
                                                    <option value="oleh-oleh">Oleh-Oleh</option>
                                                    <option value="jasa">Jasa</option>
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
                                
                                <button type="submit" class="btn btn-primary">Simpan</button>

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
                                            <th>Nama Produk</th>
                                            <th>Informasi Produk</th>
                                            <th>Harga</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($produk as $A )
                                        <tr>
                                            <td>{{$A->nama_produk}}</td>
                                            <td>{!! substr($A->informasi_produk,0,50) !!}</td>
                                            <td>{{$A->harga_produk}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button id="toa" class="btn btn-primary" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                                    </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a href="#" class="dropdown-item" onclick="getpop({{$A->id}})"><i class="bi bi-search"></i> View</a>
                                                    
                                    
                                                    <a href="{{ route('Produk.edit',$A->id) }}" class="dropdown-item"><i class="bi bi-pencil-square"></i> Edit</a>
                                                    
                                                    
                                                    <form action="{{route('Produk.destroy',$A->id)}}" method="post">
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" style="overflow-y: scroll; max-height: 100%" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail-Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <img  id="image" src="" alt="" srcset="">
        
            <div class="modal-body">
                <p>Nama Produk</p>
                <input type="text" class="form-control" id="nama-produk" readonly>
                <p>Informasi Produk</p>
                <input type="text" class="form-control" id="informasi-produk" readonly>
                <p>Harga Produk</p>
                <input type="text" class="form-control" id="harga-produk" readonly>
                <p>Kategori</p>
                <input type="text" class="form-control" id="kategori" readonly>
                

            </div>
            <div class="">
                <iframe style="border:0; width: 100%; height: 270px;" id="map"
                    src="" frameborder="0" allowfullscreen></iframe>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                
            </div>
        </div>
    </div>
</div>

<script>
    function getpop(id) {
      
        $('#myModal').modal('show');
        $.ajax({
            type: "GET",
            url: "/detailproduk/" + id,
            success: function (data) {
                $('#nama-produk').val(data.nama_produk);
                $('#image').attr('src', '/storage/images/' + data.image);
                $('#informasi-produk').val($(data.informasi_produk).text());
                $('#harga-produk').val(data.harga_produk);
                $('#kategori').val(data.kategori);
                $('#map').attr('src', data.map);
              console.log(data.jabatan);
            },
            error: function (xhr, status, error) {
                console.log(data);
            }
        });
    }

</script>
                        @endsection
