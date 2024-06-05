@extends('layouts.master')
@section('content')
    @if (Auth::user()->role == '1')
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <a href="{{ url('sensor-pertanian/create') }}" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <hr />
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Peta</th>
                                        <th>Gambar</th>
                                        <th>Deskripsi</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td> <a href="{{ $item->peta }}">{{ $item->peta }}</a> </td>
                                            <td>
                                                <a href="{{ url('public/storage/gambar/' . $item->gambar) }}">
                                                    <img width="80px"
                                                        src="{{ url('public/storage/gambar/' . $item->gambar) }}"
                                                        alt=""></a>
                                            </td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>
                                                <a href="{{ url('sensor-pertanian/edit?id=' . $item->id) }}"
                                                    class="btn btn-warning m-1"><i class="bx bx-pencil"></i>
                                                </a>
                                                <a href="{{ url('sensor-pertanian/delete?id=' . $item->id) }}"
                                                    class="btn btn-danger m-1"><i class="bx bx-trash"></i>
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
        </div>
    @else
        <div class="row">
            @forelse ($data as $item)
                <div class="col-12 col-lg-12 col-xl-6 d-flex">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row row-cols-1 row-cols-md-12 g-12">
                                <div class="col">
                                    <div class="card radius-15 mb-0 shadow-none border">
                                        <div class="card-body text-center">
                                            <div class="mb-3">
                                                <img class="radius-15"
                                                    src="https://cdn.pixabay.com/photo/2015/01/10/23/04/map-595791_1280.png"
                                                    width="150" height="150" alt="">
                                            </div>
                                            {{-- <h4 class="mb-0 font-weight-bold mt-3">{{ $book }}</h4> --}}
                                            <a target="_blank" href="{{ $item->peta }}" class="btn btn-primary">Lokasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-6 d-flex">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row row-cols-1 row-cols-md-12 g-12">
                                <div class="col">
                                    <div class="card radius-15 mb-0 shadow-none border">
                                        <div class="card-body text-center">
                                            <div class="mb-3">
                                                <a href="{{ url('public/storage/gambar/' . $item->gambar) }}">
                                                    <img class="radius-15" width="150" height="150"
                                                        src="{{ url('public/storage/gambar/' . $item->gambar) }}"
                                                        alt=""></a>
                                            </div>
                                            <p>{{ $item->deskripsi }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="row row-cols-1 row-cols-md-12 g-3">
                    <div class="col">
                        <div class="card radius-15 mb-0 shadow-none border">
                            <div class="card-body">
                                <h4 class="text-center">Data belom ada....</h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    @endif


@endsection
