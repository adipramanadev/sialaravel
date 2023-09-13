@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('jurusan.store')}}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="">Nama Jurusan</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group mt-4">
                                <label for="">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan">
                            </div>
                            <button class="btn btn-success mt-3">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
