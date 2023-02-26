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
                    <h4>Detail Pengaduan</h4>
                </div>
            </div>
        </section>
    </div>
    <!-- Detail Pengaduan -->
    <div class="container mb-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5 class="text-ur-red fw-700">Id Pengaduan: #001</h5>
                <h5 class="text-ur-red fw-700">Waktu Pengaduan: 28/02/2023 13:00</h5>
            </div>
            <div class="card-body">
                <!-- Informasi Pelapor -->
                <h5 class="fw-700">Informasi Pengaduan:</h5>
                <h6 class="card-text fw-500"><span class="text-ur-red">Judul : </span>Tukang Parkir Liar di Minimarket</h6>
                <h6 class="card-text fw-500"><span class="text-ur-red">Nama Pelapor : </span>Arnold James Callahan</h6>
                <h6 class="card-text fw-500"><span class="text-ur-red">NIK Pelapor : </span>91034901491</h6>
                <h6 class="card-text fw-500"><span class="text-ur-red">No.Telp Pelapor : </span>2143156</h6>
                <h6 class="card-text fw-500"><span class="text-ur-red">Jenis Pengaduan : </span>Penertiban</h6>
                <h6 class="card-text fw-500 mb-3"><span class="text-ur-red">Status : </span>Belum Diverifikasi</h6>

                <!-- Isi Pengaduan -->
                <h5 class="fw-700">Isi Pengaduan:</h5>
                <p class="text-justify">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore totam dicta, eum, ipsam beatae quis
                    tempora possimus adipisci quos pariatur aliquid. Repellendus, exercitationem. Pariatur molestias
                    architecto ab natus possimus
                    ullam unde nam consequatur, quidem a accusantium porro assumenda similique libero deleniti omnis maxime
                    sequi odio quasi quibusdam suscipit iure. Enim!
                </p>
                <!-- Gambar Pengaduan -->
                <h5 class="fw-700">Gambar Pendukung:</h5>
                <img class="mx-auto d-block" src="{{ asset('img/logo.png') }}" alt="">
                <!-- Status -->
                <h5 class="fw-700">Status:</h5>
                <p>Belum Diproses</p>
                <!-- Tanggapan -->
                <h5 class="fw-700">Tanggapan:</h5>
                <p>Oke tunggu</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <div class="">
                    <a href="" class="btn bg-ur-orange">Verifikasi</a>
                    <a href="" class="btn bg-ur-orange">Proses</a>
                    <a href="" class="btn bg-ur-orange" data-bs-toggle="modal"
                        data-bs-target="#editPgdModal">Tanggapi</a>
                </div>
                <div class="">
                    <a href="/pgd-admin" class="btn bg-ur-red">Kembali ke Daftar Pengaduan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Detail Pengaduan -->
    <!-- Tanggapan Modal -->
    <div class="modal fade" id="editPgdModal" tabindex="-1" aria-labelledby="tanggapanModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tanggapi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <form action="#" class="">
                            <div class="form-group">
                                <label for="judul_pengaduan">Tanggapan</label>
                                <textarea name="Tanggapan" class="form-control" required></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn bg-ur-red w-100">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Tanggapan Modal -->

    <!-- End of Main Content -->
@endsection
