@extends('layouts.main')

@section('container')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header"><strong>Form Evaluasi Alat Kerja</strong></div>
                        <form action="{{ route('k3.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="tab-content rounded-bottom">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Jenis Alat Kerja</th>
                                                <th scope="col">QTY</th>
                                                <th scope="col">Kondisi</th>
                                                <th scope="col">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Apar</td>
                                                <td>
                                                    <input type="number" name="qty[]" value="3" id="">
                                                </td>
                                                <td>
                                                    <input class="" type="checkbox" name="layak[]">
                                                    <label for="layak">Layak</label>
                                                    <input class="ms-4" type="checkbox" name="tidak_layak[]">
                                                    <label for="tidak_layak">Tidak Layak</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Genset</td>
                                                <td>
                                                    <input type="number" name="qty[]" value="3" id="">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="layak[]">
                                                    <label for="layak">Layak</label>
                                                    <input class="ms-4" type="checkbox" name="tidak_layak[]">
                                                    <label for="tidak_layak">Tidak Layak</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Hydrant</td>
                                                <td>
                                                    <input type="number" name="qty[]" value="3" id="">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="layak[]">
                                                    <label for="layak">Layak</label>
                                                    <input class="ms-4" type="checkbox" name="tidak_layak[]">
                                                    <label for="tidak_layak">Tidak Layak</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Penangkal Petir</td>
                                                <td>
                                                    <input type="number" name="qty[]" value="3" id="">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="layak[]">
                                                    <label for="layak">Layak</label>
                                                    <input class="ms-4" type="checkbox" name="tidak_layak[]">
                                                    <label for="tidak_layak">Tidak Layak</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Smoke Detector</td>
                                                <td>
                                                    <input type="number" name="qty[]" value="3" id="">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="layak[]">
                                                    <label for="layak">Layak</label>
                                                    <input class="ms-4" type="checkbox" name="tidak_layak[]">
                                                    <label for="tidak_layak">Tidak Layak</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>UPS</td>
                                                <td>
                                                    <input type="number" name="qty[]" value="3" id="">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="layak[]">
                                                    <label for="layak">Layak</label>
                                                    <input class="ms-4" type="checkbox" name="tidak_layak[]">
                                                    <label for="tidak_layak">Tidak Layak</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>Fire Alarm</td>
                                                <td>
                                                    <input type="number" name="qty[]" value="3" id="">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="layak[]">
                                                    <label for="layak">Layak</label>
                                                    <input class="ms-4" type="checkbox" name="tidak_layak[]">
                                                    <label for="tidak_layak">Tidak Layak</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>Sprinkle (Aset Melekat Gedung)</td>
                                                <td>
                                                    <input type="number" name="qty[]" value="3" id="">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="layak[]">
                                                    <label for="layak">Layak</label>
                                                    <input class="ms-4" type="checkbox" name="tidak_layak[]">
                                                    <label for="tidak_layak">Tidak Layak</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">9</th>
                                                <td>CCTV</td>
                                                <td>
                                                    <input type="number" name="qty[]" value="3" id="">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="layak[]">
                                                    <label for="layak">Layak</label>
                                                    <input class="ms-4" type="checkbox" name="tidak_layak[]">
                                                    <label for="tidak_layak">Tidak Layak</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">10</th>
                                                <td>Paging System</td>
                                                <td>
                                                    <input type="number" name="qty[]" value="3" id="">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="layak[]">
                                                    <label for="layak">Layak</label>
                                                    <input class="ms-4" type="checkbox" name="tidak_layak[]">
                                                    <label for="tidak_layak">Tidak Layak</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">11</th>
                                                <td>Kotak / Alat P3K</td>
                                                <td>
                                                    <input type="number" name="qty[]" value="3" id="">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="layak[]">
                                                    <label for="layak">Layak</label>
                                                    <input class="ms-4" type="checkbox" name="tidak_layak[]">
                                                    <label for="tidak_layak">Tidak Layak</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">12</th>
                                                <td>Heat Detector</td>
                                                <td>
                                                    <input type="number" name="qty[]" value="3" id="">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="layak[]">
                                                    <label for="layak">Layak</label>
                                                    <input class="ms-4" type="checkbox" name="tidak_layak[]">
                                                    <label for="tidak_layak">Tidak Layak</label>
                                                </td>
                                                <td></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="mb-3 mt-4">
                                    <button class="btn btn-primary" type="submit">Submit Laporan</button>
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
