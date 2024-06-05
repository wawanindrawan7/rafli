@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('sensor-pertanian/create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Peta</label>
                            <input type="text" name="peta" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control"></textarea>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    @endsection
