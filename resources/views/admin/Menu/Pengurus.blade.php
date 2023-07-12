@extends('admin.layouts.layoutsadmin')


@section('content')


<center>
    <h1 class="mb-5">Halaman Pengurus</h1>

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
                                                <input type="text"  class="form-control"
                                                    name="jabatan" placeholder="Jabatan yang diemban">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="whatsapp">No Whatsapp</label>
                                                <input type="text"  class="form-control"
                                                    name="whatsapp" placeholder="Masukkan No whatsapp">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control"
                                                    name="email" placeholder="Masukkan Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="gambar">Foto Pengurus</label>
                                                <input type="file"  class="form-control"
                                                    name="image" placeholder="Upload Foto Profil Pengurus">
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
                <h4 class="card-title">Daftar Pengurus Desa</h4>
            </div>
            <div class="card-body">
                <!-- table bordered -->
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>Nama Pengurus</th>
                                <th>Jabatan</th>
                                <th>No Whatsapp</th>
                                <th>Email</th>
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


  
<!-- Pop-up -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" style="overflow-y: scroll; max-height: 700px" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail-Pengurus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <img  id="image" src="" alt="" srcset="">
        
            <div class="modal-body">
                <p>Nama</p>
                <input type="text" class="form-control" id="nama" readonly>
          
                <p>Jabatan</p>
                <input type="text" class="form-control" id="jabatan" readonly>

                <p> NO Whatsapp</p>
                <input type="text" class="form-control" id="whatsapp" readonly>

                <p>Email</p>
                <input type="text" class="form-control" id="email" readonly>
           
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
            url: "/detailpengurus/" + id,
            success: function (data) {
                $('#nama').val(data.nama);
                $('#image').attr('src', '/storage/images/' + data.image);
                $('#jabatan').val(data.jabatan);
                $('#email').val(data.email);
                $('#whatsapp').val(data.whatsapp);
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
