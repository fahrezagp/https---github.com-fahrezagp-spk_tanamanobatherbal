@extends('layouts.master')
@section('hasil','active')

@section('content')

<br>

<div class="card shadow-sm mb-4">
    <div class="card-header py-3 text-center">
        <h4>Tabel Perhitungan</h4>
    </div>
        <div class="container">
            <br>
            <h3>Tabel 1 - Nilai Awal</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                    <th class="text-center" rowspan="2">Alternatif</th>
                    <th class="text-center" colspan="5"> Kriteria</th>
                     </tr>
                     <tr>
                    @foreach ($kriteria as $krit)
                    <th class="text-center">{{$krit->kriteria}}</th>
                    @endforeach
                   </tr>
                    </thead>

                    <tbody>
                         @foreach($tanaman as $nama_tanaman)
                        <tr>
                            <td class="text-center">{{$nama_tanaman->nama_tanaman}}</td>
                            @foreach ($nama_tanaman->subkriteria as $sub)
                            <td class="text-center">{{$sub->bobot}}</td>
                            @endforeach 
                        </tr> @endforeach
                    </tbody>
                </table>
            </div>

            <br>
            <h3>Tabel 2 - Dihitung sesuai sifat cost atau benefit</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                    <th class="text-center" rowspan="2">Alternatif</th>
                    <th class="text-center" colspan="5"> Kriteria</th>
                     </tr>
                     <tr>
                    @foreach ($kriteria as $krit)
                    <th class="text-center">{{$krit->kriteria}}</th>
                    @endforeach
                   </tr>
                    </thead>
                    <tbody>
                        @foreach ($hitung as $key => $value)
                        <tr>
                            <td class="text-center">{{$key}}</td>

                            @foreach($value as $key_1 => $value_1)
                            <td class="text-center">
                                {{number_format($value_1, 2)}}
                            </td>
                            @endforeach
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>

            <br>
            <h3>Tabel 3 - Dikali dengan bobot</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                    <th class="text-center" rowspan="2">Alternatif</th>
                    <th class="text-center" colspan="5"> Kriteria</th>
                     </tr>
                     <tr>
                    @foreach ($kriteria as $krit)
                    <th class="text-center">{{$krit->kriteria}}</th>
                    @endforeach
                   </tr>
                    </thead>
                    <tbody>
                        @foreach ($bobot as $key => $value)
                        <tr>
                            <td class="text-center">{{$key}}</td>

                            @foreach($value as $key_1 => $value_1)
                            <td class="text-center">
                                {{number_format($value_1, 2)}}
                            </td>
                            @endforeach
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>

            <br>
            <h3>Tabel 4 - Dijumlah sesuai dengan tanaman dan di dapat hasil rangking</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                    <th class="text-center" rowspan="2" >Alternatif</th>
                    <th class="text-center" colspan="5"> Kriteria</th>
                    <th class="text-center" rowspan="2">Total</th>
                    <th class="text-center" rowspan="2">Ranking</th>
                     </tr>
                     <tr>
                    @foreach ($kriteria as $krit)
                    <th class="text-center">{{$krit->kriteria}}</th>
                    @endforeach
                   </tr>
                    </thead>
                    <tbody>
                        @foreach ($ranking as $key => $value)
                        <tr>
                            <td class="text-center">{{$key}}</td>

                            @foreach($value as $key_1 => $value_1)
                            <td class="text-center">
                                {{number_format($value_1, 2)}}
                            </td>@endforeach
                            <td class="text-center">{{$no++}}</td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection
