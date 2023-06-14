
<center>
    <center>
        <h1>Halaman Menu builder</h1>
    </center>
    <form action="/Produk" method="post" target="_self" enctype="multipart/form-data"
    role="form" data-toggle="validator" novalidate>
    @csrf
    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <label>konten 1</label>
            </div>
            <div class="col-sm-10">
                <select name="k1" class="form-control">
                    <option value="">Pilih </option>
                    <option value="berita">berita</option>
                    <option value="desa">Desa wisata</option>
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
                    <option value="">Pilih </option>
                    <option value="berita">berita</option>
                    <option value="desa">Desa wisata</option>
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
                    <option value="">Pilih </option>
                    <option value="berita">berita</option>
                    <option value="desa">Desa wisata</option>
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
                    <option value="">Pilih </option>
                    <option value="berita">berita</option>
                    <option value="desa">Desa wisata</option>
                    <option value="produk">produk</option>
                    <option value="pengurus">pengurus</option>
                </select>
            </div>
        </div>
    </div>
    
    <button type="submit" class="btn primary-button">simpan</button>
    </form>
</center>
