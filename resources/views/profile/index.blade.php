@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('profile/edit') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $data->id }}" name="id">

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name" value="{{ $data->name }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="{{ $data->email }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" value="{{ $data->alamat }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    @endsection
