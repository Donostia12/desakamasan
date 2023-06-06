@extends('admin.layouts.layoutsadmin')


@section('content')


<center>
    <h1 class="mb-5">Halaman Pengurus</h1>

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
                        <h4 class="card-title">Form Pengurus Desa</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('pengurus.index') }}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
    
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="Nama">Nama Pengurus</label>
                                                <input type="text" id="Nama" class="form-control"
                                                    name="nama" placeholder="Nama Pengurus Desa">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="jabatan">Jabatan</label>
                                                <input type="text" id="jabatan" class="form-control"
                                                    name="jabatan" placeholder="Jabatan yang di emban">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="whatsapp">No Whatsapp</label>
                                                <input type="text" id="jabatan" class="form-control"
                                                    name="whatsapp" placeholder="Masukan No whatsapp">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" id="email" class="form-control"
                                                    name="email" placeholder="Masukan Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="gambar">Foto Pengurus</label>
                                                <input type="file" id="gambar" class="form-control"
                                                    name="image" placeholder="Masukan Foto Profil Pengurus">
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

    <hr class="my-5">

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah pengurus</h4>
            </div>
            <div class="card-body">
                <!-- table bordered -->
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>Nama Pengurus</th>
                                <th>Jabatan</th>
                                <th>No Whatsapp</th>
                                <th>email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($Pengurus as $item)
                                    <tr>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->jabatan}}</td>
                                        <td>{{$item->whatsapp}}</td>
                                        <td>{{$item->email}}</td>
                                        
                                        <td>
                                            <div class="dropdown">
                                                <button id="toa" class="btn btn-primary" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a href="#" class="dropdown-item" onclick="getpop({{$item->id}})"><i class="bi bi-search"></i> View</a>
                                                    
                                    
                                                    <a href="{{ route('pengurus.edit',$item->id) }}" class="dropdown-item"><i class="bi bi-pencil-square"></i> Edit</a>
                                                    
                                                    
                                                    <form action="{{route('pengurus.destroy',$item->id)}}" method="post">
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
<!-- Basic Tables end -->

    <div id="detail"></div>
    {{-- ini Popup untuk Produk --}}
    <style>
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border: 1px solid #ccc;
        }

        .popup-content {
            margin-bottom: 20px;
        }

        .popup-header {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .popup-body {
            font-size: 16px;
        }

        .popup-footer {
            text-align: right;
        }

    </style>

    <div style="display: none">
        <div id="iklan">
            <div class="popup">

                <form action="#" method="post">

                    <input type="hidden" id="id" name="id" />
                    <center><img id="image" src="" height="auto" width="150" alt=""></center>
                    <div class="form-group">
                        <div class="row">
                            <label>Judul Berita</label>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10 ">
                                <input type="text" class="form-control" id="judul_berita" name="judul_berita" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <label> Isi </label>
                            </div>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="isi_berita" name="isi_berita"
                                    readonly></textarea>
                            </div>

                        </div>
                    </div>

                    <button class="btn btn-danger" onclick='closePopup()'>Tutup</button>
            </div>
        </div>
        </form>

    </div>
</div>

<script>
    function getpop(id) {
        var isi = document.getElementById('iklan');
        var iklan = isi.innerHTML;
        $('#detail').html(iklan);
        $.ajax({
            type: "GET",
            url: "/detail-berita/" + id,
            success: function (data) {
                $('#judul_berita').val(data.judul_berita);
                $('#id').val(data.id_berita);
                $('#image').attr('src', '/storage/images/' + data.image);
                $('#isi_berita').val(data.isi_berita);
                console.log(data);
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    }

    function closePopup() {
        $('#detail').empty();
    }
    let table = new DataTable('#table');

</script>

{{-- 
ajax untuk delete --}}


@endsection
