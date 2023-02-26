@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nav-admin.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
@endsection

@include('partials.nav-adm')

@section('container')
    <!-- Main Content -->
    <div class="container">
        <section id="minimal-statistics">
            <div class="row">
                <div class="col-12 mt-5">
                    <h4>Informasi Akun</h4>
                </div>
            </div>
        </section>
    </div>
    <!-- Informasi Akun -->
    <div class="container mb-3">
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="form-group mb-2">
                        <p>Nama Lengkap:</p>
                        <input type="text" class="form-control" placeholder="Nama lengkap anda sesuai KTP" />
                    </div>
                    <div class="form-group mb-2">
                        <p>NIK:</p>
                        <input type="text" class="form-control" placeholder="NIK sesuai KTP " />
                    </div>
                    <div class="form-group mb-2">
                        <p>No. Telp:</p>
                        <input type="text" class="form-control"
                            placeholder="Pastikan nomor yang dicantumkan aktif di WhatsApp" />
                    </div>
                    <div class="form-group mb-2">
                        <p>Alamat:</p>
                        <input type="text" class="form-control" placeholder="Sesuaikan alamat sesuai KTP" />
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <input type="button" class="btn bg-ur-red px-4" value="Edit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of Informasi Akun -->

    <!-- End of Main Content -->
@endsection
