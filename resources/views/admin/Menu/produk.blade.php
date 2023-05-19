@extends('admin.layouts.layoutsadmin')


@section('content')


    <center>
        <h1>Halaman Produk</h1>
        
    </center>

    <h2></h2>
    <div class="container flex ">
            				
    <form name="formmember" id="formmember" action="/Produk" method="post"
     
    target="_self" enctype="multipart/form-data" role="form" data-toggle="validator" novalidate>
    @csrf
        <input type="hidden" name="id_produk" id="id_member" />

        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label>Nama Produk</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" name="nama_produk" id="lapak" class="form-control">
                </div>

            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label>Informasi Produk</label>
                </div>
                <div class="col-sm-10">
                    <textarea type="text" name="informasi_produk" id="username" class="form-control"></textarea>
                </div>

            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label>Harga Produk</label>
                </div>
                <div class="col-sm-10">
                    <input type="number" name="hargaproduk" id="alamat" class="form-control" >
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label>Map</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" name="map" id="map" class="form-control">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">input</button>

    </form>

<hr>

<div id="detail"></div>

<div class="table-responsive">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">nama Produk</th>
            <th scope="col">Informasi Produk</th>
            <th scope="col">harga</th>
            <th scope="col">map</th>
            <th>action</th>
          </tr>
        </thead>
     
      <tbody>
          <tbody>
              @foreach ($produk as $A )
            <tr>
             
              <td>{{$A->nama_produk}}</td>
              <td >{{$A->informasi_produk}}</td>
              <td>{{$A->harga_produk}}</td>
              <td>{{$A->map}}</td>
            
              <td><a href="#" onclick="getpop()">view </a></td>
            </tr>
            @endforeach
          </tbody>
   
      </tbody>  
    </table>
</div>
@extends('admin.Menu.popup')
@endsection