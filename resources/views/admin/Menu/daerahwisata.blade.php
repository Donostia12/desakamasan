@extends('admin.layouts.layoutsadmin')


@section('content')


<center>
    <h1 class="mb-5">Halaman daerah wisata</h1>

</center>

<!-- Tombol untuk memicu pop-up -->


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
                        <h4 class="card-title">Form Daerah wisata</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('daerahwisata.index') }}" method="POST" class="form form-vertical"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="Nama">Nama </label>
                                                <input type="text" id="Nama" class="form-control" name="nama"
                                                    placeholder="Nama Daerah Wisata">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="jabatan">Deskripsi</label>
                                                <input type="text" class="form-control" name="deskripsi"
                                                    placeholder="Deskripsi Daerah">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email">Maps</label>
                                                <textarea type="text" class="form-control" name="maps"
                                                    placeholder="Masukan Maps"></textarea>
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
                <h4 class="card-title">Tambah daerah wisata</h4>
            </div>
            <div class="card-body">
                <!-- table bordered -->
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Nama Daerah Wisata</th>
                            <th>Deksripsi</th>
                           
                        
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daerahwisata as $item)
                        <tr>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->deskripsi}}</td>

                            <td>
                                <div class="dropdown">
                                    <button id="toa" class="btn btn-primary" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a href="#" class="dropdown-item" onclick="getpop({{$item->id}})"><i
                                                class="bi bi-search"></i> View</a>


                                        <a href="{{ route('daerahwisata.edit',$item->id) }}" class="dropdown-item"><i
                                                class="bi bi-pencil-square"></i> Edit</a>


                                        <form action="{{route('daerahwisata.destroy',$item->id)}}" method="post">
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



    <!-- Pop-up -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" style="max-height: 100%;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Daerah Wisata</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <img id="image" src="" alt="" srcset="" style="padding: 5%; border-radius: 32px;">
                <div class="modal-body">
                    <p>Nama</p>
                    <input type="text" class="form-control" id="nama" readonly>

                    <p>deskripsi</p>
                    <textarea type="text" class="form-control" id="deskripsi" readonly></textarea>

                    <p> maps</p>
                    <div class="">
                        <iframe style="border:0; width: 100%; height: 270px;" id="map"
                            src="" frameborder="0" allowfullscreen></iframe>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function getpop(id) {

            $('#myModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/detailwisata/" + id,
                success: function (data) {
                    $('#nama').val(data.nama);
                    $('#image').attr('src', '/storage/images/' + data.image);
                    $('#map').attr('src', data.maps);
                    $('#deskripsi').val(data.deskripsi);
                
                    console.log(data.jabatan);
                },
                error: function (xhr, status, error) {
                    console.log(data);
                }
            });
        }

    </script>

    {{-- 
ajax untuk delete --}}


    @endsection
