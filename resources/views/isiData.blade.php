@extends ('templates/master')




@section('container')
<h1 class="h3 mb-4 text-gray-800">Isi Data Responden</h1>
<div class="container">
 <div class="row">
  <div class="col-6">
  <form>
  
    <div class="form-group">
    <label for="inputState">Identitas Instansi atau Perusahaan :</label>
      <select id="inputState" class="form-control">
        <option selected>Satuan Kerja</option>
        <option>Direktorat</option>
        <option>Departemen</option>
      </select>
    </div>
    
  
    <div class="form-row">
    <div class="form-group col-md-5">
      <label for="alamat1">Alamat 1</label>
      <input type="text" class="form-control" id="alamat1">
    </div>
    <div class="form-group col-md-5">
      <label for="alamat 2">Alamat 2</label>
      <input type="text" class="form-control" id="alamat2">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Kode Pos</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>

  <div class="form-group">
    <label for="noTelpon">No Telpon</label>
    <input type="text" class="form-control" id="noTelpon" placeholder="(Kode Area) Nomor Telpon">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="user@departemen_responden.go.id">
  </div>

  <div class="form-group">
    <label for="lembarEvaluasi">Pengisi Lembar Evaluasi</label>
    <input type="text" class="form-control" id="lembarEvaluasi" placeholder="Nama Staf atau Pejabat">
  </div>

  <div class="form-group">
    <label for="jabatan">Jabatan :</label>
    <input type="text" class="form-control" id="jabatan" placeholder="Jabatan Struktural/Fungsional">
  </div>

  <div class="form-group">
    <label for="tglPengisian">Tanggal Pengisian :</label>
    <input type="date" class="form-control" id="tglPengisian">
  </div>

  <div class="form-group">
    <label for="deskripsi">Deskripsi Ruang Lingkup :</label>
    <textarea class="form-control" id="deskripsi" rows="3" placeholder="Isi dengan deskripsi ruang lingkup struktur organisasi (Departemen, Bagian atau Satuan Kerja) dan infrastruktur TIK
"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>    
  </div>
 </div>
</div>

@endsection