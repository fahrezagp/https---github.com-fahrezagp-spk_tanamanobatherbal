@extends('layouts.master')
@section('subkriteria','active')

@section('content')

<div class="col-10 container">
    <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-success">Daftar Subkriteria</h4>
            
        </div>
        <div class="container"><br>
            <hr>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th>No</th>
                                <th>Subkriteria</th>
                                <th>Bobot</th>
                                <th>Sifat</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                                <tbody>
                                    @foreach ($subkriteria as $subkriteria)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$subkriteria->kriteria->kriteria}}</td>
                                        <td>{{$subkriteria->bobot}}</td>
                                        <td>{{$subkriteria->subkriteria}}</td>
                                        <td><a href="/subkriteria/{{$subkriteria->id}}/hapus" class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="right" title="Hapus Data" 
                                onclick="return confirm ('Apakah Yakin Akan Menghapus Data ?')">
                                <i class="fas fa-trash"></i>
                              </a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
             </div>
        </div>
    </div>
</div>

                        @endsection
