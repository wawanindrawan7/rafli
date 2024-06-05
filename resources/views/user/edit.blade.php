@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('users/edit') }}">
                        @csrf

                        <input type="hidden" value="{{ $data->id }}" name="id">

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" value="{{ $data->name }}" name="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" value="{{ $data->email }}" name="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <select name="role" class="form-control">
                                <option value="1" {{ $data->role == 1 ? 'selected' : '' }}>Admin</option>
                                <option value="2" {{ $data->role == 2 ? 'selected' : '' }}>Masyarakat NTB</option>
                                <option value="3" {{ $data->role == 3 ? 'selected' : '' }}>Kementaan Pemprov NTB
                                </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" value="{{ $data->alamat }}" name="alamat" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
