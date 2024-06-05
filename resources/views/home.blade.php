@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-12 col-lg-12 col-xl-12 d-flex">
            <div class="card radius-15 w-100">
                <div class="card-body">
                    <h4>Welcome to Monitoring</h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-12 col-xl-12 d-flex">
            <div class="card radius-15 w-100">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card radius-15 mb-0 shadow-none border">
                                <div class="card-body text-center">
                                    <div class="widgets-icons mx-auto rounded-circle bg-info text-white"><i
                                            class="bx bx-time"></i>
                                    </div>
                                    <h4 class="mb-0 font-weight-bold mt-3">{{ $book }}</h4>
                                    <p class="mb-0">Book / Jurnal</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-15 mb-0 shadow-none border">
                                <div class="card-body text-center">
                                    <div class="widgets-icons mx-auto bg-wall text-white rounded-circle"><i
                                            class="bx bx-bookmark-alt"></i>
                                    </div>
                                    <h4 class="mb-0 font-weight-bold mt-3">{{ $tanaman }}</h4>
                                    <p class="mb-0">Tanaman</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-15 mb-0 shadow-none border">
                                <div class="card-body text-center">
                                    <div class="widgets-icons mx-auto bg-rose rounded-circle text-white"><i
                                            class="bx bx-bulb"></i>
                                    </div>
                                    <h4 class="mb-0 font-weight-bold mt-3">{{ $sensor }}</h4>
                                    <p class="mb-0">Sensor Pertanian</p>
                                </div>
                            </div>
                        </div>

                        @if (Auth::user()->role == '1')
                            <div class="col">
                                <div class="card radius-15 mb-0 shadow-none border">
                                    <div class="card-body text-center">
                                        <div class="widgets-icons mx-auto rounded-circle bg-danger text-white"><i
                                                class="bx bx-line-chart"></i>
                                        </div>
                                        <h4 class="mb-0 font-weight-bold mt-3">{{ $users }}</h4>
                                        <p class="mb-0">Users</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
