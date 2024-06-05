@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-12 col-lg-12 col-xl-8 d-flex">
            <div class="card radius-15 w-100">
                <div class="card-header">
                    <h4 class="text-center">Book / Jurnal</h4>
                </div>
                <div class="card-body">
                    @forelse ($book as $item)
                        <div class="row row-cols-1 row-cols-md-12 g-3">
                            <div class="col d-flex">
                                <div class="card radius-15 w-100">
                                    <div class="card-body">
                                        <hr>
                                        <div class="d-flex align-items-center gap-3">
                                            <div>
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuio7OYxGaFDgh6Qc3ueeuVE7pOmomEZv4UA&s"
                                                    width="80" height="80" alt="">
                                            </div>
                                            <div class="">
                                                <a href="{{ url('public/storage/gambar/' . $item->gambar) }}">
                                                    <h5 class="mb-0">{{ $item->nama }}</h5>
                                                </a>
                                                <div class="">
                                                    <p class="mb-0">{{ $item->deskripsi }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

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
            </div>
        </div>
        <div class="col-12 col-lg-12 col-xl-4 d-flex">
            <div class="card radius-15 w-100">
                <div class="card-header">
                    <h4 class="text-center">Plant</h4>
                </div>
                <div class="card-body">
                    @forelse ($tanaman as $item)
                        <div class="row row-cols-1 row-cols-md-12 g-3">
                            <div class="col d-flex">
                                <div class="card radius-15 w-100">
                                    <div class="card-body">
                                        <hr>
                                        <div class="d-flex align-items-center gap-3">
                                            <div>
                                                <a href="{{ url('public/storage/gambar/' . $item->gambar) }}">
                                                    <img class="radius-15" width="80" height="80"
                                                        src="{{ url('public/storage/gambar/' . $item->gambar) }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="">

                                                <h6 class="mb-0">{{ $item->nama }}</h6>

                                                <div class="">
                                                    <p class="mb-0">Rp. {{ number_format($item->harga) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
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
            </div>
        </div>
    </div>
@endsection
