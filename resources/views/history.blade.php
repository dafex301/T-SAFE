@extends('layouts.main')

@section('container')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header"><strong>History Potensi Bahaya</strong></div>

                        <div class="card-body">

                            <div class="tab-content rounded-bottom table-responsive">
                                <div class="tab-pane active preview" role="tabpanel" id="preview-719">
                                    <table class="table table-hover" id="myTable">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Lokasi</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Aset</th>
                                                <th scope="col">Pelapor</th>
                                                <th scope="col">Immediate Action</th>
                                                <th scope="col">Perbaikan</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($laporan as $l)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <th scope="row">{{ $l->deskripsi }}</th>
                                                    <td>
                                                        {{ $l->created_at->format('d M Y') }}
                                                    </td>
                                                    <td>{{ $l->lokasi }}</td>
                                                    @if ($l->kategori !== 0)
                                                        <td>{{ $l->Kategori->name }}</td>
                                                    @else
                                                        <td>{{ $l->kategori_lain }}</td>
                                                    @endif
                                                    <td>{{ $l->aset ? $l->Aset->nomor . ' ' . $l->Aset->nama : '-' }}</td>
                                                    <td>{{ $l->Pelapor->name }}</td>
                                                    <td>{{ $l->immediate_action ?? '-' }}</td>
                                                    <td>{{ $l->prevention ?? '-' }}</td>
                                                    <td>
                                                        @if ($l->completed)
                                                            <span class="badge text-bg-success">Selesai</span>
                                                        @elseif ($l->pic_rejected)
                                                            <span class="badge text-bg-danger">Ditolak PIC</span>
                                                        @elseif ($l->branch_manager_rejected)
                                                            <span class="badge text-bg-danger">Ditolak BM</span>
                                                        @elseif ($l->dpnp_rejected)
                                                            <span class="badge text-bg-danger">Ditolak DPnP</span>
                                                        @elseif ($l->branch_manager_checked)
                                                            <span class="badge text-bg-info">Diproses DPnP</span>
                                                        @elseif ($l->pic_checked)
                                                            <span class="badge text-bg-info">Diproses BM</span>
                                                        @else
                                                            <span class="badge text-bg-secondary">Diproses PIC</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-primary img-docs"
                                                            data-bs-toggle="modal" data-bs-target="#imageModal"
                                                            data-bs-whatever="{{ $l->DokumentasiLaporan }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"
                                                                style="height: 20px;">
                                                                <path strokeLinecap="round" strokeLinejoin="round"
                                                                    d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                                            </svg>
                                                        </button>
                                                        @if ($l->DokumentasiSelesai->count() > 0)
                                                            <button type="button"
                                                                class="btn btn-outline-success completed-img-docs"
                                                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                                                data-bs-whatever="{{ $l->DokumentasiSelesai }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" strokeWidth={1.5}
                                                                    stroke="currentColor" style="height: 20px;">
                                                                    <path strokeLinecap="round" strokeLinejoin="round"
                                                                        d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                                                </svg>
                                                            </button>
                                                            @if ($l->completed)
                                                                <a href="/print/{{ $l->id }}" target="_blank"
                                                                    class="btn btn-outline-success completed-img-docs">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" strokeWidth={1.5}
                                                                        stroke="currentColor" style="height: 20px;">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                                                    </svg>

                                                                </a>
                                                            @endif
                                                        @endif

                                                        {{-- if logged in user role === Admin or $l->pelapor === auth id --}}
                                                        @if (auth()->user()->Role->name === 'Admin' || $l->pelapor === auth()->user()->id)
                                                            <button type="button" class="btn btn-outline-danger img-docs"
                                                                data-bs-toggle="modal" data-bs-target="#removeModal"
                                                                data-bs-whatever="{{ $l->id }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6"
                                                                    style="height: 20px">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                </svg>
                                                            </button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

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
                    <img src="assets/img/image.png" class="img-fluid" alt="Responsive image">
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

    <!-- remove Modal -->
    <div class="modal fade" id="removeModal" tabindex="-1" aria-labelledby="removeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="removeModalLabel">Hapus Laporan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin untuk menghapus laporan ini?</p>
                </div>
                <form action="/laporan/id" method="POST" id="removeForm">
                    @csrf
                    @method('DELETE')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- End of remove Modal -->

    <script>
        $('.img-docs').click(function() {
            $('#imageModalLabel').text('Dokumentasi');
        });
        $('.completed-img-docs').click(function() {
            $('#imageModalLabel').text('Dokumentasi Selesai');
        });

        $('#removeModal').on('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget;
            // Extract info from data-bs-* attributes
            var id = $(button).data('bs-whatever');

            // Update the form action
            $('#removeForm').attr('action', '/laporan/' + id);
        });
    </script>
@endsection
