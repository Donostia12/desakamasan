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
                            <form action="/Produk" method="post" target="_self" enctype="multipart/form-data"
                                role="form" data-toggle="validator" novalidate>
                                @csrf

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Nama Produk</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_produk" id="" class="form-control">
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Informasi Produk</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <textarea type="text" name="informasi_produk"
                                                class="form-control"></textarea>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Harga Produk</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="number" name="hargaproduk" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Map</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <textarea type="text" name="map" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Kategori</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <select name="kategori" class="form-control">
                                                <option value="">Pilih Kategori</option>
                                                <option value="kuliner">kuliner</option>
                                                <option value="oleh">Oleh-Oleh</option>
                                                <option value="Jasa">Jasa</option>
                                            </select>
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
                                            <th>nama Produk</th>
                                            <th>Informasi Produk</th>
                                            <th>harga</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($produk as $A )
                                        <tr>
                                            <td>{{$A->nama_produk}}</td>
                                            <td>{{$A->informasi_produk}}</td>
                                            <td>{{$A->harga_produk}}</td>
                                            <td>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <a href="#" onclick="getpop({{$A->id}})">view </a>
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <a href="/Produk/{{$A->id}}/edit">edit</a>

                                                        </div>

                                                        <form action="/Produk/{{$A->id}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button> delete</button>
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
                                                    <label> Nama Produk</label>
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-10 ">
                                                        <input type="text" class="form-control" id="nama_produk"
                                                            name="nama_produk" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label> Info</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <textarea type="text" class="form-control" id="informasi_produk"
                                                            name="informasi_produk" readonly></textarea>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group">



                                                <div class="row">
                                                    <center> <label> Harga & kategori</label></center>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="harga_produk"
                                                            readonly>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="kategori" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-2"> <label> Maps</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <iframe style="border:0; width: 100%; height: 270px;" id="map"
                                                            src="" frameborder="0" allowfullscreen></iframe>
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
                                    url: '/detail/' + id,
                                    success: function (data) {
                                        $('#nama_produk').val(data.nama_produk);
                                        $('#id').val(data.id);
                                        $('#image').attr('src', '/storage/images/' + data.image);
                                        $('#informasi_produk').val(data.informasi_produk);
                                        $('#harga_produk').val(data.harga_produk + ' .Rp');
                                        $('#kategori').val(data.kategori);
                                        $('#map').attr('src', data.map);


                                    },
                                });
                            }

                            function closePopup() {
                                $('#detail').empty();
                            }

                        </script>

                        {{-- 
ajax untuk delete --}}
                        <script>
                            function hapus(id) {
                                if (confirm("yakin mau di delete?")) {
                                    $.ajax({
                                        url: "/delete/" + id,
                                        type: "DELETE",
                                        data: {
                                            "id": id,
                                            "_token": "{{ csrf_token() }}"
                                        },
                                        success: function () {
                                            location.reload(true);
                                        },
                                        error: function (data) {
                                            console.log('Error:', data);
                                        }
                                    });
                                }
                            }
                            let table = new DataTable('#table');

                        </script>
                        @endsection
