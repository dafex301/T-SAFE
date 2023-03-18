@extends('detail')

@section('buttons')
    @if (
        (auth()->user()->Role->name === 'PIC' && !$laporan->pic_checked) ||
            (auth()->user()->Role->name === 'DPnP' && !$laporan->dpnp_checked) ||
            ($laporan->immediate_action && $laporan->prevention))
        <div class="mb-3">
            <label class="form-label" for="immediate_action">Immediate Action</label>
            <input class="form-control" id="immediate_action" name="immediate_action" type="text" placeholder=""
                value="{{ old('immediate_action') ?? ($laporan->immediate_action ?? '') }}">
            <div class="text-danger" id="immediate_action-error"></div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="prevention">Pencegahan / Perbaikan</label>
            <input class="form-control" id="prevention" name="prevention" type="text" placeholder=""
                value="{{ old('prevention') ?? ($laporan->prevention ?? '') }}">
            <div class="text-danger" id="prevention-error"></div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="completed-image">Evidence Pencegahan /
                Perbaikan</label>
            <div class="img-container-2 mb-2"></div>
            <input type="file" id="completed-image" name="completed_image" class="form-control" accept="image/*"
                capture="camera">
            <div class="text-danger" id="completed_image-error"></div>
        </div>
    @endif

    <div class="mb-3 mt-4">
        {{-- TODO --}}
        @if ($laporan->pic_checked && !$laporan->pic_rejected && !$laporan->dpnp_checked && $laporan->branch_manager_checked)
            @if (!$laporan->bm_rejected && !$laporan->dpnp_rejected && !$laporan->pic_rejected)
                <button class="btn btn-success " type="button" data-bs-toggle="modal" data-bs-target="#tutupModal">Tutup
                    Laporan</button>
                @if (auth()->user()->Role->name === 'PIC')
                    <button class="btn btn-warning " type="button" data-bs-toggle="modal"
                        data-bs-target="#tindakModal">Tindak
                        Lanjut</button>
                @endif
            @endif
            @if (
                (auth()->user()->id === $laporan->pic && $laporan->dpnp_rejected) ||
                    (auth()->user()->id === $laporan->pelapor && $laporan->pic_rejected))
                <button class="btn btn-success " type="button" data-bs-toggle="modal" data-bs-target="#revisiModal">Revisi
                    Laporan</button>
            @endif
            @if (auth()->user()->id === $laporan->pelapor && !$laporan->pic_rejected)
                <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#tolakModal">Tolak
                    Laporan</button>
            @endif


    </div>
@endsection
