@extends('layouts.master')
@section('penilaian','active')

@section('content')

<br>
<div class="col-10 container">
    <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-success">Daftar Tanaman</h4>

        </div>
        <div class="container"><br>
            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Tanaman</span>
            </button>
            <hr>
            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanaman</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tanaman as$tanaman)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$tanaman->nama_tanaman}}</td>
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
                <h5 class="modal-title" id="tambahLabel">Tambah Tanaman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
        </div>
    </div>
</div>

@endsection
