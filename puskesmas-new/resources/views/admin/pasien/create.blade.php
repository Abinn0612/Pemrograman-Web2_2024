<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_content">
    <form class="forms-sample" action="{{ url('admin2/pasien/store') }}" method="post">
        @csrf
          <div class="form-group row">
              <label for="nama" class="col-sm-4 col-form-label">Nama Pasien</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="kode" name="kode"
                      placeholder="Masukkan Kode Pasien">
              </div>
          </div>
          <div class="form-group row">
              <label for="nama" class="col-sm-4 col-form-label">Nama Pasien</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama" name="nama"
                      placeholder="Masukkan Nama Pasien">
              </div>
          </div>
          <div class="form-group row">
              <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                      placeholder="Masukkan Tempat Lahir">
              </div>
          </div>
          <div class="form-group row">
              <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-8">
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                      placeholder="Masukkan Tanggal Lahir">
              </div>
          </div>
          <div class="form-group row">
              <label for="gender" class="col-sm-4 col-form-label">Gender</label>
              <div class="col-sm-8">
                  <select class="form-control" name="gender" id="gender">
                    <option value="">Pilih Gender</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  </select>
              </div>
          </div>
          <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">Email</label>
              <div class="col-sm-8">
                  <input type="email" class="form-control" id="email" name="email"
                      placeholder="Masukkan Email">
              </div>
          </div>
          <div class="form-group row">
              <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="alamat" name="alamat"
                      placeholder="Masukkan Alamat">
              </div>
          </div>
          <div class="form-group row">
              <label for="kelurahan_nama" class="col-sm-4 col-form-label">Kelurahan Nama</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="kelurahan_nama" name="kelurahan_nama"
                      placeholder="Masukkan Nama Kelurahan">
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-4"></div>
              <div class="col-sm-8">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
              </div>
          </div>
      </form>
    </x-slot>

</x-layout>