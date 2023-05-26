@extends('admin.layouts.layoutsadmin')


@section('content')


<center>
    <h1>Halaman berita</h1>

</center>

<h2></h2>
<div class="container flex ">


    <form action="{{ route('berita.index') }}" method="post" target="_self" enctype="multipart/form-data" role="form"
        data-toggle="validator" novalidate>
        @csrf

        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label>Judul Berita</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" name="judul_berita" id="" class="form-control">
                </div>

            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label>Isi Berita</label>
                </div>
                <div class="col-sm-10">
                    <textarea type="text" name="isi_berita" class="form-control"></textarea>
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

    <hr>


    <div class="table-responsive">
        <table class="table" id="table">
            <thead>
                <tr>
                    <th>Judul Berita</th>
                    <th>Isi Berita</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($berita as $A )
                <tr>
                    <td>{{$A->judul_berita}}</td>
                    <td>{{$A->isi_berita}}</td>
                    <td>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" onclick="getpop({{$A->id_berita}})">view </a>
                                </div>
                                <div class="col-sm-6">

                                    <a href="/berita/{{$A->id_berita}}/edit">edit</a>

                                </div>

                                <form action="/berita/{{$A->id_berita}}" method="POST">
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

</script>

{{-- 
ajax untuk delete --}}
@endsection
