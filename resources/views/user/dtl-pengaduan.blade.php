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
                <h5 class="text-ur-orange fw-700">Id Pengaduan: #001</h5>
                <h5 class="text-ur-orange fw-700">Waktu Pengaduan: 28/02/2023 13:00</h5>
            </div>
            <div class="card-body">
                <!-- Judul -->
                <h5 class="fw-700">Judul Pengaduan:</h5>
                <p class="">Tukang Parkir Liar di Minimarket</p>
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
                <p>Dikirim oleh: Abdul Fajar</p>
                <p>Pada waktu: 28/02/2023 13.45</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <div class="">
                    <a href="" class="btn bg-ur-red" data-bs-toggle="modal" data-bs-target="#editPgdModal">Edit</a>
                </div>
                <div class="">
                    <a href="/pgd-user" class="btn bg-ur-orange">Kembali ke Daftar Pengaduan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Pengaduan Modal -->
    <div class="modal fade" id="editPgdModal" tabindex="-1" aria-labelledby="editPgdModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Pengaduan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <form action="#" class="">
                            <div class="form-group">
                                <label for="judul_pengaduan">Judul Pengaduan</label>
                                <input type="text" name="judul_pengaduan" class="form-control" required />
                            </div>
                            <div class="form-group mt-3">
                                <label for="jenis_pengaduan">Jenis Pengaduan</label>
                                <input type="text" name="jenis-pengaduan" class="form-control mt-3" required />
                            </div>
                            <div class="form-group mt-3">
                                <label for="isi_pengaduan">Isi Pengaduan</label>
                                <input type="text" name="isi_pengaduan" class="form-control mt-3" required />
                            </div>
                            <div class="form-group mt-3">
                                <label for="foto">Gambar Pendukung</label>
                                <input type="file" name="foto" class="form-control mt-3"
                                    accept="image/png, image/jpg" />
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
    <!-- End of Edit Pengaduan Modal -->
    <!-- End of Detail Pengaduan -->
@endsection
