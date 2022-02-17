@extends('layouts.master')
@section('kriteria','active')

@section('content')

<div class="col-10 container">
    <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-success">Daftar Kriteria</h4>

        </div>
        <div class="container"><br>
            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Kriteria</span>
            </button>
            <hr>
            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kriteria</th>
                            <th>Sifat</th>
                            <th>Bobot</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kriteria as $kriteria)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$kriteria->kriteria}}</td>
                            <td>{{$kriteria->sifat}}</td>
                            <td>{{$kriteria->bobot}}</td>
                            <td><a href="/kriteria/{{$kriteria->id}}/tambahsub" class="btn btn-success btn-circle btn-sm"
                                    data-toggle="tooltip" data-placement="right" title="Tambah Subkriteria">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <a href="/penyakit/{{$kriteria->id}}/hapus" class="btn btn-danger btn-circle btn-sm"
                                    data-toggle="tooltip" data-placement="right" title="Hapus Data"
                                    onclick="return confirm ('Apakah Yakin Akan Menghapus Data ?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header font- bg-success">
                <h5 class="modal-title" id="tambahLabel">Tambah Kriteria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/kriteria/tambah" method="POST">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="" class="form-label">Kriteria</label>
                        <input name="kriteria" type="text" class="form-control" id="" aria-describedby=""
                            placeholder="Masukan Kriteria" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Sifat</label>
                        <select name="sifat" id="" class="form-select form-select-sm" aria-label=".form-select-sm ">
                            <option value="Benefit">Benefit</option>
                            <option value="Cost">Cost</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Bobot</label>
                        <input name="bobot" type="number" class="form-control" id="" aria-describedby=""
                            placeholder="Masukan Bobot" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalsub" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header font- bg-success">
                <h5 class="modal-title" id="tambahLabel">Tambah Subkriteria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/kriteria/tambah" method="POST">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="" class="form-label">Kriteria</label>
                        <input name="kriteria" type="text" class="form-control" id="" aria-describedby=""
                            placeholder="Masukan Kriteria" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Sifat</label>
                        <select name="sifat" id="" class="form-select form-select-sm" aria-label=".form-select-sm ">
                            <option value="Benefit">Benefit</option>
                            <option value="Cost">Cost</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Bobot</label>
                        <input name="bobot" type="number" class="form-control" id="" aria-describedby=""
                            placeholder="Masukan Bobot" required>
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
