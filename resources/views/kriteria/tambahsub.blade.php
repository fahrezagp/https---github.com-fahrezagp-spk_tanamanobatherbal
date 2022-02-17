@extends('layouts.master')
@section('kriteria','active')

@section('content')

<br>
<div class="col-6 container">
    <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-success">Tambah Subkriteria</h4>
        </div>
        <div class="container"><br>
             <form action="/kriteria/{{$kriteria->id}}/tambahsubkriteria" method="POST">
                {{ csrf_field() }}
            <div class="table-responsive">
                <table class="table table-borderless">
                        <tr>
                            <th>Kriteria</th>
                            <td><input type="text" name="kriteria"  value="{{$kriteria->kriteria}}" class="form-control" disabled></td>
                        </tr>
                 
                        <tr>
                            <th>Bobot</th>
                            <td><input type="text" name="bobot"  class="form-control" ></td> 
                        </tr>
                        <tr>
                            <th>Sifat</th>
                            <td>
                                <input type="text" name="subkriteria" class="form-control" >
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="submit" class="btn btn-primary btn-primary float-end">Simpan</button></td>
                        </tr>
                </table>
            </div>
                </form>
            </div>
        </div>
    </div>
    



    @endsection
