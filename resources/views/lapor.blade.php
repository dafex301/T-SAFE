@extends('layouts.main')

@section('container')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Lapor Potensi Bahaya</strong></div>
                        <form action="{{ route('lapor.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-719">
                                        <div class="mb-3">
                                            <label class="form-label" for="inputTanggal">Hari dan Tanggal</label>
                                            <input class="form-control" id="inputTanggal" type="date" name="tanggal"
                                                placeholder="" value="{{ old('tanggal') }}">
                                            @error('tanggal')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="lokasi">Lokasi</label>
                                            <input class="form-control" id="lokasi" type="text" name="lokasi"
                                                placeholder="" value="{{ old('lokasi') }}">
                                            @error('lokasi')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div id="aset-selector" class="mb-3">
                                            <label class="form-label" for="jenis">Jenis Aset</label>
                                            <small class="form-text text-muted">Jika tidak ada dalam pilihan, pilih
                                                Lainnya untuk menambahkan aset</small>
                                            <select id="aset" name="aset" class="select-search"
                                                placeholder="Pilih Aset">
                                                @if (old('aset') == null)
                                                    <option value="" disabled selected>Pilih Aset</option>
                                                @else
                                                    <option value="" disabled>Pilih Aset</option>
                                                @endif

                                                {{-- Foreach kategori --}}
                                                @foreach ($aset as $item)
                                                    @if (old('aset') == $item->nomor)
                                                        <option value="{{ $item->nomor }}" selected>{{ $item->nomor }} -
                                                            {{ $item->nama }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $item->nomor }}">{{ $item->nomor }} -
                                                            {{ $item->nama }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                                <option value="0">Lainnya</option>

                                            </select>
                                            @error('aset')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div id="aset-lain-container" style="display: none">
                                            <div class="mb-3 d-flex gap-4">

                                                <div class="flex-grow-1">
                                                    <label class="form-label" for="nama-aset">Nama Aset</label>
                                                    <input class="form-control" id="nama-aset" type="text"
                                                        name="aset_lain" value="{{ old('aset_lain') }}">
                                                    @error('aset_lain')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="jenis">Jenis / Kategori Potensi Bahaya</label>
                                            <select class="form-select" aria-label="Jenis" id="jenis" name="kategori">
                                                @if (old('kategori') == null)
                                                    <option value="" disabled selected>Pilih Jenis / Kategori</option>
                                                @else
                                                    <option value="" disabled>Pilih Jenis / Kategori</option>
                                                @endif
                                                {{-- Foreach kategori --}}
                                                @foreach ($kategori as $item)
                                                    @if (old('kategori') == $item->id)
                                                        <option value="{{ $item->id }}" selected>{{ $item->name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endif
                                                @endforeach
                                                @if (old('kategori') == '0')
                                                    <option selected value="0">Lain-lain</option>
                                                @else
                                                    <option value="0">Lain-lain</option>
                                                @endif
                                                {{-- End Foreach --}}
                                            </select>
                                            @error('kategori')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3" id="jenis-lain-container" style="display: none">
                                            <label class="form-label" for="jenis-lain">Jenis / Kategori</label>
                                            <input class="form-control" name="kategori_lain" id="jenis-lain" type="text"
                                                placeholder="" value="{{ old('kategori_lain') }}">
                                            @error('kategori_lain')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="deskripsi">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsi" type="text" placeholder="" name="deskripsi"
                                                value="{{ old('deskripsi') }}"></textarea>
                                            @error('deskripsi')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="image">Dokumentasi</label>
                                            <div class="img-container mb-2"></div>
                                            <input type="file" id="dokumentasi" class="form-control" accept="image/*"
                                                capture="camera" value="{{ old('image') }}" name="image[]" multiple
                                                required>
                                            @error('image')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 mt-4">
                                            <button class="btn btn-primary" type="submit">Submit Laporan</button>
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
    <script defer>
        document.getElementById('inputTanggal').valueAsDate = new Date();
    </script>

    <script>
        $(document).ready(function() {
            $('#aset').on('change', function() {
                var asetLainContainer = $('#aset-lain-container');
                if ($(this).val() == '0') {
                    asetLainContainer.show();
                } else {
                    asetLainContainer.hide();
                }
            });
        });
    </script>
@endsection
