@extends('layouts.main')

@section('container')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Verifikasi Potensi Bahaya</strong></div>
                        <form action="/verifikasi/{{ $laporan->id }}" method="post" enctype="multipart/form-data"
                            id="verifikasi-laporan-form">
                            @csrf
                            <div class="card-body">

                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-719">
                                        <div class="mb-3">
                                            <label class="form-label" for="pelapor">Pelapor</label>
                                            <input class="form-control" id="pelapor" type="text" name="pelapor"
                                                disabled value="{{ $laporan->Pelapor->name }}">
                                            @error('tanggal')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="verifyTanggal">Hari dan Tanggal</label>
                                            <input class="form-control" id="verifyTanggal" type="date" name="tanggal"
                                                placeholder="" value="{{ old('tanggal') ?? ($laporan->tanggal ?? '') }}"
                                                name="tanggal" disabled>
                                            @error('tanggal')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="lokasi">Lokasi</label>
                                            <input class="form-control" id="lokasi" type="text" name="lokasi"
                                                placeholder="" value="{{ old('lokasi') ?? ($laporan->lokasi ?? '') }}">
                                            @error('lokasi')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="jenis">Jenis / Kategori Potensi Bahaya</label>
                                            <select class="form-select" aria-label="jenis" id="jenis" name="kategori">
                                                <option value="">Pilih Jenis / Kategori</option>
                                                {{-- Foreach kategori --}}
                                                @foreach ($kategori as $item)
                                                    @if (old('kategori') == $item->id)
                                                        <option value="{{ $item->id }}" selected>{{ $item->name }}
                                                        </option>
                                                    @elseif ($laporan->kategori == $item->id)
                                                        <option value="{{ $item->id }}" selected>{{ $item->name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endif
                                                @endforeach
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
                                                placeholder=""
                                                value="{{ old('kategori_lain') ?? ($laporan->kategori_lain ?? '') }}">
                                            @error('kategori_lain')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="deskripsi">Deskripsi</label>
                                            <input class="form-control" id="deskripsi" type="text" placeholder=""
                                                name="deskripsi"
                                                value="{{ old('deskripsi') ?? ($laporan->deskripsi ?? '') }}">
                                            @error('deskripsi')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="image">Dokumentasi</label>
                                            <div class="mb-2"><img src="/storage/{{ $laporan->image }}" alt="Dokumentasi"
                                                    class="img-fluid col-lg-8" srcset=""></div>

                                            @error('image')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="immediate_action">Immediate Action</label>
                                            <input class="form-control" id="immediate_action" name="immediate_action"
                                                type="text" placeholder=""
                                                value="{{ old('immediate_action') ?? ($laporan->immediate_action ?? '') }}">
                                            <div class="text-danger" id="immediate_action-error"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="prevention">Pencegahan / Perbaikan</label>
                                            <input class="form-control" id="prevention" name="prevention" type="text"
                                                placeholder=""
                                                value="{{ old('prevention') ?? ($laporan->prevention ?? '') }}">
                                            <div class="text-danger" id="prevention-error"></div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="completed_image">Evidence Pencegahan /
                                                Perbaikan</label>
                                            <div class="img-container mb-2"></div>
                                            <input type="file" id="completed_image" name="completed_image"
                                                class="form-control" accept="image/*" capture="camera">
                                            <div class="text-danger" id="completed_image-error"></div>
                                        </div>

                                        <button type="submit" hidden id="verifikasi-laporan-submit">Tutup
                                            Laporan</button>
                                        <div class="mb-3 mt-4">
                                            <button class="btn btn-success " type="button" data-bs-toggle="modal"
                                                data-bs-target="#tutupModal">Tutup Laporan</button>
                                            @if (auth()->user()->Role->name === 'PIC')
                                                <button class="btn btn-warning " type="button" data-bs-toggle="modal"
                                                    data-bs-target="#tindakModal">Tindak Lanjut</button>
                                            @endif
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

    <!-- Tutup Modal -->
    <div class="modal fade" id="tutupModal" tabindex="-1" aria-labelledby="tutupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tutupModalLabel">Tutup Laporan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="cancelModal"></button>
                </div>
                <div class="modal-body ">
                    <div class="d-flex align-items-center">
                        <img src="{{ url('assets/img/accept.jpeg') }}" alt="" srcset="" class="w-25">
                        <h3 class="ms-2">Apakah anda yakin untuk menutup laporan?</h3>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-success" id="tutup-laporan">Tutup
                        Laporan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Tutup Modal -->

    <!-- Tindaklanjuti Modal -->
    <div class="modal fade" id="tindakModal" tabindex="-1" aria-labelledby="tindakModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tindakModalLabel">Tindak Lanjut</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center">
                        <img src="{{ url('assets/img/tindaklanjut.jpeg') }}" alt="" srcset=""
                            class="w-25">
                        <h3 class="ms-3">Apakah anda yakin untuk tindak lanjut laporan?</h3>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-warning" id="tindak-lanjut">Tindak Lanjut</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Tindaklanjuti Modal -->

    {{-- Script --}}
    <script defer>
        // Tutup Laporan Validation
        $('#tutup-laporan').click(function() {
            if ($('#immediate_action').val() == '') {
                $('#immediate_action-error').html('Harap isi immediate action');
            } else {
                $('#immediate_action-error').html('');
            }
            if ($('#prevention').val() == '') {
                $('#prevention-error').html('Harap isi langkah pencegahan');
            } else {
                $('#prevention-error').html('');
            }
            if ($('#completed_image').val() == '') {
                $('#completed_image-error').html('Harap masukkan dokumentasi');
            } else {
                $('#completed_image-error').html('');
            }
            if ($('#immediate_action').val() != '' && $('#prevention').val() != '' && $('#completed_image').val() !=
                '') {
                $('#verifikasi-laporan-submit').click();
            }
            $('#cancelModal').click();
        });

        $('#tindak-lanjut').click(function() {
            $('#verifikasi-laporan-form').attr('action',
                "{{ route('laporan.tindaklanjut', $laporan->id) }}");
            $('#verifikasi-laporan-submit').click();
            $('#cancelModal').click();
        });
    </script>

    {{-- Script --}}
@endsection
