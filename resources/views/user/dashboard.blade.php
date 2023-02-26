@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nav-user.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
@endsection

@include('partials.nav-user')

@section('container')
    <!-- Main Content -->
    <div class="container">
        <section id="minimal-statistics">
            <div class="row">
                <div class="col-12 mt-5 mb-3">
                    <h4 class="text-black">Dashboard User</h4>
                </div>
            </div>
            <!-- Stats -->
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 mb-3">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="media-body text-right">
                                        <h3>50</h3>
                                        <span>Jumlah Laporan</span>
                                    </div>
                                    <div class="align-self-center">
                                        <span class="material-symbols-outlined text-ur-orange" style="font-size: 35px">
                                            person </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-3">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="media-body text-right">
                                        <h3>10</h3>
                                        <span>Laporan Diproses</span>
                                    </div>
                                    <div class="align-self-center">
                                        <span class="material-symbols-outlined text-ur-orange" style="font-size: 30px">
                                            chat_bubble </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-3">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="media-body text-right">
                                        <h3>5</h3>
                                        <span>Aduan Ditanggapi</span>
                                    </div>
                                    <div class="align-self-center">
                                        <span class="material-symbols-outlined text-ur-orange" style="font-size: 30px">
                                            mark_chat_read </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-3">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex justify-content-between">
                                    <div class="media-body text-right">
                                        <h3>0</h3>
                                        <span>Laporan Ditolak</span>
                                    </div>
                                    <div class="align-self-center">
                                        <span class="material-symbols-outlined text-ur-orange" style="font-size: 40px">
                                            chat_error </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Stats -->
        </section>
    </div>

    <!-- End of Main Content -->
@endsection
