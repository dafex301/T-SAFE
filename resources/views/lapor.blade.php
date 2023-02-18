@extends('layouts.main')

@section('container')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header"><strong>Lapor Potensi Bahaya</strong></div>
            <form action="" method="post">

                <div class="card-body">

                    <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-719">
                        <div class="mb-3">
                        <label class="form-label" for="inputTanggal">Hari dan Tanggal</label>
                        <input class="form-control" id="inputTanggal" type="date" placeholder="">
                        </div>
                        <div class="mb-3">
                        <label class="form-label" for="lokasi">Lokasi</label>
                        <input class="form-control" id="lokasi" type="text" placeholder="">
                        </div>
                        <div class="mb-3">
                        <label class="form-label" for="jenis">Jenis / Kategori Potensi Bahaya</label>
                        <select class="form-select" aria-label="Jenis" id="jenis" name="jenis">
                            <option selected="">Pilih Jenis / Kategori</option>
                            <option value="Kimia">Kimia</option>
                            <option value="Fisik">Fisik</option>
                            <option value="Biologi">Biologi</option>
                            <option value="Ergonomi">Ergonomi</option>
                            <option value="Psikososial">Psikososial</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                        </div>
                        <div class="mb-3" id="jenis-lain-container" style="display: none;">
                            <label class="form-label" for="jenis-lain">Jenis / Kategori</label>
                            <input class="form-control" name="jenis-lain" id="jenis-lain" type="text" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="deskripsi">Deskripsi</label>
                            <input class="form-control" id="deskripsi" type="text" placeholder="" value="Banjir" disabled>
                            </div>
                        <div class="mb-3">
                            <label class="form-label" for="dokumentasi">Dokumentasi</label>
                            <div class="img-container mb-2"></div>
                            <input type="file" id="dokumentasi" class="form-control" accept="image/*" capture="camera">
                        </div>
                        <div class="mb-3 mt-4">
                            <button class="btn btn-primary" type="button">Submit Laporan</button>
                        </div>
                    </div>
                    </div>
                </div>
            </form>

          </div>
        </div>
    </div>
    </div>
    </div>
@endsection