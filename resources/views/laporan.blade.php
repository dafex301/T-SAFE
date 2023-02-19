@extends('layouts.main')

@section('container')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Laporan Potensi Bahaya</strong></div>
                        <form action="" method="post">

                            <div class="card-body">

                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane active preview" role="tabpanel" id="preview-719">
                                        <table class="table table-hover" id="myTable">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Deskripsi</th>
                                                    <th scope="col">Hari, Tanggal</th>
                                                    <th scope="col">Lokasi</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">Pelapor</th>
                                                    @if (auth()->user()->Role == 'Staff')
                                                        <th scope="col">Status</th>
                                                    @endif
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- Foreach laporan --}}
                                                @foreach ($laporan as $l)
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <th scope="row">{{ $l->deskripsi }}</th>
                                                        <td>{{ \Carbon\Carbon::parse($l->tanggal)->locale('id')->isoFormat('dddd, D/MM/YYYY') }}
                                                        </td>

                                                        <td>{{ $l->lokasi }}</td>
                                                        <td>{{ $l->Kategori->name == 'Lain-lain' ? $l->kategori_lain : $l->Kategori->name }}
                                                        </td>
                                                        <td>{{ $l->Pelapor->name }}</td>
                                                        @if (auth()->user()->Role == 'Staff')
                                                            <td>
                                                                @if ($l->completed)
                                                                    <span class="badge text-bg-success">Selesai</span>
                                                                @elseif ($l->pic_checked)
                                                                    <span class="badge text-bg-info">Diproses DPP</span>
                                                                @else
                                                                    <span class="badge text-bg-secondary">Diproses
                                                                        PIC</span>
                                                                @endif
                                                            </td>
                                                        @endif
                                                        <td>
                                                            <button type="button" class="btn btn-outline-primary"
                                                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                                                data-bs-whatever="{{ $l->image }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" strokeWidth={1.5}
                                                                    stroke="currentColor" style="height: 20px;">
                                                                    <path strokeLinecap="round" strokeLinejoin="round"
                                                                        d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                                                </svg>
                                                            </button>
                                                            @if (auth()->user()->Role->name !== 'Staff')
                                                                <a href="/verifikasi/{{ $l->id }}"
                                                                    class="btn btn-outline-success">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" style="height: 20px">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                                    </svg>
                                                                </a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="imageModalLabel">Dokumentasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Image Modal -->

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin untuk me-reject laporan ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Delete Modal -->
@endsection
