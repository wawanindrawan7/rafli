@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <a href="{{ url('book-jurnal/create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <hr />
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <a
                                                href="{{ url('public/storage/gambar/' . $item->gambar) }}">{{ $item->nama }}</a>
                                        </td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>
                                            <a href="{{ url('book-jurnal/edit?id=' . $item->id) }}"
                                                class="btn btn-warning m-1"><i class="bx bx-pencil"></i>
                                            </a>
                                            <a href="{{ url('book-jurnal/delete?id=' . $item->id) }}"
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
    @endsection
