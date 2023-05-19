

{{-- ini Popup untuk Produk --}}
<style>
  .popup {
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
width: 400px;
background-color: #fff;
padding: 20px;
border: 1px solid #ccc;
}</style>

<div style="display: none">
<div id="iklan" >
<div class="popup">
<h2>Detail</h2>
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
<button onclick='closePopup()'>Tutup</button>
</div>
</div>
</div>   

<script>
  function getpop() {
    var isi = document.getElementById('iklan');
    var iklan = isi.innerHTML;

    // tambahkan isi pop up
    $('#detail').html(iklan);
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
   </script>