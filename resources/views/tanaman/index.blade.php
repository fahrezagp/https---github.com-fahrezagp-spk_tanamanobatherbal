@extends('layouts.master')
@section('tanaman','active')

@section('content')

<br>
<div class="col-10 container">
    <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-success">Alternatif Tanaman Obat</h4>

        </div>
        <div class="container"><br>
            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Alternatif Tanaman</span>
            </button>
            <hr>
            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanaman</th>
                            <th>Penyakit</th>
                            <th>Subkriteria</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tanaman as $tanaman_nama)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$tanaman_nama->nama_tanaman}}</td>
                            <td>
                                <ul class="navbar-nav"> @foreach ($tanaman_nama->penyakit as $data_penyakit)
                                <li class="nav-item"> {{$data_penyakit->nama_penyakit}}</li>
                                @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul>@foreach($tanaman_nama->subkriteria as $sub)
                                <li> 
                                    {{$sub->subkriteria}}
                                 </li>@endforeach
                                </ul>
                            </td>
                            <td></td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header font- bg-success">
                <h5 class="modal-title" id="tambahLabel">Tambah Alternatif Tanaman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/tanaman/tambah" method="POST">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="" class="form-label">Penyakit</label>
                        <select name="penyakit" id="penyakit" class="form-select form-select-sm"
                            aria-label=".form-select-sm">
                            @foreach ($penyakit as $penyakit)
                            <option value="{{$penyakit->id}}">{{$penyakit->nama_penyakit}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Tanaman</label>
                            <input name="tanaman" id="tanaman" type="text" class="form-control"
                             aria-describedby="" placeholder="Masukan Tanaman" required>
                    </div>
                    <div class="mb-3">
                        @foreach($kriteria as $krit)
                        <label for="subkriteria" class="form-label">{{$krit->kriteria}}</label>
                        <select name="subkriteria[]" id="subkriteria" class="form-select">
                            <option value="" selected disabled>Pilih Subkriteria</option>
                            @foreach ($krit->subkriteria as $sub)
                            <option value="{{$sub->id}}">{{$sub->subkriteria}}</option>
                            @endforeach
                        </select>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
