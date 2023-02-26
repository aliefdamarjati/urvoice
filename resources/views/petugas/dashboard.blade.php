@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nav-admin.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
@endsection

@include('partials.nav-ptg')

@section('container')
    <!-- Main Content -->
    <div class="container">
        <section>
            <div class="row">
                <div class="col-12 mt-5">
                    <h4>Dashboard Petugas</h4>
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
                                        <h3>20</h3>
                                        <span>Aduan Tersisa</span>
                                    </div>
                                    <div class="align-self-center">
                                        <span class="material-symbols-outlined text-ur-red" style="font-size: 30px">
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
                                        <h3>67</h3>
                                        <span>Aduan Diproses</span>
                                    </div>
                                    <div class="align-self-center">
                                        <span class="material-symbols-outlined text-ur-red" style="font-size: 30px">
                                            mark_chat_unread </span>
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
                                        <h3>185</h3>
                                        <span>Aduan Ditanggapi</span>
                                    </div>
                                    <div class="align-self-center">
                                        <span class="material-symbols-outlined text-ur-red" style="font-size: 30px">
                                            mark_chat_read </span>
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
